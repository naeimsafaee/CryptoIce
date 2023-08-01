@extends('index')

@section('content')

    <section class="main">
        @if($client->wallet == 0)
            <div class="row blue-div">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="padding-items row">
                        <div class=" col-lg-12 col-md-12 col-sm-12">
                            <h2>
                                {{ text('welcome to cryptoo ice') }}
                            </h2>
                            <h5>
                                {{ text('just a few step') }}
                            </h5>
                        </div>
                        <div class=" col-lg-12 col-md-12 col-sm-12">
                            <div class=" step-row row">
                                <div class="steps-item position-relative col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="link-line">

                                    </div>
                                    <div class="steps flex-box @if($client->security_level() > 0) active @endif">
                                        @if($client->security_level() > 0)
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @else
                                            1
                                        @endif
                                    </div>
                                    <div class="steps-content">
                                        <h6>
                                            Register Account
                                        </h6>
                                    </div>
                                </div>
                                <div class="steps-item position-relative col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="link-line">

                                    </div>
                                    <a href="{{ route('profile') }}">

                                        <div class="steps flex-box @if($client->security_level() > 1) active @endif">
                                            @if($client->security_level() > 1)
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            @else
                                                2
                                            @endif
                                        </div>
                                    </a>
                                    <a href="{{ route('security') }}">
                                        <div class="steps-content">
                                            <h6>
                                                2FA
                                            </h6>
                                            <p>
                                                Secure your account with two-factor authentication！
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="steps-item position-relative col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="steps flex-box ">
                                        3
                                    </div>
                                    <div class="steps-content">
                                        <h6>
                                            Deposit Funds
                                        </h6>
                                        <p>
                                            Add cash or crypto funds to your wallet and start trading right away

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="position-relative web-item col-lg-4 col-md-3 col-sm-12">
                    <img class="position-absolute star2" src="{{ asset('assets/icon/big-star.svg') }}">
                    <img class="position-absolute star3" src="{{ asset('assets/icon/big-star.svg') }}">
                    <img class="position-absolute star4" src="{{ asset('assets/icon/littel-star.svg') }}">
                    <img class="position-absolute star5" src="{{ asset('assets/icon/littel-star.svg') }}">
                </div>

            </div>
        @endif

        <div class="row">
            <div class="flex-box justify-content-start padding-items col-lg-3 col-md-4 col-sm-6 col-12">
                {{--<h2 style="margin: 0" class="title-item">
                    Dashboard
                </h2>--}}
            </div>
            <div class="padding-items col-lg-5 col-md-6 col-sm-12 col-12">
                <div style="margin-top: 0" class="input-row">
                    <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M11.059 18.118C14.9576 18.118 18.118 14.9576 18.118 11.059C18.118 7.16042 14.9576 4 11.059 4C7.16042 4 4 7.16042 4 11.059C4 14.9576 7.16042 18.118 11.059 18.118Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 20L16.05 16.05" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <input class="search-input" id="input_search" type="text" placeholder="Search"
                           onkeyup="get_data()"/>

                </div>
            </div>
        </div>
        <div class="row">

            @include('profile.sidebar.dashboard_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">

                    @if(count($favorite_coins) > 0)
                    <div id="favorite_title" class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="favor">
                            {{ text('Favorite Coin') }}
                        </h6>
                    </div>
                    <div id="favorite_body" class="margin-bottom padding-items col-lg-12 col-md-12 col-sm-12">
                        <table class="coin-table">
                            <thead>
                            <tr>
                                <th class="chid1"></th>
                                <th>{{text('Market')}}</th>
                                <th>{{text('Value')}}</th>
                                <th class="canvas-row">{{text('Dynamic')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="favorite_table">

                            @each('components.favorite_coin' , $favorite_coins , 'coin')

                            </tbody>
                        </table>
                    </div>
                    @endif


                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                        <table class="coin-table">
                            <thead>
                            <tr>
                                <th class="chid1"></th>
                                <th>{{text('Market')}}</th>
                                <th>{{text('Value')}}</th>
                                <th class="canvas-row">{{text('Dynamic')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="coin_table">

                            @each('components.not_favorite_coin' , $coins , 'coin')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection

@section('javascript')

    <script>
        $(".star").click(function () {
            $(this).toggleClass("active");
        });

        @foreach($favorite_coins as $coin)

        new Chart(document.getElementById("market{{ $coin->id }}-chart").getContext('2d'), {
            type: 'line',

            data: {
                labels: [1, 2, 3, 4, 5, 6],

                datasets: [{
                    pointBorderWidth: 0,
                    pointHoverRadius: 0,
                    pointRadius: 0,
                    label: '',
                    data: {{ $coin->history }},
                    fill: false,
                    borderColor: '@if($coin->{'24_change'} < 0) #FC96C3 @else #15CF74 @endif',
                    backgroundColor: '@if($coin->{'24_change'} > 0) #FC96C3 @else #15CF74 @endif',
                    borderWidth: 4
                }]
            },
            options: {
                scales:
                    {
                        responsive: true,
                        maintainAspectRatio: false,
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: false,
                                fontSize: 0,
                                fontColor: '#fff',
                                maxTicksLimit: 5,
                                padding: 0,
                            },
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: false,
                                fontSize: 0,
                                fontColor: '#fff',
                                maxTicksLimit: 5,
                                padding: 0,
                            }
                        }],
                    },
                legend: {
                    display: false
                },
                responsive: true,
                maintainAspectRatio: false,
            }
        });

        @endforeach

        @foreach($coins as $coin)

        new Chart(document.getElementById("market{{ $coin->id }}-chart-1").getContext('2d'), {
            type: 'line',

            data: {
                labels: [1, 2, 3, 4, 5, 6],

                datasets: [{
                    pointBorderWidth: 0,
                    pointHoverRadius: 0,
                    pointRadius: 0,
                    label: '',
                    data: {{ $coin->history }},
                    fill: false,
                    borderColor: '@if($coin->{'24_change'} < 0) #FC96C3 @else #15CF74 @endif',
                    backgroundColor: '@if($coin->{'24_change'} > 0) #FC96C3 @else #15CF74 @endif',
                    borderWidth: 4
                }]
            },
            options: {
                scales:
                    {
                        responsive: true,
                        maintainAspectRatio: false,
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: false,
                                fontSize: 0,
                                fontColor: '#fff',
                                maxTicksLimit: 5,
                                padding: 0,
                            },
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: false,
                                fontSize: 0,
                                fontColor: '#fff',
                                maxTicksLimit: 5,
                                padding: 0,
                            }
                        }],
                    },
                legend: {
                    display: false
                },
                responsive: true,
                maintainAspectRatio: false,
            }
        });

        @endforeach

        $(".remove_favorite").click(function () {
            const element = $(this);

            const coin_id = element.data('coin-id');

            remove_from_favorite(coin_id , this)
        });

        function remove_from_favorite(coin_id , _this){
            const element = $(_this);

            $(`.chid1[data-id=${coin_id}] svg`).toggleClass("active");

            $.ajax({
                type: "DELETE",
                url: "{{ route('favorite.index') }}/" + coin_id,
                data: {"_token": "{{ csrf_token() }}"},
                success: function () {
                    element.parent().fadeOut(300, function () {
                        $(this).remove();
                    });
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                }
            });
        }

        function add_favorite(coin_id) {
            $.ajax({
                type: "POST",
                url: "{{ route('favorite.store') }}",
                data: {"_token": "{{ csrf_token() }}", "coin_id": coin_id},
                success: function (data) {

                    $("#favorite_table").empty();

                    for (let i = 0; i < data.length; i++) {
                        const current_data = data[i];

                        const template = `
                        <tr>
                            <td class="chid1 remove_favorite" data-id="${current_data.id}" onclick="remove_from_favorite(${current_data.id} , this)">
                                 <svg class="star active" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.2036 6.56323C10.9354 5.06964 13.0643 5.06978 13.7959 6.56347L14.4719 7.94391C14.7618 8.53579 15.3246 8.94688 15.9766 9.04291L17.5178 9.26993C19.1529 9.51076 19.8068 11.5183 18.6273 12.676L17.4961 13.7862C17.0287 14.2449 16.8155 14.9035 16.9254 15.5491L17.1893 17.0995C17.4678 18.7355 15.7476 19.9793 14.2812 19.2023L12.9364 18.4897C12.3507 18.1793 11.6493 18.1793 11.0636 18.4897L9.71877 19.2023C8.25241 19.9793 6.53223 18.7355 6.81069 17.0995L7.07457 15.5491C7.18447 14.9035 6.97128 14.2449 6.50386 13.7862L5.37261 12.6759C4.19311 11.5182 4.84701 9.51073 6.48204 9.26985L8.02256 9.04291C8.67446 8.94687 9.23723 8.53589 9.52712 7.94416L10.2036 6.56323Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </td>
                            <td data-label="Market">
                                <div class="flex-box market-item">
                                    <div class="flex-box icon-box">
                                       <img style="margin:8px" src="{{ asset('') }}assets/icon/crypto/${window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'white/' + current_data.coin.symbol + '.svg' : current_data.coin.symbol + '.svg'}" alt="alt text" />
                                    </div>
                                    <div class="content">
                                        ${current_data.coin.symbol.toUpperCase()} <span>(${current_data.coin.coin_name.capitalizeFirstLetter()})</span>
                                    </div>
                                </div>
                            </td>
                            <td class="sell-buy " data-label="Value">
                                <div class="flex-box">
                                    <div>
                                        <span>
                                            Buy
                                        </span>
                                        <span>
                                            $${parseFloat(current_data.buy_price).toFixed(2)}
                                        </span>

                                    </div>
                                    <div>
                                        <span>
                                            Sell
                                        </span>
                                        <span>
                                            $${parseFloat(current_data.sell_price).toFixed(2)}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="canvas-row" data-label="Dymanic">
                                <canvas id="market${current_data.id}-chart"></canvas>
                            </td>
                            <td>
                                <div class="flex-box sell-by-buttons">
                                    <a class="button" href="{{ route('buy_trade_manual') }}?trade=${current_data.coin.symbol.toUpperCase()}_USDT">
                                        Buy
                                    </a>
                                    <a class="button" href="{{ route('sell_trade_manual') }}?trade=${current_data.coin.symbol.toUpperCase()}_USDT">
                                        Sell
                                    </a>
                                </div>
                            </td>
                        </tr>
                    `;

                        $("#favorite_table").append(template);

                        new Chart(document.getElementById(`market${current_data.id}-chart`).getContext('2d'), {
                            type: 'line',
                            data: {
                                labels: [1, 2, 3, 4, 5, 6],
                                datasets: [{
                                    pointBorderWidth: 0,
                                    pointHoverRadius: 0,
                                    pointRadius: 0,
                                    label: '',
                                    data: JSON.parse(current_data.history),
                                    fill: false,
                                    borderColor: current_data["24_change"] < 0 ? "#FC96C3" : "#15CF74",
                                    backgroundColor: current_data["24_change"] < 0 ? "#FC96C3" : "#15CF74",
                                    borderWidth: 4
                                }]
                            },
                            options: {
                                animation: {
                                    duration: 0
                                },
                                scales:
                                    {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        xAxes: [{
                                            gridLines: {
                                                display: false,
                                                drawBorder: false,
                                            },
                                            ticks: {
                                                beginAtZero: false,
                                                fontSize: 0,
                                                fontColor: '#fff',
                                                maxTicksLimit: 5,
                                                padding: 0,
                                            },
                                        }],
                                        yAxes: [{
                                            gridLines: {
                                                display: false,
                                                drawBorder: false,
                                            },
                                            ticks: {
                                                beginAtZero: false,
                                                fontSize: 0,
                                                fontColor: '#fff',
                                                maxTicksLimit: 5,
                                                padding: 0,
                                            }
                                        }],
                                    },
                                legend: {
                                    display: false
                                },
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    }


                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                }
            });
        }

        function get_data(need_append = false) {
            const search = $("#input_search").val();

            // $("#coin_table").empty();

            if (search.length === 0) {
                $("#favorite_title , #favorite_body").slideDown();
            } else {
                $("#favorite_title , #favorite_body").slideUp();
            }

            $.ajax({
                type: "GET",
                url: "{{ route('prices_api') }}",
                data: {"_token": "{{ csrf_token() }}", "search": search},
                success: function (data) {
                    const main_data = data.data.data;

                    console.log(main_data);

                    let template = "";

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

                        const _24_change = Number(current_data["24_change"]).toFixed(2);

                        template += `
                        <tr>
                            <td class="chid1" onclick="add_favorite(${current_data.id})">
                                <svg class="star " width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.2036 6.56323C10.9354 5.06964 13.0643 5.06978 13.7959 6.56347L14.4719 7.94391C14.7618 8.53579 15.3246 8.94688 15.9766 9.04291L17.5178 9.26993C19.1529 9.51076 19.8068 11.5183 18.6273 12.676L17.4961 13.7862C17.0287 14.2449 16.8155 14.9035 16.9254 15.5491L17.1893 17.0995C17.4678 18.7355 15.7476 19.9793 14.2812 19.2023L12.9364 18.4897C12.3507 18.1793 11.6493 18.1793 11.0636 18.4897L9.71877 19.2023C8.25241 19.9793 6.53223 18.7355 6.81069 17.0995L7.07457 15.5491C7.18447 14.9035 6.97128 14.2449 6.50386 13.7862L5.37261 12.6759C4.19311 11.5182 4.84701 9.51073 6.48204 9.26985L8.02256 9.04291C8.67446 8.94687 9.23723 8.53589 9.52712 7.94416L10.2036 6.56323Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </td>
                            <td data-label="Market">
                                <div class="flex-box market-item">
                                    <div class="flex-box icon-box">
                                       <img style="margin:8px" src="{{ asset('') }}assets/icon/crypto/${window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'white/' + current_data.coin.symbol + '.svg' : current_data.coin.symbol + '.svg'}" alt="alt text" />
                                    </div>
                                    <div class="content">
                                        ${current_data.coin.symbol.toUpperCase()} <span>(${current_data.coin.coin_name.capitalizeFirstLetter()})</span>
                                    </div>
                                </div>
                            </td>
                            <td class="sell-buy " data-label="Value">
                                <div class="flex-box">
                                    <div>
                                        <span>
                                            Buy
                                        </span>
                                        <span>
                                            $${parseFloat(current_data.buy_price).toFixed(2)}
                                        </span>

                                    </div>
                                    <div>
                                        <span>
                                            Sell
                                        </span>
                                        <span>
                                            $${parseFloat(current_data.sell_price).toFixed(2)}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="canvas-row" data-label="Dymanic">
                                <canvas id="market${current_data.id}-chart-1"></canvas>
                            </td>
                            <td>
                                <div class="flex-box sell-by-buttons">
                                    <a class="button" href="{{ route('buy_trade_manual') }}?trade=${current_data.coin.symbol.toUpperCase()}_USDT">
                                        Buy
                                    </a>
                                    <a class="button" href="{{ route('sell_trade_manual') }}?trade=${current_data.coin.symbol.toUpperCase()}_USDT">
                                        Sell
                                    </a>
                                </div>
                            </td>
                        </tr>
                        `;
                    }

                    $("#coin_table").html(template);

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

                        new Chart(document.getElementById(`market${current_data.id}-chart-1`).getContext('2d'), {
                            type: 'line',
                            data: {
                                labels: [1, 2, 3, 4, 5, 6],
                                datasets: [{
                                    pointBorderWidth: 0,
                                    pointHoverRadius: 0,
                                    pointRadius: 0,
                                    label: '',
                                    data: JSON.parse(current_data.history),
                                    fill: false,
                                    borderColor: current_data["24_change"] < 0 ? "#FC96C3" : "#15CF74",
                                    backgroundColor: current_data["24_change"] < 0 ? "#FC96C3" : "#15CF74",
                                    borderWidth: 4
                                }]
                            },
                            options: {
                                animation: {
                                    duration: 0
                                },
                                scales:
                                    {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        xAxes: [{
                                            gridLines: {
                                                display: false,
                                                drawBorder: false,
                                            },
                                            ticks: {
                                                beginAtZero: false,
                                                fontSize: 0,
                                                fontColor: '#fff',
                                                maxTicksLimit: 5,
                                                padding: 0,
                                            },
                                        }],
                                        yAxes: [{
                                            gridLines: {
                                                display: false,
                                                drawBorder: false,
                                            },
                                            ticks: {
                                                beginAtZero: false,
                                                fontSize: 0,
                                                fontColor: '#fff',
                                                maxTicksLimit: 5,
                                                padding: 0,
                                            }
                                        }],
                                    },
                                legend: {
                                    display: false
                                },
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    }

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });

        }

    </script>

@endsection
