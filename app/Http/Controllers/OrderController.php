<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['customer.district.city.province'])
            ->withCount('return')
            ->orderBy('created_at', 'DESC');

        if (request()->q != '') {
            $orders = $orders->whereAny(['customer_name', 'invoice', 'customer_address'], 'LIKE', '%'.request()->q.'%');
        }

        if (request()->status != '') {
            $orders = $orders->where('status', request()->status);
        }
        $orders = $orders->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function view($invoice)
    {
        $order = Order::with(['customer.district.city.province', 'payment', 'details.product'])->where('invoice', $invoice)->first();

        return view('orders.view', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->details()->delete();
        $order->payment()->delete();
        $order->delete();

        return redirect(route('orders.index'));
    }

    public function acceptPayment($invoice)
    {
        $order = Order::with(['payment'])->where('invoice', $invoice)->first();
        $order->payment()->update(['status' => 1]);
        $order->update(['status' => 2]);

        return redirect(route('orders.view', $order->invoice));
    }

    public function shippingOrder(Request $request)
    {
        $order = Order::with(['customer'])->find($request->order_id);
        $order->update(['tracking_number' => $request->tracking_number, 'status' => 3]);
        Mail::to($order->customer->email)->send(new OrderMail($order));

        return redirect()->back();
    }

    public function return($invoice)
    {
        $order = Order::with(['return', 'customer'])->where('invoice', $invoice)->first();

        return view('orders.return', compact('order'));
    }

    public function approveReturn(Request $request)
    {
        $this->validate($request, ['status' => 'required']);
        $order = Order::find($request->order_id);
        $order->return()->update(['status' => $request->status]);
        $order->update(['status' => 4]);

        return redirect()->back();
    }
}
