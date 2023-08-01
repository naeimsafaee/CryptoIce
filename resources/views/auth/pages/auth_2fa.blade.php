@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="history-row flex-box reference-row justify-content-start">
                            <a href="{{ route('security') }}">
                                {{ text('security title') }}
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
                                Enable Authenticator
                            </a>
                        </div>

                    </div>
                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row justify-content-center">
                                <div class=" col-lg-8 col-md-10 col-sm-12 col-12">
                                    <form>
                                        <div class="row">
                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-row" style="display: flex;flex-direction: column;align-items: center;">
                                                    <div>
                                                        {!! $QR_Image !!}
                                                    </div>

                                                    <p>
                                                        {{ $google2fa_secret }}
                                                    </p>

                                                    <p>
                                                        Please write the code and store it safety
                                                        <br>
                                                        Scan the qr code with your app
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <a type="button" class="dark-button submit" id="submit_button" href="{{ route('show_enter_verify') }}">
                                                    Enable
                                                </a>
                                            </div>
                                        </div>
                                    </form>
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
        $(".drop-down .selected .selected").click(function () {
            $(".drop-down .options ul").toggle();
            $(".drop-down .selected .drop-arrow").toggleClass("active");
        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function () {
            var text = $(this).html();

            $("#pre_phone").val($(text).text().trim())

            $(".drop-down .selected a ").html(text);
            $(".drop-down .options ul").hide();
            $(".drop-down .selected .drop-arrow").removeClass("active");
        });


        //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
        $(document).bind('click', function (e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("drop-down")) {
                $(".drop-down .selected .drop-arrow").removeClass("active");
                $(".drop-down .options ul").hide();
            }

        });
    </script>

@endsection
