<tr>
    <td data-coin-id="{{ $coin->id }}" data-id="{{ $coin->id }}" class="chid1 remove_favorite">
        <svg class="star active" id="favorite_icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10.2036 6.56323C10.9354 5.06964 13.0643 5.06978 13.7959 6.56347L14.4719 7.94391C14.7618 8.53579 15.3246 8.94688 15.9766 9.04291L17.5178 9.26993C19.1529 9.51076 19.8068 11.5183 18.6273 12.676L17.4961 13.7862C17.0287 14.2449 16.8155 14.9035 16.9254 15.5491L17.1893 17.0995C17.4678 18.7355 15.7476 19.9793 14.2812 19.2023L12.9364 18.4897C12.3507 18.1793 11.6493 18.1793 11.0636 18.4897L9.71877 19.2023C8.25241 19.9793 6.53223 18.7355 6.81069 17.0995L7.07457 15.5491C7.18447 14.9035 6.97128 14.2449 6.50386 13.7862L5.37261 12.6759C4.19311 11.5182 4.84701 9.51073 6.48204 9.26985L8.02256 9.04291C8.67446 8.94687 9.23723 8.53589 9.52712 7.94416L10.2036 6.56323Z"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

    </td>
    <td data-label="Market">
        <div class="flex-box market-item">
            <div class="flex-box icon-box">
                <img style="margin:8px" src="{{ asset("assets/icon/crypto/" . $coin->coin->symbol . '.svg') }}" alt="alt text" />
            </div>
            <div class="content">
                {{ strtoupper($coin->coin->symbol) }} <span>({{ ucfirst($coin->coin->coin_name) }})</span>
            </div>
        </div>
    </td>
    <td class="sell-buy " data-label="Price">
        <div class="flex-box">
            <div>
                <span>
                    {{ text('Buy') }}
                </span>
                <span>
                    ${{ number_format($coin->buy_price) }}
                </span>
            </div>
            <div>
                <span>
                    {{ text('Sell') }}
                </span>
                <span>
                    ${{ number_format($coin->sell_price) }}
                </span>
            </div>
        </div>

    </td>
    <td class="canvas-row" data-label="Dymanic">
        <canvas id="market{{ $coin->id }}-chart"></canvas>
    </td>
    <td >
        <div class="flex-box sell-by-buttons">
            <a class="button" href="{{ route('buy_trade_manual' , ['trade' => strtoupper($coin->coin->symbol ). "_USDT"] ) }}">
                {{ text('Buy') }}

            </a>
            <a class="button" href="{{ route('sell_trade_manual' , ['trade' => strtoupper($coin->coin->symbol ). "_USDT"] ) }}">
                {{ text('Sell') }}

            </a>
        </div>
    </td>
</tr>
