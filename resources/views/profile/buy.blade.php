@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6>
                                {{text('Buy')}}
                                BNB
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
                                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                                        <div style="margin-top: 0" class="input-row">
                                                            <label>
                                                                {{text('Select Coin')}}
                                                            </label>
                                                            <div class="drop-down">
                                                                <div class="selected">
                                                                    <svg class="drop-arrow" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8 9.85059L12 13.5519L16 9.85059"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>

                                                                    <a class="selected" >
                                                                                            <span class="Coin flex-box justify-content-start">
                                                                                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M5.47974 13.0734L0 10.4629L5.47974 20.0527L10.9596 10.4629L5.47974 13.0734Z" />
                                                                                                <path d="M10.3629 8.51758L5.4798 0.0244141L0.591187 8.52736L5.4798 6.20504L10.3629 8.51758Z" />
                                                                                                <path d="M1.01489 9.62807L5.47977 11.7459L9.95212 9.62455L5.47977 7.50684L1.01489 9.62807Z" />
                                                                                                </svg>
                                                                                                <h6>
                                                                                                    BNB <span>(Binance coin)</span>
                                                                                                </h6>

                                                                                            </span>
                                                                    </a>
                                                                </div>
                                                                <div class="options">
                                                                    <ul>
                                                                        <li><a >
                                                                                                <span class="Coin flex-box justify-content-start">
                                                                                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M5.47974 13.0734L0 10.4629L5.47974 20.0527L10.9596 10.4629L5.47974 13.0734Z" />
                                                                                                <path d="M10.3629 8.51758L5.4798 0.0244141L0.591187 8.52736L5.4798 6.20504L10.3629 8.51758Z" />
                                                                                                <path d="M1.01489 9.62807L5.47977 11.7459L9.95212 9.62455L5.47977 7.50684L1.01489 9.62807Z" />
                                                                                                </svg>
                                                                                                <h6>
                                                                                                    BNB <span>(Binance coin)</span>
                                                                                                </h6>

                                                                                            </span>
                                                                            </a></li>
                                                                        <li><a >
                                                                                                <span class="Coin flex-box justify-content-start">
                                                                                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M5.47974 13.0734L0 10.4629L5.47974 20.0527L10.9596 10.4629L5.47974 13.0734Z" />
                                                                                                <path d="M10.3629 8.51758L5.4798 0.0244141L0.591187 8.52736L5.4798 6.20504L10.3629 8.51758Z" />
                                                                                                <path d="M1.01489 9.62807L5.47977 11.7459L9.95212 9.62455L5.47977 7.50684L1.01489 9.62807Z" />
                                                                                                </svg>
                                                                                                <h6>
                                                                                                    GFH <span>(Binance coin)</span>
                                                                                                </h6>

                                                                                            </span>
                                                                            </a></li>
                                                                        <li><a >
                                                                                                <span class="Coin flex-box justify-content-start">
                                                                                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M5.47974 13.0734L0 10.4629L5.47974 20.0527L10.9596 10.4629L5.47974 13.0734Z" />
                                                                                                <path d="M10.3629 8.51758L5.4798 0.0244141L0.591187 8.52736L5.4798 6.20504L10.3629 8.51758Z" />
                                                                                                <path d="M1.01489 9.62807L5.47977 11.7459L9.95212 9.62455L5.47977 7.50684L1.01489 9.62807Z" />
                                                                                                </svg>
                                                                                                <h6>
                                                                                                    RTF <span>(Binance coin)</span>
                                                                                                </h6>

                                                                                            </span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Amount to Buy')}}
                                                            </label>
                                                            <div class="flex-box Amount-Buy justify-content-between">
                                                                <div class="position-relative">
                                                                    <div class="dollar-sign">
                                                                        $
                                                                    </div>

                                                                    <input value="2000" class="padding-left" type="text" >
                                                                </div>

                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M16.103 10.793L19 7.897L16.103 5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M5 7.90039H19"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M7.897 13.207L5 16.103L7.897 19" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M19 16.0996H5"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>

                                                                <div class="position-relative BTC">
                                                                    <div class="dollar-sign">
                                                                        BTC
                                                                    </div>

                                                                    <input value="453.234" class="padding-left" type="text" >
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Crypto code')}}
                                                            </label>
                                                            <input type="text" placeholder="{{text('Crypto code')}}"/>

                                                        </div>

                                                    </div>
                                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                        <h6 class="price margin">
                                                            {{text('Transaction fee')}}: <span>$0,005</span>
                                                        </h6>
                                                    </div>
                                                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12">
                                                        <h6 class="price margin">
                                                            {{text('Total')}}:  <span>$0,00 </span>
                                                        </h6>
                                                    </div>
                                                    <div class="send-row flex-box justify-content-start col-lg-12 col-md-12 col-sm-12">
                                                        <button type="button" class="dark-button">
                                                            {{text('Send')}}
                                                        </button>
                                                        <h6 class="price">
                                                            {{text('Wallet balance')}}: $0,002
                                                        </h6>
                                                    </div>
                                                    <div class=" col-lg-12 col-md-12 col-sm-12">
                                                        <a class="flex-box justify-content-between charge-wallet">
                                                            <h6>
                                                                {{text('Insufficient Balance')}}
                                                            </h6>
                                                            <div class="flex-box">
                                                                <img src="assets/icon/wallet.svg">
                                                                {{text('Charge your Wallet')}}
                                                            </div>

                                                        </a>
                                                    </div>

                                                </div>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                    <h6 class="price">
                                        {{text('Help')}}
                                    </h6>
                                    <p>
                                        {{ text('buy description') }}
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
        $(".drop-down .selected .selected").click(function() {
            $(".drop-down .options ul").toggle();
            $(".drop-down .selected .drop-arrow").toggleClass("active");

        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function() {
            var text = $(this).html();
            $(".drop-down .selected a ").html(text);
            $(".drop-down .options ul").hide();
            $(".drop-down .selected .drop-arrow").removeClass("active");
        });


        //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (! $clicked.parents().hasClass("drop-down")){
                $(".drop-down .selected .drop-arrow").removeClass("active");
                $(".drop-down .options ul").hide();
            }

        });
    </script>

@endsection
