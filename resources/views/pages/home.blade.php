@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class="margin-bottom padding-items col-lg-12 col-md-12 col-sm-12">
                <div class="Ellips-main-row margin-bottom row">
                    <div class="content-box col-lg-6 col-md-12 col-sm-12">
                        <h1>
                            {{ text('slider title') }}
                        </h1>
                        <p>
                            {{ text('under title slider') }}
                        </p>
                        <div class="flex-box button-row">
                            <a class="flex-box dark-button" href="{{ route('dashboard') }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.0957 12.1235L11.6989 16.4409V16.4409C11.3011 16.7592 10.7275 16.7274 10.3671 16.3671L7.63292 13.6329V13.6329C7.27262 13.2726 7.24085 12.699 7.55917 12.3011L11.8766 6.90437V6.90437C13.8508 4.43659 16.8397 3.00003 20 3.00003V3.00003C20.5523 3.00003 21 3.44775 21 4.00003V4.00004C21 7.16034 19.5635 10.1493 17.0957 12.1235L17.0957 12.1235Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M16 13V17.382V17.382C16 17.7608 15.786 18.107 15.4472 18.2764L13.0313 19.4844V19.4844C12.5373 19.7314 11.9366 19.5312 11.6896 19.0372C11.6685 18.9949 11.6504 18.9511 11.6354 18.9062L11 17"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M6.99999 13L5.09383 12.3646V12.3646C4.56989 12.19 4.28673 11.6236 4.46138 11.0997C4.47634 11.0548 4.49447 11.011 4.51563 10.9687L5.72363 8.55279V8.55279C5.89301 8.21403 6.23924 8.00003 6.61799 8H11"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M5.7501 20.5869L3 21.0001L3.41315 18.25V18.25C3.54717 17.3578 4.2475 16.6575 5.13964 16.5235V16.5235C6.26172 16.3549 7.30803 17.1278 7.47664 18.2499C7.50705 18.4523 7.50705 18.6581 7.47664 18.8605V18.8605C7.34259 19.7526 6.64224 20.4529 5.7501 20.5869V20.5869Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    {{ text('home start') }}
                                </p>
                            </a>
                            <a class="flex-box button white-button" href="{{ route('request.index') }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.88 12.825L13.728 9.795C14.519 9.3 15 8.433 15 7.5C15 6.119 13.881 5 12.5 5C11.119 5 10 6.119 10 7.5C10 8.328 9.328 9 8.5 9C7.672 9 7 8.328 7 7.5C7 4.462 9.462 2 12.5 2C15.538 2 18 4.462 18 7.5V20C18 21.105 17.105 22 16 22H9C7.895 22 7 21.105 7 20V16.217C7 14.838 7.71 13.556 8.88 12.825V12.825Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    {{ text('home Request') }}
                                </p>
                            </a>
                        </div>
                    </div>
                    <div style="position: relative" class="center-div col-lg-6 col-md-12 col-sm-12">
                        <div class="cartOutSide">
                            <div class="cartInSide">
                                <div class="bigCircle ball">
                                    <img src="{{ asset('assets/icon/bigCircle.svg') }}" alt="">
                                    <div class="Snowflake3"><img class=""
                                                                 src="{{ asset('assets/icon/Snowflake3.svg') }}" alt="">
                                    </div>

                                </div>
                                <div class="smallCircle">
                                    <img src="{{ asset('assets/icon/smallCircle.svg') }}" alt="">
                                    <div class="Snowflake4"><img class=""
                                                                 src="{{ asset('assets/icon/Snowflake4.svg') }}" alt="">
                                    </div>
                                    <div class="Snowflake5"><img class=""
                                                                 src="{{ asset('assets/icon/Snowflake4.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="cart">
                                <img src="{{ asset('assets/icon/card.png') }}" class="card-init" alt="">
                            </div>
                        </div>

                        <div class="blur1"></div>
                        <div class="blur2"></div>
                        <div class="blur3"></div>
                    </div>
                </div>
            </div>
            <div class="margin-bottom col-lg-12 col-md-12 col-sm-12">
                <div class="border-item">
                    <div class="row">
                        <div class="second-padding-item col-lg-5 col-md-12 col-sm-12">
                            <div class="tool-details">
                                <h5>
                                    {{ text('home title box') }}
                                </h5>
                                <p>
                                    {{ text('home under title box') }}
                                </p>
                            </div>
                        </div>
                        <div class="second-padding-item col-lg-7  col-md-12 col-sm-12">
                            <div class="row">

                                @each('components.features' , \App\Models\Feature::all() , 'feature')

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="space margin-bottom col-lg-12 col-md-12 col-sm-12">
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

                            @each('components.home_coin' , $home_coins , 'home_coin')

                            </tbody>
                        </table>
                    </div>
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <a class="button more" href="{{ route('prices') }}">
                            {{text('more')}}
                        </a>
                    </div>
                </div>

            </div>

            <div class="space col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">

                            @foreach(\App\Models\Service::all()->take(2) as $service)
                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <a class="flex-box service-item"  href="{{ $service->link }}">
                                        <img src="{{ $service->image ? Voyager::image($service->image) : asset('assets/icon/circle-with-mask.svg') }}">
                                        <div class="service-content">
                                            <h2>
                                                {{ $service->getTranslatedAttribute('title') }}
                                            </h2>
                                            <p>
                                                {{ $service->getTranslatedAttribute('description') }}
                                            </p>

                                        </div>

                                    </a>
                                </div>
                            @endforeach

                            <div class="margin-bottom more-row col-lg-12 col-md-12 col-sm-12">
                                <a id="dark-button" class="flex-box dark-button" href="{{ route('service.index') }}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.75 11.5V11.5C4.12665 11.5 2 9.37335 2 6.75C2 4.12665 4.12665 2 6.75 2C9.37335 2 11.5 4.12665 11.5 6.75V6.75C11.5 9.37335 9.37335 11.5 6.75 11.5"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M13.866 5.04883V5.04883C18.2579 5.52663 21.4309 9.47429 20.9531 13.8662C20.4753 18.2581 16.5276 21.4311 12.1357 20.9533C8.40276 20.5472 5.45477 17.5991 5.04865 13.8662"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M8.38302 6.75264C8.38302 6.78025 8.36063 6.80264 8.33302 6.80264C8.30541 6.80264 8.28302 6.78025 8.28302 6.75264C8.28302 6.72502 8.30541 6.70264 8.33302 6.70264"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M8.33301 6.70264V6.70264C8.36062 6.70264 8.38301 6.72502 8.38301 6.75264"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M5.217 6.75264C5.217 6.78025 5.19462 6.80264 5.167 6.80264C5.13939 6.80264 5.117 6.78025 5.117 6.75264C5.117 6.72502 5.13939 6.70264 5.167 6.70264"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path
                                            d="M5.16699 6.70264V6.70264C5.19461 6.70264 5.21699 6.72502 5.21699 6.75264"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p>
                                        {{ text('blog read more') }}
                                    </p>

                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="web-item Ellipse-row col-lg-6 col-md-6 col-sm-12">
                        <img class="big-bean" src="{{asset('assets/icon/big-bean.svg')}}">
                        <img class="medium-Snowflake " src="{{asset('assets/icon/Snowflake3.svg')}}">
                        <img class="small-Snowflake " src="{{asset('assets/icon/Snowflake4.svg')}}">

                        <svg class="big-ellipse" width="336" height="322" viewBox="0 0 336 322" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.5228 131.834C38.2478 59.6669 107.27 11.5097 179.693 24.28C215.971 30.6767 252.457 49.8219 278.263 76.3951C304.066 102.965 319.11 136.863 312.771 172.814C311.168 181.901 305.451 189.14 297.155 195.214C288.849 201.294 278.041 206.142 266.43 210.451C259.178 213.142 251.671 215.603 244.292 218.022C239.839 219.482 235.433 220.926 231.158 222.397C219.852 226.286 209.49 230.348 201.943 235.3C194.945 239.893 188.499 246.108 182.246 252.696C179.946 255.119 177.679 257.584 175.419 260.043C171.5 264.304 167.603 268.544 163.591 272.498C150.959 284.951 137.668 294.081 120.619 291.075C48.3757 278.337 12.7628 204.199 25.5228 131.834Z"
                                stroke-width="2"/>
                        </svg>
                        <svg class="medium-ellipse" width="302" height="290" viewBox="0 0 302 290" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.2276 118.82C34.6473 54.0564 96.5347 10.8306 161.461 22.2789C193.99 28.0146 226.706 45.1939 249.842 69.0409C272.975 92.8846 286.449 123.297 280.763 155.546C279.33 163.673 274.22 170.156 266.787 175.603C259.345 181.057 249.657 185.409 239.241 189.279C232.734 191.697 226.002 193.907 219.383 196.081C215.387 197.393 211.432 198.691 207.592 200.014C197.447 203.508 188.138 207.162 181.353 211.619C175.063 215.751 169.271 221.342 163.658 227.261C161.592 229.44 159.556 231.656 157.527 233.865C154.012 237.692 150.518 241.496 146.919 245.047C135.586 256.23 123.692 264.399 108.448 261.711C43.7016 250.294 11.7729 183.784 23.2276 118.82Z"
                                stroke-width="2"/>
                        </svg>

                        <svg class="small-ellipse" width="265" height="255" viewBox="0 0 265 255" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.9124 105.008C30.9335 48.1756 85.2055 10.2382 142.135 20.2764C170.666 25.3072 199.362 40.3835 219.651 61.3122C239.938 82.2377 251.74 108.917 246.753 137.2C245.502 144.299 241.04 149.97 234.53 154.745C228.01 159.527 219.517 163.347 210.375 166.748C204.665 168.872 198.759 170.813 192.95 172.722C189.441 173.875 185.967 175.017 182.593 176.181C173.686 179.252 165.5 182.467 159.53 186.392C153.995 190.032 148.902 194.952 143.972 200.154C142.155 202.072 140.366 204.02 138.585 205.962C135.5 209.322 132.436 212.661 129.278 215.779C119.332 225.6 108.929 232.738 95.61 230.389C38.8604 220.383 10.8562 162.04 20.9124 105.008Z"
                                stroke-width="2"/>
                        </svg>


                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">

                        <div class="title-row flex-box">
                            <h2>
                                {{ text('blog title') }}
                            </h2>
                            <a class="web-blog-more flex-box button white-button" href="{{ route('blog.index') }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.172 19.828L20.122 17.878V17.878C20.684 17.3156 20.9998 16.5531 21 15.758V8C21 5.23858 18.7614 3 16 3H8V3C5.23858 3 3 5.23858 3 8V8V16V16C3 18.7614 5.23858 21 8 21H15.343H15.343C16.4041 21 17.4218 20.5784 18.172 19.828V19.828Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 21V17V17C15 15.8954 15.8954 15 17 15H21" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M12 11.931V11.931C11.9625 11.931 11.932 11.9615 11.932 11.999C11.932 11.9994 11.932 11.9997 11.932 12V12C11.932 12.0381 11.9629 12.069 12.001 12.069C12.0391 12.069 12.07 12.0381 12.07 12C12.07 11.9619 12.0391 11.931 12.001 11.931C12.0007 11.931 12.0004 11.931 12 11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M15.368 11.931V11.931C15.3299 11.931 15.299 11.9619 15.299 12C15.299 12.0381 15.3299 12.069 15.368 12.069C15.4061 12.069 15.437 12.0381 15.437 12V12C15.437 11.9619 15.4061 11.931 15.368 11.931V11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M8.63099 11.931V11.931C8.59344 11.931 8.56299 11.9615 8.56299 11.999C8.56299 11.9994 8.56299 11.9997 8.56299 12V12C8.56299 12.0381 8.59389 12.069 8.632 12.069C8.6701 12.069 8.701 12.0381 8.701 12C8.701 11.9619 8.6701 11.931 8.632 11.931C8.63166 11.931 8.63133 11.931 8.631 11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    {{ text('blog read more') }}
                                </p>
                            </a>

                        </div>

                    </div>

                    @each('components.small_blog' , $last_blog , 'blog')

                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-blog-more title-row flex-box">
                            <a class="flex-box button white-button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.172 19.828L20.122 17.878V17.878C20.684 17.3156 20.9998 16.5531 21 15.758V8C21 5.23858 18.7614 3 16 3H8V3C5.23858 3 3 5.23858 3 8V8V16V16C3 18.7614 5.23858 21 8 21H15.343H15.343C16.4041 21 17.4218 20.5784 18.172 19.828V19.828Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 21V17V17C15 15.8954 15.8954 15 17 15H21" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M12 11.931V11.931C11.9625 11.931 11.932 11.9615 11.932 11.999C11.932 11.9994 11.932 11.9997 11.932 12V12C11.932 12.0381 11.9629 12.069 12.001 12.069C12.0391 12.069 12.07 12.0381 12.07 12C12.07 11.9619 12.0391 11.931 12.001 11.931C12.0007 11.931 12.0004 11.931 12 11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M15.368 11.931V11.931C15.3299 11.931 15.299 11.9619 15.299 12C15.299 12.0381 15.3299 12.069 15.368 12.069C15.4061 12.069 15.437 12.0381 15.437 12V12C15.437 11.9619 15.4061 11.931 15.368 11.931V11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M8.63099 11.931V11.931C8.59344 11.931 8.56299 11.9615 8.56299 11.999C8.56299 11.9994 8.56299 11.9997 8.56299 12V12C8.56299 12.0381 8.59389 12.069 8.632 12.069C8.6701 12.069 8.701 12.0381 8.701 12C8.701 11.9619 8.6701 11.931 8.632 11.931C8.63166 11.931 8.63133 11.931 8.631 11.931"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    {{ text('blog read more') }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection

