@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class="padding-items col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="input-row">
                    <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.059 18.118C14.9576 18.118 18.118 14.9576 18.118 11.059C18.118 7.16042 14.9576 4 11.059 4C7.16042 4 4 7.16042 4 11.059C4 14.9576 7.16042 18.118 11.059 18.118Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 20L16.05 16.05" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                    <input id="input_search" onkeyup="get_data()" class="search-input" name="search"
                           value="{{ request()->search }}" type="text" placeholder="{{ text('search') }}"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="margin-bottom col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <table>
                            <thead>
                            <tr>
                                <th scope="col">{{text('Market')}}</th>
                                <th class="table-space" scope="col"></th>
                                <th scope="col">{{text('Price')}}</th>
                                <th scope="col">{{text('Change 24H')}}</th>
                                <th scope="col">{{text('Dynamic')}}</th>
                            </tr>
                            </thead>
                            <tbody id="table_body">

                            {{--                            @each('components.home_coin' , $home_coins , 'home_coin')--}}

                            </tbody>
                        </table>
                    </div>
                    <div id="view_more_dive" class=" col-lg-12 col-md-12 col-sm-12">
                        <a class="button more" onclick="get_data(true)">
                            {{text('more')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection


@section('javascript')

    <script>

        let page = 1;

        get_data(false);

        function get_data(need_append = false) {
            const search = $("#input_search").val();

            if (need_append) {
                page++;
            } else {
                page = 1;
            }

            $.ajax({
                type: "GET",
                url: "{{ route('prices_api') }}",
                data: {"_token": "{{ csrf_token() }}", "search": search, 'page': page},
                success: function (data) {
                    const main_data = data.data.data;
                    if (main_data.length === 0) {
                        $("#view_more_dive").hide();
                    } else {
                        $("#view_more_dive").show();
                    }

                    console.log(main_data);

                    let template = "";

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

                        const _24_change = Number(current_data["24_change"]).toFixed(2);

                        template += `<tr>
                                        <td data-label="Market">
                                            <div class="flex-box market-item">
                                                <div class="flex-box icon-box">
                                                   <img src="assets/icon/crypto/${ window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'white/' + current_data.coin.symbol + '.svg' : current_data.coin.symbol + '.svg' }" alt="alt text" />
                                                </div>
                                                <div class="content">
                                                    ${current_data.coin.symbol.toUpperCase() } <span>(${current_data.coin.coin_name.capitalizeFirstLetter() })</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-space"></td>
                                        <td class="bold-chid" data-label="Price">$${current_data.price}</td>
                                        <td  class="bold-chid" data-label="Change 24H">${_24_change > 0 ? ("+" + _24_change) : _24_change}%</td>
                                        <td data-label="Dymanic">
                                            <canvas id="market${current_data.id}-chart"></canvas>
                                        </td>
                                    </tr>`;
                    }

                    if (need_append) {
                        $("#table_body").append(template);
                    } else {
                        $("#table_body").html(template);
                    }

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

                        console.log(JSON.parse(current_data.history));

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

    </script>

@endsection
