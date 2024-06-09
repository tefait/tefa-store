<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderReturn;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::withCount(['return'])->where('customer_id', auth()->guard('customer')->user()->id)
            ->orderBy('created_at', 'DESC')->paginate(10);

        return view('ecommerce.orders.index', compact('orders'));
    }

    public function view($invoice)
    {
        $order = Order::with(['district.city.province', 'details', 'details.product', 'payment'])
            ->where('invoice', $invoice)->first();

        if (Gate::forUser(auth()->guard('customer')->user())->allows('order-view', $order)) {
            return view('ecommerce.orders.view', compact('order'));
        }

        return redirect(route('customer.orders'))->with(['error' => 'Anda Tidak Diizinkan Untuk Mengakses Order Orang Lain']);
    }

    public function pdf($invoice)
    {
        $order = Order::with(['district.city.province', 'details', 'details.product', 'payment'])
            ->where('invoice', $invoice)->first();
        if (!Gate::forUser(auth()->guard('customer')->user())->allows('order-view', $order)) {
            return redirect(route('customer.view_order', $order->invoice));
        }

        $pdf = Pdf::loadView('ecommerce.orders.pdf', compact('order'));

        return $pdf->stream();
    }

    public function acceptOrder(Request $request)
    {
        //CARI DATA ORDER BERDASARKAN ID
        $order = Order::find($request->order_id);
        //VALIDASI KEPEMILIKAN
        if (Gate::forUser(auth()->guard('customer')->user())->allows('order-view', $order)) {
            return redirect()->back()->with(['error' => 'Bukan Pesanan Kamu']);
        }

        //UBAH STATUSNYA MENJADI 4
        $order->update(['status' => 4]);

        //REDIRECT KEMBALI DENGAN MENAMPILKAN ALERT SUCCESS
        return redirect()->back()->with(['success' => 'Pesanan Dikonfirmasi']);
    }

    public function returnForm($invoice)
    {
        //LOAD DATA BERDASARKAN INVOICE
        $order = Order::where('invoice', $invoice)->first();

        //LOAD VIEW RETURN.BLADE.PHP DAN PASSING DATA ORDER
        return view('ecommerce.orders.return', compact('order'));
    }

    public function processReturn(Request $request, $id)
    {
        $this->validate($request, [
            'reason' => 'required|string',
            'refund_transfer' => 'required|string',
            'photo' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $return = OrderReturn::where('order_id', $id)->first();
        if ($return) {
            return redirect()->back()->with(['error' => 'Permintaan Refund Dalam Proses']);
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . Str::random(5) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/return', $filename);

            OrderReturn::create([
                'order_id' => $id,
                'photo' => $filename,
                'reason' => $request->reason,
                'refund_transfer' => $request->refund_transfer,
                'status' => 0,
            ]);

            //CODE BARU HANYA PADA BAGIAN INI SAJA
            $order = Order::find($id); //AMBIL DATA ORDER BERDASARKAN ID
            //KIRIM PESAN MELALUI BOT
            $this->sendMessage('#' . $order->invoice, $request->reason);
            //CODE BARU HANYA PADA BAGIAN INI SAJA

            return redirect()->back()->with(['success' => 'Permintaan Refund Dikirim']);
        }
    }

    private function getTelegram($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . $params);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $content = curl_exec($ch);
        curl_close($ch);

        return json_decode($content, true);
    }

    private function sendMessage($order_id, $reason)
    {
        $key = env('TELEGRAM_KEY'); //AMBIL TOKEN DARI ENV
        //KEMUDIAN KIRIM REQUEST KE TELEGRAM UNTUK MENGAMBIL DATA USER YANG ME-LISTEN BOT KITA
        $chat = $this->getTelegram('https://api.telegram.org/' . $key . '/getUpdates', '');
        //JIKA ADA
        if ($chat['ok']) {
            //SAYA BERASUMSI PESAN INI HANYA DIKIRIM KE ADMIN, MAKA KITA TIDAK PERLU MELOOPING HASIL DARI GET DATA USER
            //CUKUP MENGAMBIL KEY 0 SAJA ATAU LIST YANG PERTAMA
            //UNTUK MENDAPATKAN CHAT_ID
            $chat_id = $chat['result'][0]['message']['chat']['id'];
            //TEKS YANG DIINGINKAN
            $text = 'Hai Tefa IT, OrderID ' . $order_id . ' Melakukan Permintaan Refund Dengan Alasan "' . $reason . '", Segera Dicek Ya!';

            //DAN KIRIM REQUEST KE TELEGRAM UNTUK MENGIRIMKAN PESAN
            return $this->getTelegram('https://api.telegram.org/' . $key . '/sendMessage', '?chat_id=' . $chat_id . '&text=' . $text);
        }
    }

    public function paymentForm()
    {
        return view('ecommerce.payment');
    }

    public function storePayment(Request $request)
    {
        $this->validate($request, [
            'invoice' => 'required|exists:orders,invoice',
            'name' => 'required|string',
            'transfer_to' => 'required|string',
            'transfer_date' => 'required',
            'amount' => 'required|integer',
            'proof' => 'required|image|mimes:jpg,png,jpeg,webp,svg,gif,',
        ]);

        DB::beginTransaction();
        try {
            $order = Order::where('invoice', $request->invoice)->first();
            if ($order->subtotal != $request->amount) {
                return redirect()->back()->with(['error' => 'Error, Pembayaran Harus Sama Dengan Tagihan']);
            }

            if ($order->status == 0 && $request->hasFile('proof')) {
                $file = $request->file('proof');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/payment', $filename);

                Payment::create([
                    'order_id' => $order->id,
                    'name' => $request->name,
                    'transfer_to' => $request->transfer_to,
                    'transfer_date' => Carbon::parse($request->transfer_date)->format('Y-m-d'),
                    'amount' => $request->amount,
                    'proof' => $filename,
                    'status' => false,
                ]);
                $order->update(['status' => 1]);
                DB::commit();

                return redirect()->back()->with(['success' => 'Pesanan Dikonfirmasi']);
            }
            return redirect()->back()->with(['error' => 'Error, Upload Bukti Transfer']);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
