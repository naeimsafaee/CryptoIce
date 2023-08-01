<ul>
    <li class="red order-list-item" data-label="Price(USDT)">
        {{ formatNum(sprintf("%.2f", $ask[0])) }}
    </li>
{{--    <li class="order-list-item" data-label="Size(BTC)"></li>--}}
    <li class="order-list-item" data-label="Size(BTC)">{{ $ask[1] }}</li>
    <li class="bg pink-item" data-progress="{{ rand(10 , 80) }}"></li>
</ul>