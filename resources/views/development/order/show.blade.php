<x-app-layout>
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div class="mb-5">
                        <h1 class="text-3xl font-bold text-gray-900">Order Detail</h1>
                    </div>
                    <div class="mb-1">
                        <label class="block mb-1 text-sm font-bold text-gray-700">Order ID</label>
                        <p class="text-lg font-semibold mb-3">{{ $order->id }}</p>
                    </div>
                    <div class="mb-1">
                        <label class="block mb-1 text-sm font-bold text-gray-700">By</label>
                        <p class="text-lg font-semibold mb-3">{{ $order->user->name }}</p>
                    </div>
                    <div class="mb-1">
                        <label class="block mb-1 text-sm font-bold text-gray-700">Status</label>
                        <p
                            class="text-lg font-semibold {{ $order->status === 'paid' ? 'text-green-500' : 'text-red-600' }}">
                            {{ ucfirst($order->status) }}</p>
                    </div>
                    <hr class="mb-6 border-t">
                    <div class="mb-2">
                        <label class="block mb-1 text-sm font-bold text-gray-700">Order Details</label>
                        @php
                            $total_price = 0;
                        @endphp
                        @foreach ($order->transactions as $transaction)
                            <section class="flex gap-2 items-center">
                                <img class="size-1/4" src="{{ Storage::url($transaction->product->image) }}"
                                    alt="{{ $transaction->product->name }}">
                                <p class="text-gray-700 dark:text-gray-100 p-2"><a
                                        href="{{ route('product.show', $transaction->product) }}"
                                        class="p-1 bg-gray-200 rounded-sm">{{ $transaction->product->name }}</a> :
                                    {{ $transaction->amount }} pcs | <x-idr :value='$transaction->product->price * $transaction->amount' />
                                </p>
                            </section>
                            @php
                                $total_price += $transaction->product->price * $transaction->amount;
                            @endphp
                            <hr>
                        @endforeach
                    </div>
                    <div class="mb-1">
                        @if ($total_price >= 50000)
                            @php
                                $discount = 0.1 * $total_price;
                                $disc = '10%';
                            @endphp
                        @else
                            @php
                                $discount = 0;
                                $disc = '0';
                            @endphp
                        @endif
                        @php
                            $total_bayar = $total_price - $discount;
                        @endphp
                        <label class="block mb-1 text-sm font-bold text-gray-700">Total</label>
                        <p class="text-lg font-semibold"><x-idr :value="$total_price" /></p>
                        <label class="block mb-1 text-sm font-bold text-gray-700">Discount {{ $disc }}</label>
                        <p class="text-lg font-semibold">-<x-idr :value="$discount" /></p>
                        <label class="block mb-1 text-sm font-bold text-gray-700">Total Payment</label>
                        <p class="text-2xl font-extrabold"><x-idr :value="$total_bayar" /></p>
                    </div>

                    @if ($order->status !== 'paid' && $order->receipt === null && !Auth::user()->is_admin)
                        <form action="{{ route('store_receipt', $order) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label class="block mb-1 text-sm font-bold text-gray-700">Upload your payment
                                    receipt</label>
                                <input type="file" name="payment_receipt"
                                    class="w-full p-2 border border-gray-300 rounded">
                            </div>
                            <button type="submit"
                                class="w-full px-3 py-2 text-white bg-gray-950 rounded">Submit
                                payment</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
