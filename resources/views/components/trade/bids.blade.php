<ul>
    <li class="green order-list-item" data-label="Price(USDT)">
        {{ formatNum(sprintf("%.2f", $bid[0])) }}
    </li>
{{--    <li class="order-list-item" data-label="Size(BTC)"></li>--}}
    <li class="order-list-item" data-label="Size(BTC)">{{ $bid[1] }}</li>
    <li class="bg green-item" data-progress="{{ rand(10 , 80) }}"></li>
</ul>