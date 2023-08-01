<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ setting('site.title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/JQUERY.js') }}"></script>
    <script src="{{ asset('assets/js/BOOTSTRAP.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <link rel="icon" type="image/png" href="{{ asset('assets/icon/logo.svg') }}"/>

    <meta >
    <style>
        .tradingview-widget-copyright {
            display: none;
        }
    </style>


</head>
<body>

<div class="container-fluid">
    @yield('modal')
    <div class="overlay"></div>

    @include('nav_mobile')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        @include('header')
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        @yield('content')
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        @include('footer')
                    </div>
                </div>

            </div>
        </div>
        @include('copy_right')
    </div>
</div>

<script src="{{ asset('assets/js/master.js') }}"></script>
<script>

    String.prototype.capitalizeFirstLetter = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    }

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {

        $("img").each(function() {
            let img_src = this.src.replace("assets/icon/crypto" , "assets/icon/crypto/white");
            this.src = img_src;
        });

    }



</script>

@yield('javascript')


</body>
</html>