@section('javascript')

    <script>

        @foreach($home_coins as $home_coin)

            new Chart(document.getElementById("market{{ $home_coin->id }}-chart").getContext('2d'), {
                type: 'line',

                data: {
                    labels: [1, 2, 3, 4, 5, 6],

                    datasets: [{
                        pointBorderWidth: 0,
                        pointHoverRadius: 0,
                        pointRadius: 0,
                        label: '',
                        data: {{ $home_coin->history }},
                        fill: false,
                        borderColor: '@if($home_coin->{'24_change'} < 0) #FC96C3 @else #15CF74 @endif',
                        backgroundColor: '@if($home_coin->{'24_change'} > 0) #FC96C3 @else #15CF74 @endif',
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

    </script>

    <script>

        gsap.timeline()
            .add(centerMain(), 0.2)
            .from('.ball', {
                duration: 2,
                transformOrigin: '50% 50%',
                scale: 0,
                opacity: 0,
                ease: 'elastic',
                stagger: 0.2
            }, 0)


        function centerMain() {
            gsap.set('.main', {x: '5%', xPercent: -10, y: '5%', yPercent: -10});
        }

        window.onresize = centerMain;


        function myFunction(x) {
            if (x.matches) {
            } else {
                window.onmousemove = (e) => {
                    let winPercent = {x: e.clientX / window.innerWidth, y: e.clientY / window.innerHeight * 2},
                        distFromCenter = 1 - Math.abs((e.clientX - window.innerWidth / 2) / window.innerWidth * 2);

                    gsap.timeline({defaults: {duration: .5, overwrite: 'auto'}})
                        .to('.cart', {rotation: -7 + 9 * winPercent.x}, 0)
                        .to('.ball', {x: 50 - 100 * winPercent.x, y: 10 - 20 * winPercent.y}, 0)
                        .to('.smallCircle', {x: 40 - 100 * winPercent.x, y: 20 - 15 * winPercent.y}, 0)
                        .to('.cart', {x: 50 - 100 * winPercent.x, y: 10 - 20 * winPercent.y}, 0)
                }

            }
        }

        var x = window.matchMedia("(max-width: 90px)")
        myFunction(x)
        x.addListener(myFunction)
    </script>


    <script>

        setInterval(get_data , 3000);

        function get_data() {

            $.ajax({
                type: "GET",
                url: "{{ route('home_prices_api') }}",
                data: {"_token": "{{ csrf_token() }}"},
                success: function (data) {
                    const main_data = data.data;

                    if (main_data.length === 0)
                        return;

                    console.log(main_data);

                    $("#table_body").empty();

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

                        const _24_change = Number(current_data["24_change"]).toFixed(2);

                        let template = `<tr>
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
                                        <td class="bold-chid" data-label="Price">$${Number(current_data.price).toFixed(2)}</td>
                                        <td  class="bold-chid" data-label="Change 24H">${_24_change > 0 ? ("+" + _24_change) : _24_change}%</td>
                                        <td data-label="Dymanic">
                                            <canvas id="market${current_data.id}-chart"></canvas>
                                        </td>
                                    </tr>`;

                        $("#table_body").append(template);
                    }

                    for (let i = 0; i < main_data.length; i++) {
                        const current_data = main_data[i];

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
