@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="history-row flex-box reference-row justify-content-start">
                            <a href="{{ route('copy_trade.index') }}">
                                Copy Trading
                            </a>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 17L19 12" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M14 7L19 12" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <a>
                                Trader Profile
                            </a>
                        </div>

                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row margin profile-row">
                                <div class="margin-bottom padding-items col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class=" flex-box justify-content-start">
                                        <div class="img-box">
                                            <img src="{{ $client->avatar ? Voyager::image($client->avatar) : asset('assets/icon/user.svg') }}">
                                        </div>
                                        <div>
                                            <h6>
                                                {{ $client->full_name }}
                                                <span>
                                                    {{ $client->username }}
                                                </span>
                                            </h6>
                                            <p>
                                                <span class="green">
                                                     {{ $client->trader->percent }}%
                                                </span>
                                                Return (Last 12M)
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-items grey">
                                        {{ $client->trader->description }}
                                    </p>
                                </div>
                                <div class="margin-bottom   padding-items col-lg-3 col-md-12 col-sm-12 col-12">
                                    <a href="" data-toggle="modal" data-target="#follow-copy-popup"
                                       class="Copy-white-button button flex-box">
                                        Edit
                                    </a>
                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                        Trading
                                    </h6>
                                </div>

                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <table class="coin-table Trade-history trade-profile-table">
                                        <tbody>
                                        <tr>
                                            <td class="chid2" data-label="Market">
                                                <div class="flex-box">
                                                   <span class="Total-Trades">
                                                        {{ $client->trader->trades->count() }}
                                                   </span>

                                                    <span class="grey-item">
                                                       Total Trades
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="chid2" data-label="Dymanic">
                                                <div class="flex-box justify-content-start">
                                                    <h6 class="value-item green flex-box">
                                                        <img src="{{ asset('assets/icon/green-arrow.svg') }}">
                                                        {{ $client->trader->average_profit }}
                                                    </h6>
                                                    <h6 class="grey-item">
                                                        Avg.Profit
                                                    </h6>
                                                </div>
                                            </td>
                                            <td class="chid2" data-label="Dymanic">
                                                <div class="flex-box justify-content-start">
                                                    <h6 class="value-item red flex-box">
                                                        <img src="{{ asset('assets/icon/red-arrow.svg') }}">
                                                        -{{ $client->trader->average_loss }}
                                                    </h6>
                                                    <h6 class="grey-item">
                                                        Avg.Loss
                                                    </h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ProgressBar ProgressBar--animateAll" data-progress="85">
                                                    <svg class="ProgressBar-contentCircle">
                                                        <!-- on défini le l'angle et le centre de rotation du cercle -->
                                                        <circle transform="rotate(0, 0, 0)"
                                                                class="ProgressBar-background" cx="22" cy="22" r="21"/>
                                                        <circle transform="rotate(0, 0, 0)" class="ProgressBar-circle"
                                                                cx="22" cy="22" r="21"/>
                                                        <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                                    </svg>
                                                    <p>
                                                        Correctness
                                                    </p>
                                                </div>

                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="padding-items col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="border-item">
                                    <div class="row">
                                        <div class="margin padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6>
                                                Average Risk
                                            </h6>
                                        </div>
                                        <div class="margin col-lg-12 col-md-12 col-sm-12 col-12">
                                            <canvas id="Average" width="100%" height="118px"></canvas>
                                        </div>
                                        <div class="margin-top padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6>
                                                Max Drawdown
                                            </h6>
                                        </div>
                                        <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="flex-box justify-content-between">
                                                <div class="Max">
                                                    <h6>
                                                        Daily
                                                    </h6>
                                                    <p>
                                                        -2.65%
                                                    </p>
                                                </div>
                                                <div class="Max">
                                                    <h6>
                                                        Weekly
                                                    </h6>
                                                    <p>
                                                        -2.65%
                                                    </p>
                                                </div>
                                                <div class="Max">
                                                    <h6>
                                                        Yearly
                                                    </h6>
                                                    <p>
                                                        -2.65%
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="padding-items col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="border-item">
                                    <div class="row">
                                        <div class="margin col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 style="font-size: 16px" class="grey">
                                                Copiers
                                            </h6>
                                            <h5 class="numbers">
                                                {{ $client->trader->copier->count() }}
                                            </h5>
                                        </div>
                                        <div class="margin col-lg-12 col-md-12 col-sm-12 col-12">
                                            <canvas id="Copiers" width="100%" height="80px"></canvas>
                                        </div>
                                        <div class="margin col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class=" result flex-box justify-content-start">
                                                <p style="color: @if($last_7_days_copiers_count - $last_last_7_days_copiers_count < 0) red @else green @endif">
                                                    {{ $last_7_days_copiers_count - $last_last_7_days_copiers_count }} ({{ ($last_7_days_copiers_count - $last_last_7_days_copiers_count) / ($last_last_7_days_copiers_count !== 0 ? $last_last_7_days_copiers_count : 1) * 100 }}%)
                                                </p>
                                                <p class="grey">
                                                    Copiers last 7d
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div class="margin padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                        Trade history
                                    </h6>
                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <table class="coin-table Trade-history trade-profile-table">
                                        <tbody>

                                            @each('components.trade.trade_history' , $trades , 'trade')

                                        </tbody>
                                    </table>
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
        (function ($) {

            $.fn.bekeyProgressbar = function (options) {

                options = $.extend({
                    animate: true,
                    animateText: true
                }, options);

                var $this = $(this);

                var $progressBar = $this;
                var $progressCount = $progressBar.find('.ProgressBar-percentage--count');
                var $circle = $progressBar.find('.ProgressBar-circle');
                var percentageProgress = $progressBar.attr('data-progress');
                var percentageRemaining = (100 - percentageProgress);
                var percentageText = $progressCount.parent().attr('data-progress');

                //Calcule la circonférence du cercle
                var radius = $circle.attr('r');
                var diameter = radius * 2;
                var circumference = Math.round(Math.PI * diameter);

                //Calcule le pourcentage d'avancement
                var percentage = circumference * percentageRemaining / 100;

                $circle.css({
                    'stroke-dasharray': circumference,
                    'stroke-dashoffset': percentage
                })

                //Animation de la barre de progression
                if (options.animate === true) {
                    $circle.css({
                        'stroke-dashoffset': circumference
                    }).animate({
                        'stroke-dashoffset': percentage
                    }, 3000)
                }

                //Animation du texte (pourcentage)
                if (options.animateText == true) {

                    $({Counter: 0}).animate(
                        {Counter: percentageText},
                        {
                            duration: 3000,
                            step: function () {
                                $progressCount.text(Math.ceil(this.Counter) + '%');
                            }
                        });

                } else {
                    $progressCount.text(percentageText + '%');
                }

            };

        })(jQuery);

        $(document).ready(function () {
            $('.ProgressBar--animateAll').each(function () {
                $(this).bekeyProgressbar();
            })
        })
    </script>
    <script>
        var ctx = document.getElementById("Average").getContext('2d');

        var arr = [
            @foreach($grouped_trades as $key => $trade)
                {{ $trade->sum('risk') / count($trade) }},
            @endforeach
        ]
        var arr2 = [
            @foreach($grouped_trades as $key => $trade)
                10 - {{ count($trade) }},
            @endforeach
        ]
        var randomScalingFactor = function () {
            return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
        };
        var AverageChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    // "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec",
                    @foreach($grouped_trades as $key => $trade)
                        "{{  Carbon\Carbon::createFromDate($trade->first()->created_at)->format('M') }}",
                    @endforeach
                ],
                datasets: [{
                    label: "Dataset2",
                    type: "bar",
                    backgroundColor: [
                        @foreach($grouped_trades as $key => $trade)
                            @if($trade->sum('risk') / count($trade) >= 80) '#FF3A44' @elseif($trade->sum('risk') / count($trade) > 50) '#F7CF1D' @else '#1DB954' @endif,
                        @endforeach
                        // "#1DB954", "#1DB954", "#1DB954", "#F7CF1D", "#F7CF1D", "#F7CF1D", "#F7CF1D", "#1DB954", "#1DB954", "#1DB954", "#1DB954", "#1DB954"
                    ],
                    borderColor: [
                        @foreach($grouped_trades as $key => $trade)
                                @if($trade->sum('risk') / count($trade) >= 80) '#FF3A44' @elseif($trade->sum('risk') / count($trade) > 50) '#F7CF1D' @else '#1DB954' @endif,
                        @endforeach
                        // "#1DB954", "#1DB954", "#1DB954", "#F7CF1D", "#F7CF1D", "#F7CF1D", "#F7CF1D", "#1DB954", "#1DB954", "#1DB954", "#1DB954", "#1DB954"
                    ],
                    borderWidth: 1,
                    fill: true,
                    yAxisID: "axis-bar",
                    data: arr
                }, {
                    label: "Dataset3",
                    type: "bar",
                    backgroundColor: "#F4F4F4",
                    borderColor: "#F4F4F4",
                    borderWidth: 1,
                    fill: true,
                    yAxisID: "axis-bar",
                    data: arr2
                }],
            },
            options: {
                tooltips: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        stacked: true,
                        ticks: {
                            min: 0,
                            fontColor: '#989AA9',
                            stepSize: 36
                        },
                    }],
                    yAxes: [{
                        display: false,
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        stacked: true,
                        id: 'axis-bar',
                        ticks: {
                            min: 0,
                            stepSize: 10
                        },
                    }, {
                        stacked: true,
                        id: 'axis-time',
                        display: false,
                    }]
                },
                responsive: true,
                maintainAspectRatio: false,
                legend: {display: false},

            }
        });

        var legend = AverageChart.generateLegend();
    </script>
    <script>
        var ctx = document.getElementById("Copiers").getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: [1, 2, 3, 4, 5, 6],
                datasets: [{
                    pointBorderWidth: 0,
                    pointHoverRadius: 0,
                    pointRadius: 0,
                    lineTension: 0,
                    label: '', // Name the series
                    data: [
                        @foreach($copiers as $key => $copier)
                            {{ $copier->count() }},
                        @endforeach
                        // 0, 10, 1, 20, 8, 34, 16, 10, 25, 10
                    ], // Specify the data values array
                    fill: false,
                    borderColor: '#3797FD', // Add custom color border (Line)
                    backgroundColor: '#3797FD', // Add custom color background (Points and Fill)
                    borderWidth: 2 // Specify bar border width
                }]
            },
            options: {
                scales:
                    {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: true,
                                color: "#EFF7FA"
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
                            position: 'right',
                            gridLines: {
                                display: false,
                                drawBorder: true,
                                color: "#EFF7FA"
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
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
            }
        });
    </script>
@endsection
