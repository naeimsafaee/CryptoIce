@extends('index')

@section('content')
    <section class="main">
        <div class="row">
            @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="flex-box justify-content-between ">
                            <h2 style="margin: 0" class="title-item">
                                {{ text('Most copied') }}
                            </h2>
                            <a class="view-alls" href="{{ route('copy_trade_all') }}">
                                {{text('View all')}}
                            </a>
                        </div>
                    </div>
                    <div class="  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a
                                   class="border-item second-card-item" href="{{ route('profile') }}">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button" data-toggle="modal" data-target="#follow-pay-popup">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top padding-items  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="flex-box justify-content-between ">
                            <h2 style="margin: 0" class="title-item">
                                Trending
                            </h2>
                            <a class=view-alls>
                                View all
                            </a>
                        </div>
                    </div>
                    <div class="  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top padding-items  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="flex-box justify-content-between ">
                            <h2 style="margin: 0" class="title-item">
                                Long-Term Stock Investors
                            </h2>
                            <a class=view-alls>
                                View all
                            </a>
                        </div>
                    </div>
                    <div class="  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top padding-items  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="flex-box justify-content-between ">
                            <h2 style="margin: 0" class="title-item">
                                Long-Short Investors
                            </h2>
                            <a class=view-alls>
                                View all
                            </a>
                        </div>
                    </div>
                    <div class="  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
                                <a data-toggle="modal" data-target="#follow-pay-popup"
                                   class="border-item second-card-item">
                                    <div class="flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="assets/photo/Ellipse%2051.png">
                                        </div>
                                        <div>
                                            <h6>
                                                HaniJL
                                            </h6>
                                            <p>
                                                Hani Jalili
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-box justify-content-between">
                                        <div>
                                            <h6 class="green">
                                                90.90%
                                            </h6>
                                            <p>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                        <div>
                                            <div class="number-border">
                                                5
                                            </div>
                                            <p>
                                                Risk
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dark-button">
                                        Copy
                                    </div>
                                    <div class="flex-box justify-content-center">
                                                            <span>
                                                                1.123 Copiers
                                                            </span>
                                        <span class="red">
                                                                -1.98
                                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection


@section('modal')

    <!-- Modal 1-->
    <div class="modal fade" id="follow-pay-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Copy
                    <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                         height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </div>
                <div class="modal-body">
                    <div class=" flex-box justify-content-start">
                        <div class="img-box">
                            <img src="assets/photo/Ellipse%2051.png">
                        </div>
                        <div>
                            <h6>
                                HaniJL
                                <span>
                                    Hani Jalili
                                </span>
                            </h6>
                            <p>
                                <span class="green">
                                     90.90%
                                </span>
                                Return (Last 12M)
                            </p>
                        </div>
                    </div>
                    <div class="margin-top flex-box justify-content-between">
                        <div>
                            <h6>
                                Pay <span class="price">$2000</span> to copy Hani’s Trade
                            </h6>
                            <h6 class="details">
                                Hani let’s you copy her trade for $2000.
                            </h6>
                        </div>
                        <a data-dismiss="modal" class="dark-button">
                            Pay
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal 2 -->
    <div class="modal fade" id="follow-copy-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Copy
                    <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                         height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </div>
                <div class="modal-body">
                    <div class=" flex-box justify-content-start">
                        <div class="img-box">
                            <img src="assets/photo/Ellipse%2051.png">
                        </div>
                        <div>
                            <h6>
                                HaniJL
                                <span>
                                    Hani Jalili
                                </span>
                            </h6>
                            <p>
                                <span class="green">
                                     90.90%
                                </span>
                                Return (Last 12M)
                            </p>
                        </div>
                    </div>
                    <div class="margin-top flex-box justify-content-between">
                        <div>
                            <h6>
                                Follow
                            </h6>
                            <h6 class="details">
                                You can fallow Hani to see her trades
                            </h6>
                        </div>
                        <a data-dismiss="modal" class="button">
                            Pay
                        </a>

                    </div>
                    <div class="margin-top flex-box justify-content-between">
                        <div>
                            <h6>
                                Copy
                            </h6>
                            <h6 class="details">
                                You can Copy Hani’s Trade and ...
                            </h6>
                        </div>
                        <a data-dismiss="modal" class="dark-button">
                            Pay
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3-->
    <div class="modal fade" id="API-key-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Copy
                    <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                         height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </div>
                <div class="modal-body">
                    <a data-dismiss="modal" class="back dark-button">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.01025 11.9902H20.0003" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M11.014 17.6289L4.99805 11.9997L11.014 6.37057" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        Back
                    </a>
                    <form class="center-div">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="input-row">
                                    <label>
                                        API key
                                    </label>
                                    <input type="text" placeholder="vgjhkljhnbvdsdtryuiol;k,mjnbvcxd"/>

                                </div>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a data-dismiss="modal" class="button">
                                    Submit
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4-->
    <div class="modal fade" id="submit-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Copy
                    <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                         height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </div>
                <div class="modal-body">
                    <div class="center-div">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2 class="text-center price">
                                    test taeid shodi
                                </h2>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="text-center">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor
                                </p>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a data-dismiss="modal" class="dark-button">
                                    Done
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
