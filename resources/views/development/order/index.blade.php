<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-8/12">
                <x-card>
                    <div class="text-lg font-semibold dark:text-white">{{ __('Orders') }}</div>
                    <div class="mt-4">
                        @foreach ($orders as $order)
                            <div class="mb-2 w-96">
                                <div class="p-4 border border-gray-300 w-full dark:border-gray-600 rounded">
                                    <a href="{{ route('show_order', $order) }}">
                                        <h5 class="text-xl font-semibold dark:text-white">Order
                                            #{{ $order->id . '_' . $order->created_at->format('dmY') }}</h5>
                                    </a>
                                    <h6 class="text-gray-600">By {{ $order->user->name }}</h6>

                                    <p
                                        class="font-semibold {{ $order->status === 'paid' ? 'text-green-600' : 'text-red-600' }}">
                                        {{ ucfirst($order->status) }}</p>
                                    @if ($order->status !== 'paid')
                                        @if ($order->payment_receipt)
                                            <div class="flex justify-between mt-2">
                                                <a href="{{ url('storage/' . $order->payment_receipt) }}"
                                                    class="bg-blue-500 text-white px-4 py-2 rounded">Show Payment
                                                    Receipt</a>

                                            </div>
                                        @endif
                                    @endif


                                    <div class="flex gap-2 my-1 flex-col">
                                        @if (Auth::user()->is_admin)
                                            @if ($order->receipt)
                                                <a href="{{ Storage::url($order->receipt) }}"><x-primary-button> See
                                                        Payment
                                            @endif
                                            Receipt</x-primary-button></a>
                                            <div class="flex gap-2">
                                                <form action="{{ route('confirm_payment', $order) }}" method="post">
                                                    @csrf
                                                    <x-primary-button class="w-full"><span
                                                            class="fa fa-check"></span></x-primary-button>
                                                </form>
                                                <form action="{{ route('reject_payment', $order) }}" method="post">
                                                    @csrf
                                                    <x-danger-button class="w-full"><i
                                                            class="fa fa-ban"></i></x-danger-button>
                                                </form>
                                        @endif
                                        @if ($order->status === 'paid')
                                            <a href="{{ route('nota', $order) }}"><x-primary-button
                                                    class="fa fa-print"></x-primary-button></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach
            </div>
            </x-card>
        </div>
    </div>
    </div>
</x-app-layout>
