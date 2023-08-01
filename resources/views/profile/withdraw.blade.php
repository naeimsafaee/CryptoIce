@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6>
                                {{text('Withdraw')}}
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <form class="form sell-form">
                                                <div class="row">
                                                    <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                        <div style="margin-top: 0" class="input-row">
                                                            <label>
                                                                {{text('Amount to Withraw')}}
                                                            </label>
                                                            <div class="position-relative">
                                                                <div class="dollar-sign">
                                                                    $
                                                                </div>

                                                                <input id="padding-left"
                                                                       class="padding-left" type="text"
                                                                       placeholder="200"/>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Select Coin')}}
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
                                                                        <div class="first-text">
                                                                            {{text('Select Coin')}}
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="options">
                                                                    <ul>
                                                                        @foreach(\App\Models\CoinPrice::all() as $coin_price)
                                                                            <li>
                                                                                <a>
                                                                                    <span
                                                                                        class="Coin flex-box justify-content-start">
                                                                                        <img style="width: 24px;margin-right: 8px" src="{{ asset("assets/icon/crypto/" . $coin_price->coin->symbol . '.svg') }}" alt="alt text" />
                                                                                        <h6>
                                                                                            {{ strtoupper($coin_price->coin->symbol) }} <span>({{ ucfirst($coin_price->coin->coin_name) }})</span>
                                                                                        </h6>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Crypto code')}}
                                                            </label>
                                                            <input type="text" placeholder="Crypto code"/>

                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Description')}}
                                                            </label>
                                                            <textarea type="text"
                                                                      placeholder="Type your description"></textarea>

                                                        </div>

                                                    </div>
                                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Select Coin')}}
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
                                                                        <div class="first-text">
                                                                            {{text('Select Coin')}}
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="options">
                                                                    <ul>
                                                                        @foreach(\App\Models\CoinPrice::all() as $coin_price)
                                                                            <li>
                                                                                <a>
                                                                                    <span
                                                                                            class="Coin flex-box justify-content-start">
                                                                                        <img style="width: 24px;margin-right: 8px"
                                                                                             src="{{ asset("assets/icon/crypto/" . $coin_price->coin->symbol . '.svg') }}"
                                                                                             alt="alt text"/>
                                                                                        <h6>
                                                                                            {{ strtoupper($coin_price->coin->symbol) }} <span>({{ ucfirst($coin_price->coin->coin_name) }})</span>
                                                                                        </h6>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Crypto code')}}
                                                            </label>
                                                            <input type="text" placeholder="Crypto code"/>

                                                        </div>

                                                    </div>
                                                    <div class="second-margin  col-lg-12 col-md-12 col-sm-12">
                                                        <button type="button" class="dark-button">
                                                            {{text('Withdraw')}}
                                                        </button>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div style="height: auto" class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                    <h6 class="price">
                                        {{ text('Withdraw Title') }}
                                    </h6>
                                    <p>

                                        {{ text('Withdraw Description') }}
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
