<tr>
    <td data-label="Market">
        <div class="flex-box market-item">
            <div class="flex-box icon-box">
                <img src="{{ asset("assets/icon/crypto/" . $home_coin->coin->symbol . '.svg') }}" alt="alt text" />
            </div>
            <div class="content">
                {{ strtoupper($home_coin->coin->symbol) }} <span>({{ ucfirst($home_coin->coin->coin_name) }})</span>
            </div>
        </div>
    </td>
    <td class="table-space"></td>
    <td class="bold-chid" data-label="Price">${{ number_format($home_coin->price) }}</td>
    <td  class="bold-chid" data-label="Change 24H">{{ formatNum(sprintf("%.2f", $home_coin->{'24_change'})) }}%</td>
    <td data-label="Dymanic">
        <canvas id="market{{ $home_coin->id }}-chart"></canvas>
    </td>
</tr>
