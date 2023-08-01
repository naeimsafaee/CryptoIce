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
                                {{text('Enable SMS Authentication')}}
                            </a>
                        </div>

                    </div>
                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div class=" col-lg-8 col-md-10 col-sm-12 col-12">
                                    <form>
                                        <div class="row">
                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-row">
                                                    <div class="inter-code drop-down">
                                                        <div class="selected">
                                                            <svg class="drop-arrow" width="24" height="23"
                                                                 viewBox="0 0 24 23" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 9.85059L12 13.5519L16 9.85059"
                                                                      stroke-width="1.5" stroke-linecap="round"
                                                                      stroke-linejoin="round"/>
                                                            </svg>

                                                            <a class="selected">
                                                                <h5>
                                                                    +98
                                                                </h5>
                                                            </a>
                                                        </div>
                                                        <div class="options">
                                                            <ul>
                                                                @foreach($countries as $key => $value)
                                                                    @if($value != '' )
                                                                        <li>
                                                                            <a>
                                                                        <span class="flag-item">
                                                                            <img src="/assets/icon/flag/{{ strtolower($key) }}.svg">
                                                                        </span>
                                                                                <span>
                                                                            +{{$value}}
                                                                        </span>
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <a class="code" id="get_code_a">
                                                        {{text('Get Code')}}
                                                    </a>
                                                    <label>
                                                        {{text('Enter Phone number')}}
                                                    </label>
                                                    <input id="phone" name="phone" class="tel-input" type="text" @if(auth()->guard('clients')->user()->phone_verified_at) value="{{ auth()->guard('clients')->user()->phone }}" @endif
                                                           placeholder="Your number" @if(auth()->guard('clients')->user()->phone_verified_at) disabled @endif/>

                                                    <input id="pre_phone" value="+98" name="pre_phone" type="hidden"/>
                                                    <p class="error-massage" id="error_message123" style="display: none">
                                                        This phone number is exists
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-row">
                                                    <label>
                                                        {{text('SMS verification code')}}
                                                    </label>
                                                    <input type="text" id="code_input" placeholder="{{text('SMS verification code')}}"/>
                                                    <p class="error-massage" id="error_message" style="display: none">
                                                        Your code is wrong!
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <button type="button" class="dark-button submit" id="submit_button">
                                                    {{ text('change_password submit') }}
                                                </button>

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

        $("#get_code_a").click(function () {
            $("#error_message123").hide();
            if($("#phone").val().trim() == "")
                return;
            const tag = $(this).text('sending!');


            $.ajax({
                type: "POST",
                url: "{{ route('request_enable_sms') }}",
                data: {"_token": "{{ csrf_token() }}", @if(!auth()->guard('clients')->user()->phone_verified_at) "phone": $("#phone").val() , 'pre_phone' :$("#pre_phone").val() @endif },
                success: function () {
                    tag.text('Sent!');
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    tag.text('Error!');
                    if(XMLHttpRequest.status >= 400 && XMLHttpRequest.status < 500)
                        $("#error_message123").show();
                }
            });

        });

        $("#submit_button").click(function () {
            $("#error_message").hide();

            $.ajax({
                type: "POST",
                url: "{{ route('enable_sms') }}",
                data: {"_token": "{{ csrf_token() }}", "rest_link": $("#code_input").val()},
                success: function () {
                    window.location = "{{ route('profile') }}";
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $("#error_message").show();
                }
            });

        });


    </script>
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
