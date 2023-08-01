@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                <a href="{{ route('wallet') }}" class="flex-box second-title-item">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <h6>
                        {{ ucfirst($coin_price->coin->coin_name) }} {{ ucfirst(strtolower($trade[1])) }}
                    </h6>
                </a>
            </div>
            <div class="padding-items col-lg-85 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item" style="padding: 0 !important;overflow: hidden;">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div id="tradingview_e692f" style="height: 610px"></div>
                                <div class="tradingview-widget-copyright"><a
                                            href="https://www.tradingview.com/symbols/{{ $trade[0] . $trade[1] }}/"
                                            rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a>
                                    by TradingView
                                </div>

                            </div>
                            <!-- TradingView Widget END -->
                            {{--                            <img style="width: 100%" src="{{ asset('assets/photo/cart.svg') }}">--}}
                        </div>
                    </div>
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">

                            <div class="row">

                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="tabs">
                                        <div style="width: max-content" role="tablist" class="tabs__control">
                                            <div class="indicator"></div>
                                            <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1"
                                                    class="tabs__tab tabs__tab--current">Sell
                                            </button>
                                            <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2"
                                                    class="tabs__tab" tabindex="-1">Buy
                                            </button>
                                        </div>
                                        <div class="tabs__contents">
                                            <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1"
                                                 class="tabs__content tabs__content--current">
                                                <div class="row">
                                                    <div class="padding-items col-lg-12">
                                                        <div class="flex-box justify-content-start align-items-start">
                                                            <div class="switch-button"><span class="active"></span>
                                                                <button onclick="set_limit()"
                                                                        class="switch-button-case left active-case">
                                                                    Limit
                                                                </button>
                                                                <button onclick="set_market()"
                                                                        class="market_button switch-button-case right">
                                                                    Market
                                                                </button>
                                                            </div>
                                                            {{--<div class="dropdown-second-item">
                                                                <div class="flex-box justify-content-between select-item">
                                                                    <p>No stop</p>
                                                                    <img src="{{ asset('assets/icon/grey-arrow.svg') }}">
                                                                </div>
                                                                <ul>
                                                                    <li onclick="hide_limit_price()">No stop</li>
                                                                    <li onclick="set_limit_price()">Stop limit</li>
                                                                </ul>
                                                            </div>--}}
                                                        </div>
                                                    </div>
                                                    <div class=" col-lg-12">
                                                        <div class="row">
                                                            <div class="row">
                                                                {{--<div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12 stop_price_limit">
                                                                    <div style="margin-top: 0" class="input-row ">
                                                                        <label>
                                                                            Stop price
                                                                        </label>
                                                                        <div class="drop-down">
                                                                            <div class="selected">
                                                                                --}}{{--<svg class="drop-arrow grey-arrow" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8 9.85059L12 13.5519L16 9.85059"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                </svg>
                                                                                <div class="grey right--item">mark</div>--}}{{--

                                                                                <a class="selected" >
                                                                                    Stop price
                                                                                </a>
                                                                            </div>
                                                                            --}}{{--<div class="options">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a >
                                                                                            Stop price
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a >
                                                                                            Stop price
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </div>--}}{{--
                                                                        </div>
                                                                    </div>
                                                                </div>--}}
                                                                <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                    <div style="margin-top: 0" class="input-row ">
                                                                        <label>
                                                                            Price
                                                                        </label>
                                                                        <div class="position-relative">
                                                                            <div class="dollar-sign">
                                                                                $
                                                                            </div>
                                                                            <p class="right--item grey">
                                                                                USDT
                                                                            </p>
                                                                            <input style="width: 100%!important;"
                                                                                   class="padding-left"
                                                                                   value="{{ number_format($price) }}"
                                                                                   type="text" placeholder="price"
                                                                                   id="sell_price_input"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                <div style="margin-top: 0" class="input-row ">
                                                                    <label>
                                                                        Size
                                                                    </label>
                                                                    <div class="position-relative">

                                                                        <p style="bottom: 13px" class="right--item ">
                                                                            <span class="fw-bold percent_of_size"
                                                                                  id="sell_percent_of_size">0%</span>
                                                                            <span class="grey">{{ strtoupper($trade[0]) }}</span>
                                                                        </p>
                                                                        <input type="text" placeholder="Size"
                                                                               id="sell_size_input"/>
                                                                    </div>
                                                                </div>

                                                                <form action="/p/quote.php" method="GET">
                                                                    <div class="debt-amount-slider">
                                                                        <input checked type="radio" name="debt-amount"
                                                                               id="6" value="1" required>
                                                                        <label for="6" data-debt-amount=" 0%"
                                                                               onclick="set_progress_sell(0)"></label>

                                                                        <input type="radio" name="debt-amount" id="7"
                                                                               value="2" required>
                                                                        <label for="7" data-debt-amount="20%"
                                                                               onclick="set_progress_sell(20)"></label>

                                                                        <input type="radio" name="debt-amount" id="8"
                                                                               value="3" required>
                                                                        <label for="8" data-debt-amount="50%"
                                                                               onclick="set_progress_sell(50)"></label>

                                                                        <input type="radio" name="debt-amount" id="9"
                                                                               value="4" required>
                                                                        <label for="9" data-debt-amount="75%"
                                                                               onclick="set_progress_sell(75)"></label>

                                                                        <input type="radio" name="debt-amount" id="10"
                                                                               value="5" required>
                                                                        <label for="10" data-debt-amount="100%"
                                                                               onclick="set_progress_sell(100)"></label>

                                                                        <div class="debt-amount-pos"></div>
                                                                    </div>
                                                                </form>

                                                                <p class="padding-items">
                                                                    <span class="grey margin-right">Sell</span>
                                                                    <span id="sell_progress">0 {{ strtoupper($trade[0]) }}</span>
                                                                </p>
                                                                <span id="error_sell" style="color: red;display: none">not enough coin!</span>
                                                            </div>
                                                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                <div style="margin-top: 0" class="input-row">
                                                                    <label class="invisible">
                                                                        Amount to Buy
                                                                    </label>
                                                                    <a class="Sell-button dark-button d-block"
                                                                       onclick="sell()">Sell</a>
                                                                    <p class="padding-items">
                                                                        <span class="grey margin-right">Cost</span>
                                                                        <span>{{ number_format($price) }} USDT</span>
                                                                    </p>
                                                                    <p class="padding-items">
                                                                        <span class="grey margin-right">Max</span>
                                                                        <span>{{ sprintf("%.4f",$client_max_coin) }} {{ strtoupper($trade[0]) }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div data-tab-content="2" role="tabpanel" tabindex="0" id="tab-2"
                                                 class="tabs__content" hidden>
                                                <div class="row">
                                                    <div class="padding-items col-lg-12">
                                                        <div class="flex-box justify-content-start align-items-start">
                                                            <div class="switch-button"><span class="active"></span>
                                                                <button onclick="set_limit()"
                                                                        class="switch-button-case left active-case">
                                                                    Limit
                                                                </button>
                                                                <button onclick="set_market()"
                                                                        class="market_button switch-button-case right">
                                                                    Market
                                                                </button>
                                                            </div>
                                                            {{--<div class="dropdown-second-item">
                                                                <div class="flex-box justify-content-between select-item">
                                                                    <p>No stop</p>
                                                                    <img src="{{ asset('assets/icon/grey-arrow.svg') }}">
                                                                </div>
                                                                <ul>
                                                                    <li onclick="hide_limit_price()">No stop</li>
                                                                    <li onclick="set_limit_price()">Stop limit</li>
                                                                </ul>
                                                            </div>--}}
                                                        </div>
                                                    </div>
                                                    <div class=" col-lg-12">
                                                        <div class="row">
                                                            {{--<div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12 stop_price_limit">
                                                                <div style="margin-top: 0" class="input-row ">
                                                                    <label>
                                                                        Stop price
                                                                    </label>
                                                                    <div class="drop-down">
                                                                        <div class="selected">
                                                                           --}}{{-- <svg class="drop-arrow grey-arrow" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M8 9.85059L12 13.5519L16 9.85059"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                            </svg>
                                                                            <div class="grey right--item">mark</div>--}}{{--

                                                                            <a class="selected" >
                                                                                Stop price
                                                                            </a>
                                                                        </div>
                                                                        --}}{{--<div class="options">
                                                                            <ul>
                                                                                <li>
                                                                                    <a >
                                                                                        Stop price
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a >
                                                                                        Stop price
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>--}}{{--
                                                                    </div>
                                                                </div>
                                                            </div>--}}
                                                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                <div style="margin-top: 0" class="input-row ">
                                                                    <label>
                                                                        Price
                                                                    </label>
                                                                    <div class="position-relative">
                                                                        <div class="dollar-sign">
                                                                            $
                                                                        </div>
                                                                        <p class="right--item grey">
                                                                            USDT
                                                                        </p>
                                                                        <input style="width: 100%!important;"
                                                                               class="padding-left"
                                                                               type="text"
                                                                               value="{{ number_format($price) }}"
                                                                               placeholder="Price"
                                                                               id="buy_price_input"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                <div style="margin-top: 0" class="input-row ">
                                                                    <label>
                                                                        Amount
                                                                    </label>
                                                                    <div class="position-relative">

                                                                        <p style="bottom: 13px" class="right--item ">
                                                                            <span class="fw-bold percent_of_size"
                                                                                  id="buy_percent_of_size">0%</span>
                                                                            <span class="grey">USDT</span>
                                                                        </p>
                                                                        <input type="text" placeholder="Size"
                                                                               id="buy_size_input"/>

                                                                    </div>
                                                                </div>
                                                                <form action="/p/quote.php" method="GET">
                                                                    <div class="debt-amount-slider">
                                                                        <input checked type="radio" name="debt-amount-b"
                                                                               id="6-b" value="1" required>
                                                                        <label for="6-b" data-debt-amount=" 0%"
                                                                               onclick="set_progress_buy(0)"></label>

                                                                        <input type="radio" name="debt-amount-b"
                                                                               id="7-b"
                                                                               value="2" required>
                                                                        <label for="7-b" data-debt-amount="20%"
                                                                               onclick="set_progress_buy(20)"></label>

                                                                        <input type="radio" name="debt-amount-b"
                                                                               id="8-b"
                                                                               value="3" required>
                                                                        <label for="8-b" data-debt-amount="50%"
                                                                               onclick="set_progress_buy(50)"></label>

                                                                        <input type="radio" name="debt-amount-b"
                                                                               id="9-b"
                                                                               value="4" required>
                                                                        <label for="9-b" data-debt-amount="75%"
                                                                               onclick="set_progress_buy(75)"></label>

                                                                        <input type="radio" name="debt-amount-b"
                                                                               id="10-b"
                                                                               value="5" required>
                                                                        <label for="10-b" data-debt-amount="100%"
                                                                               onclick="set_progress_buy(100)"></label>

                                                                        <div class="debt-amount-pos"></div>
                                                                    </div>
                                                                </form>

                                                                <p class="padding-items">
                                                                    <span class="grey margin-right">Buy</span>
                                                                    <span id="buy_progress">0 {{ strtoupper($trade[0]) }}</span>
                                                                </p>
                                                                <span id="error_buy" style="color: red;display: none">not enough money!</span>
                                                            </div>
                                                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                                                <div style="margin-top: 0" class="input-row">
                                                                    <label class="invisible">
                                                                        Amount to Buy
                                                                    </label>
                                                                    <a class="Sell-button dark-button d-block"
                                                                       onclick="buy()">Buy</a>
                                                                    <p class="padding-items">
                                                                        <span class="grey margin-right">Cost</span>
                                                                        <span>{{ number_format($price) }} USDT</span>
                                                                    </p>
                                                                    <p class="padding-items">
                                                                        <span class="grey margin-right">Max</span>
                                                                        <span>{{ sprintf("%.4f",$max_buy) }} {{ strtoupper($trade[0]) }}</span>
                                                                    </p>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-row col-lg-12 col-md-12 col-sm-12 col-12">
                                    <ul class="tabs">
                                        <li class="active-tab">Positions</li>
                                        <li>Order History</li>
                                        <li>Trade History</li>
                                        <li>Transaction History</li>
                                        <li>Assets</li>
                                    </ul>

                                    <ul class="tabs-content">
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="child1">{{ text('Time') }}</th>
                                                    <th class="child2">{{ text('Symbol') }}</th>
                                                    <th class="child3">{{ text('Buy/Sell') }}</th>
                                                    <th class="child4">{{ text('Price') }}</th>
                                                    <th class="child5">{{ text('Amount') }}</th>
                                                    <th class="child6">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($orders->count() > 0)

                                                    <div class="order-list">

                                                        @foreach($orders as $order)
                                                            @if($order->has_canceled || $order->has_filled)
                                                                @continue
                                                            @endif
                                                            <tr>
                                                                <td class="child1">
                                                                    {{ \Carbon\Carbon::createFromDate($order->created_at)->format('Y-m-d') }}
                                                                </td>
                                                                <td class="child2">
                                                                    {{ strtoupper($order->coin->coin->symbol) . "/USDT" }}
                                                                </td>
                                                                <td class="child3">
                                                                    {{ $order->is_buy ? "BUY" : "SELL" }}
                                                                </td>
                                                                <td class="child4">
                                                                    ${{ $order->price }}
                                                                </td>
                                                                <td class="child5">
                                                                    {{ sprintf("%.4f", $order->amount) }}
                                                                </td>
                                                                <td class="child6">
                                                                    @if($order->has_canceled)
                                                                        canceled
                                                                    @elseif($order->has_filled)
                                                                        filled
                                                                    @else
                                                                        <a href="{{ route('cancel_order' , $order->id) }}">cancel</a>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                    </div>

                                                @endif

                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="child1">{{ text('Time') }}</th>
                                                    <th class="child2">{{ text('Symbol') }}</th>
                                                    <th class="child3">{{ text('Buy/Sell') }}</th>
                                                    <th class="child4">{{ text('Price') }}</th>
                                                    <th class="child5">{{ text('Amount') }}</th>
                                                    <th class="child6">{{ text('Cancel') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($orders->count() > 0)

                                                    <div class="order-list">

                                                        @foreach($orders as $order)
                                                            @if(!$order->has_canceled && !$order->has_filled)
                                                                @continue
                                                            @endif
                                                            <tr>
                                                                <td class="child1">
                                                                    {{ \Carbon\Carbon::createFromDate($order->created_at)->format('Y-m-d') }}
                                                                </td>
                                                                <td class="child2">
                                                                    {{ strtoupper($order->coin->coin->symbol) . "/USDT" }}
                                                                </td>
                                                                <td class="child3">
                                                                    {{ $order->is_buy ? "BUY" : "SELL" }}
                                                                </td>
                                                                <td class="child4">
                                                                    ${{ $order->price }}
                                                                </td>
                                                                <td class="child5">
                                                                    {{ sprintf("%.4f", $order->amount) }}
                                                                </td>
                                                                <td class="child6">
                                                                    @if($order->has_canceled)
                                                                        canceled
                                                                    @elseif($order->has_filled)
                                                                        filled
                                                                    @else
                                                                        <a href="{{ route('cancel_order' , $order->id) }}">cancel</a>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                    </div>

                                                @endif

                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="child1">{{ text('Time') }}</th>
                                                    <th class="child2">{{ text('Symbol') }}</th>
                                                    <th class="child3">{{ text('Buy/Sell') }}</th>
                                                    <th class="child4">{{ text('Price') }}</th>
                                                    <th class="child5">{{ text('Amount') }}</th>
                                                    <th class="child6">{{ text('Cancel') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($orders->count() > 0)

                                                    <div class="order-list">

                                                        @foreach($orders as $order)
                                                            @if(!$order->has_canceled && $order->has_filled)
                                                                <tr>
                                                                    <td class="child1">
                                                                        {{ \Carbon\Carbon::createFromDate($order->created_at)->format('Y-m-d') }}
                                                                    </td>
                                                                    <td class="child2">
                                                                        {{ strtoupper($order->coin->coin->symbol) . "/USDT" }}
                                                                    </td>
                                                                    <td class="child3">
                                                                        {{ $order->is_buy ? "BUY" : "SELL" }}
                                                                    </td>
                                                                    <td class="child4">
                                                                        ${{ $order->price }}
                                                                    </td>
                                                                    <td class="child5">
                                                                        {{ sprintf("%.4f", $order->amount) }}
                                                                    </td>
                                                                    <td class="child6">
                                                                        @if($order->has_canceled)
                                                                            canceled
                                                                        @elseif($order->has_filled)
                                                                            filled
                                                                        @else
                                                                            <a href="{{ route('cancel_order' , $order->id) }}">cancel</a>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        @endforeach

                                                    </div>

                                                @endif

                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="child1">{{ text('Time') }}</th>
                                                    <th class="child2">{{ text('Symbol') }}</th>
                                                    <th class="child3">{{ text('Buy/Sell') }}</th>
                                                    <th class="child4">Amount</th>
                                                    <th class="child6">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($transactions->count() > 0)

                                                    <div class="order-list">

                                                        @foreach($transactions as $transaction)
                                                            <tr>
                                                                <td class="child1">
                                                                    {{ \Carbon\Carbon::createFromDate($transaction->created_at)->format('Y-m-d') }}
                                                                </td>
                                                                <td class="child2">
                                                                    {{ strtoupper($transaction->coin->coin->symbol) . "/USDT" }}
                                                                </td>
                                                                <td class="child3">
                                                                    {{ $transaction->is_deposit ? "Deposit" : "Withdraw" }}
                                                                </td>
                                                                <td class="child4">
                                                                    {{ $transaction->amount }}
                                                                </td>
                                                                <td class="child6">
                                                                    @if($transaction->status === 0)
                                                                        pending
                                                                    @elseif($transaction->status === 1)
                                                                        done
                                                                    @else
                                                                        failed
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                    </div>

                                                @endif
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="chid2">Symbol</th>
                                                    <th class="chid3">Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($client_coin as $c_coin)
                                                    @if($c_coin->amount == 0)
                                                        @continue;
                                                    @endif
                                                    <tr>
                                                        <td class="chid2" data-label="Market">
                                                            <div class="flex-box market-item">
                                                                <div class="flex-box icon-box">
                                                                    <img src="{{ asset("assets/icon/crypto/" . $c_coin->coin_price->coin->symbol . '.svg') }}"
                                                                         alt="alt text"/>
                                                                </div>
                                                                <div class="content">
                                                                    {{ strtoupper($c_coin->coin_price->coin->symbol) }}
                                                                    <span>({{ ucfirst($c_coin->coin_price->coin->coin_name) }})</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="sell-buy chid3" data-label="Price">
                                                            {{ ($c_coin->amount) }}
                                                        </td>
                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="coin-table Trade-history">
                                                <thead>
                                                <tr>
                                                    <th class="chid2">Market</th>
                                                    <th class="chid3">Price</th>
                                                    <th class="chid4">Dymanic</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="chid2" data-label="Market">
                                                        <div class="flex-box market-item">
                                                            <div class="flex-box icon-box">
                                                                <svg width="11" height="20" viewBox="0 0 11 20"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z"/>
                                                                    <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z"/>
                                                                    <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                BNB <span>(Binance coin)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="sell-buy chid3" data-label="Price">
                                                        <div class="justify-content-start flex-box">
                                                            <div>
                                                            <span>
                                                                Buy
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>

                                                            </div>
                                                            <div>
                                                            <span>
                                                                Sell
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="chid4" data-label="Dymanic">
                                                        <div class="flex-box justify-content-start">
                                                            <h6 class="red">
                                                                -0.097
                                                            </h6>
                                                            <h6 class="green">
                                                                +1.176
                                                            </h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="chid2" data-label="Market">
                                                        <div class="flex-box market-item">
                                                            <div class="flex-box icon-box">
                                                                <svg width="11" height="20" viewBox="0 0 11 20"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z"/>
                                                                    <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z"/>
                                                                    <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                BNB <span>(Binance coin)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="sell-buy chid3" data-label="Price">
                                                        <div class="justify-content-start flex-box">
                                                            <div>
                                                            <span>
                                                                Buy
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>

                                                            </div>
                                                            <div>
                                                            <span>
                                                                Sell
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="chid4" data-label="Dymanic">
                                                        <div class="flex-box justify-content-start">
                                                            <h6 class="red">
                                                                -0.097
                                                            </h6>
                                                            <h6 class="green">
                                                                +1.176
                                                            </h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="chid2" data-label="Market">
                                                        <div class="flex-box market-item">
                                                            <div class="flex-box icon-box">
                                                                <svg width="11" height="20" viewBox="0 0 11 20"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z"/>
                                                                    <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z"/>
                                                                    <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                BNB <span>(Binance coin)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="sell-buy chid3" data-label="Price">
                                                        <div class="justify-content-start flex-box">
                                                            <div>
                                                            <span>
                                                                Buy
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>

                                                            </div>
                                                            <div>
                                                            <span>
                                                                Sell
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="chid4" data-label="Dymanic">
                                                        <div class="flex-box justify-content-start">
                                                            <h6 class="red">
                                                                -0.097
                                                            </h6>
                                                            <h6 class="green">
                                                                +1.176
                                                            </h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="chid2" data-label="Market">
                                                        <div class="flex-box market-item">
                                                            <div class="flex-box icon-box">
                                                                <svg width="11" height="20" viewBox="0 0 11 20"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z"/>
                                                                    <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z"/>
                                                                    <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                BNB <span>(Binance coin)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="sell-buy chid3" data-label="Price">
                                                        <div class="justify-content-start flex-box">
                                                            <div>
                                                            <span>
                                                                Buy
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>

                                                            </div>
                                                            <div>
                                                            <span>
                                                                Sell
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="chid4" data-label="Dymanic">
                                                        <div class="flex-box justify-content-start">
                                                            <h6 class="red">
                                                                -0.097
                                                            </h6>
                                                            <h6 class="green">
                                                                +1.176
                                                            </h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="chid2" data-label="Market">
                                                        <div class="flex-box market-item">
                                                            <div class="flex-box icon-box">
                                                                <svg width="11" height="20" viewBox="0 0 11 20"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z"/>
                                                                    <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z"/>
                                                                    <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z"/>
                                                                </svg>
                                                            </div>
                                                            <div class="content">
                                                                BNB <span>(Binance coin)</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="sell-buy chid3" data-label="Price">
                                                        <div class="justify-content-start flex-box">
                                                            <div>
                                                            <span>
                                                                Buy
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>

                                                            </div>
                                                            <div>
                                                            <span>
                                                                Sell
                                                            </span>
                                                                <span>
                                                                298,28
                                                            </span>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="chid4" data-label="Dymanic">
                                                        <div class="flex-box justify-content-start">
                                                            <h6 class="red">
                                                                -0.097
                                                            </h6>
                                                            <h6 class="green">
                                                                +1.176
                                                            </h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-items col-lg-35 col-md-4 col-sm-6 col-12">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <h6 class="price">
                                {{ text('Order Book') }}
                            </h6>
                            <div class="flex-box justify-content-start order-list-tab">
                                <a href="{{ route('trade' , ['trade' => request()->trade , 'order_book' => 'all']) }}"
                                   class="@if(!request()->has('order_book') || request()->order_book === 'all') active @endif">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="path" d="M11 4H20" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path" d="M11.15 9H20" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path2" d="M5.25 9V4L4 5.25" stroke="#FF3A44" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="path" d="M11 14H20" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path" d="M11.15 19H20" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path3"
                                              d="M4 15C4 14.4477 4.44772 14 5 14H5.61448C6.1433 14 6.61278 14.3384 6.78 14.8401V14.8401C6.91647 15.2495 6.82812 15.7005 6.54727 16.0282L4 19H7"
                                              stroke="#1DB954" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path2" d="M4 9H6.5" stroke="#FF3A44" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="{{ route('trade' , ['trade' => request()->trade , 'order_book' => 'asks']) }}"
                                   class="@if(request()->order_book === 'asks') active @endif">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4H20" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M11.1499 9H19.9999" stroke="#6C6C6C" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="path2" d="M5.25 9V4L4 5.25" stroke="#F2787E" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 14H20" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M11.1499 19H19.9999" stroke="#6C6C6C" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="path2"
                                              d="M4 15C4 14.4477 4.44772 14 5 14H5.61448C6.1433 14 6.61278 14.3384 6.78 14.8401V14.8401C6.91647 15.2495 6.82812 15.7005 6.54727 16.0282L4 19H7"
                                              stroke="#F2787E" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path2" d="M4 9H6.5" stroke="#F2787E" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="{{ route('trade' , ['trade' => request()->trade , 'order_book' => 'bids']) }}"
                                   class="@if(request()->order_book === 'bids') active @endif">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4H20" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M11.1499 9H19.9999" stroke="#6C6C6C" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="path3" d="M5.25 9V4L4 5.25" stroke="#F2787E" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 14H20" stroke="#6C6C6C" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M11.1499 19H19.9999" stroke="#6C6C6C" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="path3"
                                              d="M4 15C4 14.4477 4.44772 14 5 14H5.61448C6.1433 14 6.61278 14.3384 6.78 14.8401V14.8401C6.91647 15.2495 6.82812 15.7005 6.54727 16.0282L4 19H7"
                                              stroke="#F2787E" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path class="path3" d="M4 9H6.5" stroke="#F2787E" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="order-list">
                                <ul class="order-list-title">
                                    <li scope="col"> {{ text('Price') }}(USDT)</li>
                                    {{--                                    <li scope="col">Size(BTC)</li>--}}
                                    <li scope="col">{{ text('Amount') }} (BTC)</li>
                                </ul>

                                <div id="order_book_div">
                                    @if(!request()->has('order_book') || request()->order_book === 'all')

                                       {{-- @each('components.trade.asks' , array_slice($order_book["asks"] , 0 , 3) , 'ask')

                                        @each('components.trade.bids' ,  array_slice($order_book["bids"] , 0 , 3)  , 'bid')
--}}
                                    @elseif(request()->order_book === 'asks')

                                        {{--@each('components.trade.asks' , array_slice($order_book["asks"] , 0 , 6) , 'ask')--}}

                                    @else

                                       {{-- @each('components.trade.bids' ,  array_slice($order_book["bids"] , 0 , 6)  , 'bid')--}}

                                    @endif
                                </div>


                            </div>

                        </div>
                    </div>
                    {{--<div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="order-list">
                                <ul class="order-list-title">
                                    <li class="red flex-box justify-content-start" scope="col">
                                        {{ formatNum(sprintf("%.2f", $price)) }}
                                        <img src="{{ asset('assets/icon/red-arrow.svg') }}">
                                    </li>
                                    <li scope="col">$0.037495</li>
                                    <li scope="col">
                                        <img style="margin-left: auto ; display: block" src="{{ asset('assets/icon/mobile.svg') }}">
                                    </li>

                                </ul>

                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="46"></li>

                                </ul>
                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="89"></li>

                                </ul>
                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="46"></li>

                                </ul>
                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="89"></li>

                                </ul>
                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="46"></li>

                                </ul>
                                <ul>
                                    <li class="green order-list-item" data-label="Price(USDT)">
                                        32510.68
                                    </li>
                                    <li class="order-list-item" data-label="Size(BTC)">32.231</li>
                                    <li class="order-list-item" data-label=" Sum(BTC0)">216.735</li>
                                    <li class="bg green-item" data-progress="89"></li>

                                </ul>

                            </div>
                        </div>
                    </div>--}}
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <h6 class="price">
                                {{ text('Trades') }}
                            </h6>
                            <div class="order-list">

                                <ul class="order-list-title">
                                    <li scope="col">{{text('Price')}}(USDT)</li>
                                    <li scope="col">{{text('Amount')}}(BTC)</li>
                                    <li scope="col">{{text('Time')}}</li>
                                </ul>

                                <div id="trades_book">
                                    {{--@foreach($recent->take(10) as $key => $trade1)
                                        <ul>
                                            <li class="@if($trade1[0]["isBuyerMaker"]) green @else red @endif order-list-item"
                                                data-label="Price(USDT)">
                                                {{ (sprintf("%.2f", $key)) }}
                                            </li>
                                            <li class="order-list-item"
                                                data-label="Amount(BTC)">{{ $trade1->sum('qty') }}</li>
                                            <li class="order-list-item"
                                                data-label="Time">{{ \Carbon\Carbon::createFromDate($trade1[0]["time"])->format("H:i:s") }}</li>
                                        </ul>
                                    @endforeach--}}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection

@section('javascript')

    <script>

        const wallet = {{ $client->wallet }};
        const coin_price = {{  $price  }};
        const coin_symbol = '{{ strtoupper($trade[0]) }}';
        const client_coin_amount = '{{ $client_max_coin }}';

        function set_limit_price() {
            $(".stop_price_limit").show();
        }

        function hide_limit_price() {
            $(".stop_price_limit").hide();
        }

        hide_limit_price();

        const set_progress_buy = (percent) => {

            const client_price = parseFloat($("#buy_price_input").val().replace(",", ""));

            $('.percent_of_size').text(percent + '%');
            $('#buy_progress').text(((wallet / client_price) * percent / 100).toFixed(4) + " " + coin_symbol);

            $("#buy_size_input").val(wallet * percent / 100);

        }

        const set_progress_sell = (percent) => {

            const client_price = parseFloat($("#buy_price_input").val().replace(",", ""));

            $('.percent_of_size').text(percent + '%');
            // $('#sell_progress').text((((client_coin_amount) * percent / 100)).toFixed(4) + " " + coin_symbol);

            $('#sell_progress').text(((client_coin_amount * client_price) * percent / 100).toFixed(4) + " USDT");

            $("#sell_size_input").val(((client_coin_amount) * percent / 100).toFixed(4));
            // $("#sell_size_input").val(wallet * percent / 100);
        }

        const buy = () => {
            $("#error_buy").hide();

            const buy_percent_of_size = $("#buy_percent_of_size").text().replace("%", " ");
            const buy_size_input = $("#buy_size_input").val();
            const buy_price_input = $("#buy_price_input").val();

            if (!buy_percent_of_size || !buy_price_input)
                return;

            if (wallet === 0)
                return $("#error_buy").show();

            $.ajax({
                type: "POST",
                url: "{{ route('buy_crypto') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "buy_percent_of_size": buy_percent_of_size,
                    "buy_size_input": buy_size_input,
                    "buy_price_input": buy_price_input,
                    "coin_id": {{ $coin_price->id }}
                },
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });

        }

        const sell = () => {
            $("#error_sell").hide();

            const sell_percent_of_size = $("#sell_percent_of_size").text().replace("%", " ");
            const sell_size_input = $("#sell_size_input").val();
            const sell_price_input = $("#sell_price_input").val();

            if (!sell_percent_of_size || !sell_price_input)
                return;

            if (client_coin_amount == 0)
                return $("#error_sell").show();

            $.ajax({
                type: "POST",
                url: "{{ route('sell_crypto') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "sell_percent_of_size": sell_percent_of_size,
                    "sell_size_input": sell_size_input,
                    "sell_price_input": sell_price_input,
                    "coin_id": {{ $coin_price->id }}
                },
                success: function (data) {
                    console.log(data);
                    location.reload();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });

        }

    </script>
    <script>
        $(".order-list .bg").each(function () {
            $(this).animate(
                {
                    width: $(this).attr("data-progress") + "%",
                },
                1000
            );
        });
    </script>
    <script>
        // Get all tabs
        var tabs_items = document.querySelectorAll(".tabs");

        // Loop through all tabs
        tabs_items.forEach(function (tabs) {
            // Set variable
            var controls = tabs.querySelector(".tabs__control");
            var tab = controls.querySelectorAll(".tabs__tab");
            var contents = tabs.querySelector(".tabs__contents");
            var content = contents.querySelectorAll(".tabs__content");

            // Loop through all tabs
            tab.forEach(function (item) {
                item.onclick = function (e) {
                    e.preventDefault();

                    // Get clicked tab ID
                    var tabId = item.dataset.tab;

                    // Set current tab
                    tab.forEach(function (item) {
                        if (tabId == item.dataset.tab) {
                            item.classList.add("tabs__tab--current");
                            item.setAttribute('aria-selected', 'true');
                            item.removeAttribute('tabindex', '-1');
                        } else {
                            item.classList.remove("tabs__tab--current");
                            item.setAttribute('aria-selected', 'false');
                            item.setAttribute('tabindex', '-1');
                        }
                    });

                    // Set current content
                    content.forEach(function (item) {
                        if (tabId == item.dataset.tabContent) {
                            item.classList.add("tabs__content--current");
                            item.removeAttribute('hidden', 'hidden');
                        } else {
                            item.classList.remove("tabs__content--current");
                            item.setAttribute('hidden', 'hidden');
                        }
                    });
                };
            });
        });

    </script>
    <script>
        const elements = Array.from(document.querySelectorAll('.tabs__tab '));

        let activeIndex = 0;

        const updateIndex = (newIndex) => {
            elements[activeIndex].classList.remove('active');
            document.body.style.setProperty('--active-index', newIndex);
            elements[newIndex].classList.add('active');
            activeIndex = newIndex;
        };

        const registerEvent = (button, index) => {
            button.addEventListener('click', () => updateIndex(index))
        };

        elements.forEach(registerEvent);
    </script>
    <script>
        'use strict';

        var switchButton = document.querySelector('.switch-button');
        // var switchBtnRight = document.querySelector('.switch-button-case.right');
        var switchBtnRight = $('.switch-button-case.right');
        var switchBtnLeft = $('.switch-button-case.left');
        var activeSwitch = $('.active');

        function switchLeft(ele) {
            switchBtnRight.removeClass('active-case');
            switchBtnLeft.addClass('active-case');
            // activeSwitch.style.left = '0%';
            // console.log($(ele).parent())
            activeSwitch.css("left", "0%")
        }

        function switchRight() {
            switchBtnRight.addClass('active-case');
            switchBtnLeft.removeClass('active-case');
            activeSwitch.css("left", "50%")
        }

        /*
                $(switchBtnLeft).on('click', function () {
                }, false);
        */
        $(document).on("click", '.switch-button-case.left', function () {
            console.log("switchBtnLeft");
            switchLeft();
        })
        $(document).on("click", '.switch-button-case.right', function () {
            console.log("switchBtnLeftRR");
            switchRight();
        })


        // $(switchBtnRight).on('click', function () {
        //     console.log("kddksf222");
        //     switchRight();
        // }, false);


    </script>
    <script>
        $(".select-item").click(function () {
            $(this).parent().toggleClass("active");
            $(this).parent().children("ul").slideToggle();

        });
        $(".dropdown-second-item li").click(function () {
            var text = $(this).text()
            var text2 = $(".select-item p")
            text2.text(text)
            $(this).parent().slideUp();
            $(".dropdown-second-item").removeClass("active");

        });
    </script>
    <script>
        $(function () {

            var activeIndex = $('.active-tab').index(),
                $contentlis = $('.tabs-content li'),
                $tabslis = $('.tabs li');

            // Show content of active tab on loads
            $contentlis.eq(activeIndex).show();

            $('.tabs').on('click', 'li', function (e) {
                var $current = $(e.currentTarget),
                    index = $current.index();

                $tabslis.removeClass('active-tab');
                $current.addClass('active-tab');
                $contentlis.hide().eq(index).show();
            });
        });
    </script>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">

        let trading_array = {
            "autosize": true,
            "symbol": "BINANCE:{{ $trade[0] . $trade[1] }}",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "light",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "withdateranges": true,
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_e692f",
            "show_popup_button": true,
            "popup_width": "1000",
            "popup_height": "650",
        }
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            trading_array.theme = "dark";
        }

        $(document).ready(function () {
            new TradingView.widget(
                trading_array
            );
        });

    </script>
    <script>

        var url_string = window.location.href;
        var url = new URL(url_string);
        var order_book_url = url.searchParams.get("order_book");

        function get_order_book_12345() {
            $.ajax({
                type: "GET",
                url: "{{ route('recent_order') }}",
                data: {"trade": "{{ $trade[0] . "_" . $trade[1] }}"},
                success: function (data) {

                    console.log(data);

                    const recent = data["recent"];
                    const order_book = data["order"];
                    // $("#trades_book").empty();

                    let template = "";

                    Object.keys(recent).forEach(function (key) {
                        const re = recent[key][0];

                        template += `<ul>
                                <li class="${re.isBuyerMaker ? 'green' : 'red'} order-list-item"
                                    data-label="Price(USDT)">
                                    ${parseFloat(re.price).toFixed(2)}
                                </li>
                                <li class="order-list-item" data-label="Amount(BTC)">
                                    ${re.qty}
                                </li>
                                <li class="order-list-item" data-label="Time">
                                </li>
                            </ul>`;

                    });

                    $("#trades_book").html(template);


                    template = "";

                    if (order_book_url === "asks") {

                        const book = order_book["asks"];

                        Object.keys(book).forEach(function (key) {
                            const order = book[key];

                            if (key < 6)
                                template += `<ul>
                                            <li class="red order-list-item" data-label="Price(USDT)">
                                                ${parseFloat(order[0]).toFixed(2)}
                                            </li>
                                            <li class="order-list-item" data-label="Size(BTC)">${parseFloat(order[1]).toFixed(2)}</li>
                                            <li class="bg pink-item" data-progress="${Math.floor(Math.random() * 90) + 10}"></li>
                                        </ul>`;
                        });

                    } else if (order_book_url === "bids") {
                        const book = order_book["bids"];

                        Object.keys(book).forEach(function (key) {
                            const order = book[key];

                            if (key < 6)
                                template += `<ul>
                                            <li class="green order-list-item" data-label="Price(USDT)">
                                                ${parseFloat(order[0]).toFixed(2)}
                                            </li>
                                            <li class="order-list-item" data-label="Size(BTC)">${parseFloat(order[1]).toFixed(2)}</li>
                                            <li class="bg green-item" data-progress="${Math.floor(Math.random() * 90) + 10}"></li>
                                        </ul>`;
                        });

                    } else {

                        const asks = order_book["asks"];
                        const bids = order_book["bids"];

                        Object.keys(asks).forEach(function (key) {
                            const order = asks[key];
                            if (key < 3)
                                template += `<ul>
                                            <li class="red order-list-item" data-label="Price(USDT)">
                                                ${parseFloat(order[0]).toFixed(2)}
                                            </li>
                                            <li class="order-list-item" data-label="Size(BTC)">${parseFloat(order[1]).toFixed(2)}</li>
                                            <li class="bg pink-item" data-progress="${Math.floor(Math.random() * 90) + 10}"></li>
                                        </ul>`;
                        });

                        Object.keys(bids).forEach(function (key) {
                            const order = bids[key];
                            if (key < 3)
                                template += `<ul>
                                            <li class="green order-list-item" data-label="Price(USDT)">
                                                ${parseFloat(order[0]).toFixed(2)}
                                            </li>
                                            <li class="order-list-item" data-label="Size(BTC)">${parseFloat(order[1]).toFixed(2)}</li>
                                            <li class="bg green-item" data-progress="${Math.floor(Math.random() * 90) + 10}"></li>
                                        </ul>`;
                        });

                    }

                    $("#order_book_div").html(template);

                    $(".order-list .bg").each(function () {
                        $(this).animate(
                            {
                                width: $(this).attr("data-progress") + "%",
                            },
                            0
                        );
                    });

                    set_market();

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });
        }

        get_order_book_12345();

        setInterval(get_order_book_12345, 2000);

        function set_limit() {
            $('#sell_price_input').prop('disabled', false).val('{{ number_format($price) }}')
            $('#buy_price_input').prop('disabled', false).val('{{ number_format($price) }}')
        }

        function set_market() {
            if (!$(".market_button").hasClass('active-case'))
                return;
            const price = parseFloat($('#trades_book .order-list-item').eq(12).text())

            $('#sell_price_input').prop('disabled', true).val(price)
            $('#buy_price_input').prop('disabled', true).val(price)
        }


    </script>

@endsection
