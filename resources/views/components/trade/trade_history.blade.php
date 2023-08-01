<tr>
    <td class="chid2" data-label="Market">
        <div class="flex-box market-item">
            <div class="flex-box icon-box">
                <img style="width: 36px" src="{{ asset("assets/icon/crypto/" . $trade->coin->coin->symbol . '.svg') }}" alt="alt text" />
            </div>
            <div class="content">
                {{ strtoupper($trade->coin->coin->symbol) }} <span>( {{ ucfirst($trade->coin->coin->coin_name) }} )</span>
            </div>
        </div>
    </td>
    <td class="sell-buy chid2" data-label="Price">
        <div class="justify-content-start  flex-box">
            <div>
                <span>
                    {{text('Entry')}}:
                </span>
                <span>
                    {{ number_format($trade->entry_price) }}
                </span>
            </div>
            <div>
                <span>
                    {{text('Exit')}}:
                </span>
                <span>
                    {{ number_format($trade->exit_price) }}
                </span>
            </div>
        </div>
    </td>
    <td class="chid2" data-label="Dymanic">
        <div class="flex-box justify-content-start">
            @if($trade->profit > 0)
                <h6 class="value-item green flex-box">
                    <img src="{{ asset('assets/icon/green-arrow.svg') }}">
                    {{ formatNum($trade->profit) }}
                </h6>
            @else
                <h6 class="value-item red flex-box">
                    <img src="{{ asset('assets/icon/red-arrow.svg') }}">
                    {{ formatNum($trade->profit) }}
                </h6>
            @endif

            <h6 class="grey-item">
                {{ text('Avg.Profit') }}
            </h6>
        </div>
    </td>
    <td>
        <div class="ProgressBar ProgressBar--animateAll" data-progress="59">
            <svg class="ProgressBar-contentCircle">
                <!-- on défini le l'angle et le centre de rotation du cercle -->
                <circle transform="rotate(0, 0, 0)"
                        class="ProgressBar-background" cx="22" cy="22" r="21"/>
                <circle transform="rotate(0, 0, 0)" class="ProgressBar-circle"
                        cx="22" cy="22" r="21"/>
                <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
            </svg>
            <p>
                {{ text('Correctness') }}
            </p>
        </div>

    </td>
</tr>