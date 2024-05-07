<!DOCTYPE html>
<html lang="en">
@php
    $total_price = 0;
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Transaksi</title>

    <?php
    $style = '
                    <style>
                        * {
                            font-family: "consolas", sans-serif;
                        }
                        p {
                            display: block;
                            margin: 3px;
                            font-size: 10pt;
                        }
                        table td {
                            font-size: 9pt;
                        }
                        .text-center {
                            text-align: center;
                        }
                        .text-right {
                            text-align: right;
                        }

                        @media print {
                            @page {
                                margin: 0;
                                size: 75mm
                    ';
    ?>
    <?php
    $style .= !empty($_COOKIE['innerHeight']) ? $_COOKIE['innerHeight'] . 'mm; }' : '}';
    ?>
    <?php
    $style .= '
                            html, body {
                                width: 70mm;
                            }
                            .btn-print {
                                display: none;
                            }
                        }
                    </style>
                    ';
    ?>

    {!! $style !!}
</head>

<body onload="window.print()">
    <button class="btn-print" style="position: absolute; right: 1rem; top: rem;" onclick="window.print()">Print</button>
    <div class="text-center">
        <h3 style="margin-bottom: 5px;">{{config('app.name')}}</h3>
        <p>{{fake()->address()}}</p>
    </div>
    <br>
    <div>
        <p style="float: left;">{{ date('d-m-Y') }}</p>
        <p style="float: right">{{ strtoupper($order->user->name) }}</p>
    </div>
    <p class="text-center">===================================</p>
    <div class="clear-both" style="clear: both;"></div>
    <p style="float: left;">No Transaksi </p>
    <p style="float: right;">#{{ $order->id . '_' . $order->created_at->format('dmY') }}</p>
    <p class="text-center">===================================</p>
    <table width="100%" style="border: 0;">
        @foreach ($order->transactions as $transaction)
            <tr>
                <td>{{ $transaction->product->name }}</td>
                <td></td>
                <td class="text-right">{{ $transaction->amount }} × <x-idr :value="$transaction->product->price" /> </td>
                @php
                    $total_price += $transaction->product->price * $transaction->amount;
                @endphp
            </tr>
        @endforeach

    </table>
    <p class="text-center">-----------------------------------</p>

    <table width="100%" style="border: 0;">
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
        <tr>
            <td>Total Harga</td>
            <td class="text-right"><x-idr :value="$total_price" /></td>
        </tr>
        @if ($disc !== '0')
            <tr>
                <td>Diskon {{ $disc }}</td>
                <td class="text-right"><x-idr :value="$discount" /></td>
            </tr>
        @endif
        <tr>
            <td>Total Bayar</td>
            <td class="text-right"><x-idr :value="$total_bayar" /></td>
        </tr>
    </table>

    <p class="text-center">===================================</p>
    <p class="text-center">-- TERIMA KASIH --</p>
    <p class="text-center">===================================</p>

    <script>
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(
            body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight
        );

        document.cookie = "innerHeight=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "innerHeight=" + ((height + 50) * 0.264583);
    </script>
</body>

</html>
