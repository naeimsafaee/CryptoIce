@extends('index')

@section('content')

    <section class="main">
        <div class="row">

            @include('profile.sidebar.dashboard_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item" href="{{ url()->previous() }}">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6 id="title_buy">
                                Sell {{ $trade[0] }}
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <form class="form sell-form" action="{{ route('submit_sell_trade') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                                        <div style="margin-top: 0" class="input-row">
                                                            <label>
                                                                Select Coin
                                                            </label>
                                                            <div class="drop-down">
                                                                <div class="selected">

                                                                    <svg class="drop-arrow" width="24" height="23"
                                                                         viewBox="0 0 24 23" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8 9.85059L12 13.5519L16 9.85059"
                                                                              stroke-width="1.5" stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <a class="selected">
                                                                        <span class="Coin flex-box justify-content-start">

                                                                    <img style="width: 24px;margin-right: 8px"
                                                                         src="{{ asset("assets/icon/crypto/" . $coin_price->coin->symbol . '.svg') }}"
                                                                         alt="alt text"/>
                                                                            <h6>
                                                                                {{ strtoupper($coin_price->coin->symbol) }} <span>({{ ucfirst($coin_price->coin->coin_name) }})</span>
                                                                            </h6>

                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="options">
                                                                    <ul>
                                                                        @foreach(\App\Models\CoinPrice::all() as $coin_price1)
                                                                            <li class="select_coin"
                                                                                data-id="{{ $coin_price1->id }}" data-client="{{ $coin_price1->client_coin() }}"
                                                                                data-price="{{ $coin_price1->sell_price }}"
                                                                                data-symbol="{{ strtoupper($coin_price1->coin->symbol) }}">
                                                                                <a>
                                                                                    <span
                                                                                            class="Coin flex-box justify-content-start">
                                                                                        <img style="width: 24px;margin-right: 8px"
                                                                                             src="{{ asset("assets/icon/crypto/" . $coin_price1->coin->symbol . '.svg') }}"
                                                                                             alt="alt text"/>
                                                                                        <h6>
                                                                                            {{ strtoupper($coin_price1->coin->symbol) }} <span>({{ ucfirst($coin_price1->coin->coin_name) }})</span>
                                                                                        </h6>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <input type="hidden" id="selected_coin"
                                                                       name="coin" value="{{ $coin_price->id }}"/>

                                                            </div>

                                                            <script>

                                                                $('.select_coin').click(function () {
                                                                    const id = $(this).attr('data-id');
                                                                    const symbol = $(this).attr('data-symbol');
                                                                    const price = $(this).attr('data-price');
                                                                    const client_coin_amount = $(this).attr('data-client');

                                                                    $("#selected_coin").val(id);
                                                                    $("#amount-two").val(price);
                                                                    $("#title_buy").text('Sell ' + symbol);
                                                                    $("#currency-two").text(symbol);
                                                                    $("#wallet_balance").text('Wallet balance : ' + client_coin_amount);

                                                                    calculate($('#amount-one').val());
                                                                });

                                                            </script>

                                                        </div>

                                                    </div>

                                                    <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                Amount to Sell
                                                            </label>
                                                            <div class="flex-box Amount-Buy justify-content-between">
                                                                <div class="dallor position-relative">
                                                                    <div id="currency-one" class="dollar-sign">
                                                                        $
                                                                    </div>

                                                                    <input name="amount" id="amount-one" value=""
                                                                           class="padding-left" type="text"
                                                                           placeholder="amount"/>
                                                                </div>

                                                                <svg id="swap" width="24" height="24"
                                                                     viewBox="0 0 24 24" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M16.103 10.793L19 7.897L16.103 5"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                    <path d="M5 7.90039H19" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                    <path d="M7.897 13.207L5 16.103L7.897 19"
                                                                          stroke-width="1.5" stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                    <path d="M19 16.0996H5" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>

                                                                <div class="position-relative BTC">
                                                                    <div id="currency-two" class="dollar-sign">
                                                                        {{ strtoupper($trade[0]) }}
                                                                    </div>

                                                                    <input name="price" id="amount-two"
                                                                           value="{{ $coin_price->sell_price }}"
                                                                           class="padding-left" type="text"
                                                                           placeholder="{{ strtoupper($trade[0]) }} price"/>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    {{--<div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                Transaction ID
                                                            </label>
                                                            <input type="text" name="tx_id"
                                                                   placeholder="your transaction id"/>

                                                        </div>

                                                    </div>--}}
                                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                        {{--<h6 class="price margin">
                                                            Transaction fee: <span>${{ $coin_price->fee }}</span>
                                                        </h6>--}}
                                                        <h6 class="price margin">
                                                            Min amount: <span>${{ $coin_price->min_withdraw }}</span>
                                                        </h6>
                                                    </div>
                                                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12">
                                                        <h6 class="price margin">
                                                            Total: <span id="total_price">$0,00 </span>
                                                        </h6>
                                                    </div>
                                                    <div class="send-row flex-box justify-content-start col-lg-12 col-md-12 col-sm-12">
                                                        <button type="submit" class="dark-button">
                                                            Send
                                                        </button>
                                                        <h6 class="price" id="wallet_balance" style="display: none">
                                                            Wallet balance:
                                                            ${{ $coin_price->client_coin() }}
                                                        </h6>

                                                    </div>
                                                    @if($errors->any())
                                                        <div class=" col-lg-12 col-md-12 col-sm-12">
                                                            <a class="flex-box justify-content-between charge-wallet">
                                                                <h6>
                                                                    {{ $errors->first() }}
                                                                </h6>
                                                                <div class="flex-box">
                                                                    <img src="assets/icon/wallet.svg">
                                                                    Charge your Wallet
                                                                </div>

                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>

                                                <script>

                                                    $('#amount-one').on('input', function () {
                                                        calculate($(this).val());
                                                    });

                                                    function calculate(amount){
                                                        const price = parseFloat($('#amount-two').val());
                                                        $('#total_price').text('$' + (price * (isNaN(parseFloat(amount)) ? 0 : parseFloat(amount) )))
                                                    }

                                                </script>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                    <h6 class="price">
                                        Help
                                    </h6>
                                    <p>
                                        {{ text('but section help') }}
                                    </p>
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
        //TOGGLING NESTED ul
        $(".drop-down .selected .selected").click(function () {
            $(".drop-down .options ul").toggle();
            $(".drop-down .selected .drop-arrow").toggleClass("active");

        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function () {
            var text = $(this).html();
            $(".drop-down .selected a ").html(text);
            $(".drop-down .options ul").hide();
            $(".drop-down .selected .drop-arrow").removeClass("active");
        });


        //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
        $(document).bind('click', function (e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("drop-down")) {
                $(".drop-down .selected .drop-arrow").removeClass("active");
                $(".drop-down .options ul").hide();
            }

        });
    </script>
@endsection