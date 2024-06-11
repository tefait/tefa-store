<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function IndexSettings()
    {
        $settings = Setting::all();

        return view('settings.index', compact('settings'));
    }

    public function StoreSettings(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                Setting::updateOrCreate(['key' => $key], ['value' => implode(';', $value)]);
            } else {
                Setting::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }
        \Illuminate\Support\Facades\Cache::forget('settings');
        \Illuminate\Support\Facades\Cache::rememberForever(
            'settings',
            fn () => Setting::all()->keyBy('key'),
        );

        return redirect(route('settings'))->with('sucess', 'Settings updated successfully');
    }

    public function index()
    {
        $top_sales = Product::withCount('orders')->orderBy('orders_count', 'desc')->get();
        $product_count = $top_sales->count();
        $user_count = Customer::count();
        $order_count = OrderDetail::count();

        return view('dashboard.index', compact('user_count', 'order_count', 'top_sales', 'product_count'));
    }

    public function returnReport()
    {
        $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');

        if (request()->date != '') {
            $date = explode(' - ', request()->date);
            $start = Carbon::parse($date[0])->format('Y-m-d').' 00:00:01';
            $end = Carbon::parse($date[1])->format('Y-m-d').' 23:59:59';
        }

        $orders = Order::with(['customer.district'])->has('return')->whereBetween('created_at', [$start, $end])->get();

        return view('report.return', compact('orders'));
    }

    public function returnReportPdf($daterange)
    {
        $date = explode('+', $daterange);
        $start = Carbon::parse($date[0])->format('Y-m-d').' 00:00:01';
        $end = Carbon::parse($date[1])->format('Y-m-d').' 23:59:59';

        $orders = Order::with(['customer.district'])->has('return')->whereBetween('created_at', [$start, $end])->get();
        $pdf = PDF::loadView('report.return_pdf', compact('orders', 'date'));

        return $pdf->stream();
    }

    public function orderReport()
    {
        //INISIASI 30 HARI RANGE SAAT INI JIKA HALAMAN PERTAMA KALI DI-LOAD
        //KITA GUNAKAN STARTOFMONTH UNTUK MENGAMBIL TANGGAL 1
        $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        //DAN ENDOFMONTH UNTUK MENGAMBIL TANGGAL TERAKHIR DIBULAN YANG BERLAKU SAAT INI
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');

        //JIKA USER MELAKUKAN FILTER MANUAL, MAKA PARAMETER DATE AKAN TERISI
        if (request()->date != '') {
            //MAKA FORMATTING TANGGALNYA BERDASARKAN FILTER USER
            $date = explode(' - ', request()->date);
            $start = Carbon::parse($date[0])->format('Y-m-d').' 00:00:01';
            $end = Carbon::parse($date[1])->format('Y-m-d').' 23:59:59';
        }

        //BUAT QUERY KE DB MENGGUNAKAN WHEREBETWEEN DARI TANGGAL FILTER
        $orders = Order::with(['customer.district'])->whereBetween('created_at', [$start, $end])->get();

        //KEMUDIAN LOAD VIEW
        return view('report.order', compact('orders'));
    }

    public function orderReportPdf($daterange)
    {
        $date = explode('+', $daterange);
        $start = Carbon::parse($date[0])->format('Y-m-d').' 00:00:01';
        $end = Carbon::parse($date[1])->format('Y-m-d').' 23:59:59';

        $orders = Order::with(['customer.district'])->whereBetween('created_at', [$start, $end])->get();
        $pdf = Pdf::loadView('report.order_pdf', compact('orders', 'date'));

        return $pdf->stream();
    }
}
