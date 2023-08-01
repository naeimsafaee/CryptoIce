@extends('index')

@section('content')

    <section class="main">
        <div class="row">

            @include('profile.sidebar.dashboard_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item" href="{{ url()->previous() }}">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6>
                                @if($req instanceof \App\Models\Sell)
                                    Sell {{ $req->coin->coin->coin_name }}
                                @else
                                    Buy {{ $req->coin->coin->coin_name }}
                                @endif
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                    <div class=" Transaction-summary">
                                        <h6>
                                            Transaction summary
                                        </h6>
                                        <div class="line">

                                        </div>
                                        <div class="flex-box justify-content-between">
                                            <div>
                                                Coin
                                            </div>
                                            <div>
                                                {{ strtoupper($req->coin->coin->symbol) }} <span>({{ ucfirst($req->coin->coin->coin_name) }})</span>
                                            </div>

                                        </div>
                                        <div class="flex-box justify-content-between">
                                            <div>
                                                Amount
                                            </div>
                                            <div>
                                                ${{ $req->amount }}
                                            </div>

                                        </div>
                                        <div class="flex-box justify-content-between">
                                            <div>
                                                Transaction fee
                                            </div>
                                            <div>
                                                ${{ setting('setting.fee') }}
                                            </div>

                                        </div>
                                        <div class="flex-box justify-content-between">
                                            <div>
                                                Total
                                            </div>
                                            <div class="price">
                                                ${{ $req->amount - setting('setting.fee') }}
                                            </div>

                                        </div>
                                        <div class="dark-button">
                                            View all transaction
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7  col-md-6 col-sm-12 col-12">
                                    <img class="credit-card" src="{{ asset('assets/icon/credit-card%201.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection