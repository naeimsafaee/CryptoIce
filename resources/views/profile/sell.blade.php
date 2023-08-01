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
                                {{text('Sell')}} BNB
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="flex-box flex-columns">
                                                <div class="flex-box market-item">
                                                    <div class="flex-box icon-box">
                                                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.47974 13.0305L0 10.4237L5.47974 20L10.9596 10.4237L5.47974 13.0305Z" />
                                                            <path d="M10.3629 8.48114L5.47983 0L0.591217 8.4909L5.47983 6.17187L10.3629 8.48114Z" />
                                                            <path d="M1.01489 9.59125L5.47977 11.7061L9.95212 9.58774L5.47977 7.47302L1.01489 9.59125Z" />
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        BNB <span>(Binance coin)</span>
                                                    </div>
                                                </div>
                                                <h6 class="sell-item">
                                                    {{text('Sell')}}
                                                    <span>
                                                                  298,28
                                                              </span>
                                                </h6>

                                            </div>
                                        </div>
                                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <form class="form sell-form">
                                                <div class="row">
                                                    <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Amount to Sell')}}
                                                            </label>
                                                            <div class="dollar-sign">
                                                                $
                                                            </div>

                                                            <input class="padding-left" type="text" placeholder="User Name"/>

                                                        </div>
                                                        <h6 class="sell-item">
                                                            {{text('Sell')}}
                                                            <span>
                                                                $404,343,00
                                                              </span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Crypto code')}}
                                                            </label>
                                                            <input type="text" placeholder="{{text('Crypto code')}}"/>

                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Description')}}
                                                            </label>
                                                            <textarea placeholder="type your description "></textarea>

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
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <button type="button" class="dark-button">
                                                            {{text('Send')}}
                                                        </button>

                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                    <h6 class="price">
                                        {{ text('sell title') }}
                                    </h6>
                                    <p>
                                        {{ text('sell description') }}

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

