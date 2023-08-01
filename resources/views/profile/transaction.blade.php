@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                   {{-- <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a id="Back-to-exchange" class="flex-box justify-content-between charge-wallet   ">
                            <h6>
                                $2,600,000 add to your Wallet.please check your transaction.
                            </h6>
                            <div class="flex-box">
                                Back to exchange
                            </div>

                        </a>
                    </div>--}}

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
                                {{  text('Transaction')  }}
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                        <table class="coin-table Transaction-table">
                            <thead>
                            <tr>
                                <th class="chid2" scope="col">{{ text('Transaction number') }}</th>
                                <th scope="col">{{  text('Type')  }}</th>
                                <th scope="col">{{  text('Time')  }}</th>
                                <th scope="col">{{  text('Amount')  }}</th>
                                <th scope="col">{{  text('Status')  }}</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @each('components.transaction' , $transactions , 'transaction')
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection
