@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="history-row flex-box reference-row justify-content-start" >
                            <a href="{{ route('security') }}">
                                {{ text('security title') }}
                            </a>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 17L19 12"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 7L19 12"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a>
                                {{text('Enable Email Authentication')}}
                            </a>
                        </div>

                    </div>
                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div class=" col-lg-8 col-md-10 col-sm-12 col-12">
                                    <form >
                                        <div class="row">
                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-row">
                                                    {{--<a class="code" id="get_code_a">
                                                        {{text('Get Code')}}
                                                    </a>--}}
                                                    <label>
                                                        {{ text('Email') }}
                                                    </label>
                                                    <input id="email_input" type="text" value="{{ auth()->guard('clients')->user()->email }}" @if(auth()->guard('clients')->user()->email) disabled @endif/>

                                                </div>

                                                <a style="display: none;color:green" id="message_asd">

                                                </a>

                                            </div>

                                            {{--
                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-row">
                                                    <label>
                                                        {{ text('Email') }}

                                                        {{text('verification code')}}
                                                    </label>
                                                    <input type="text" placeholder="E-mail verification code"/>

                                                </div>

                                            </div>--}}

                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                <button type="button" class="dark-button submit" id="get_code_a">
                                                    {{text('change_password submit')}}
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

            // const tag = $(this).text('sending!');
            $("#message_asd").hide();

            $.ajax({
                type: "POST",
                url: "{{ route('request_enable_email') }}",
                data: {"_token": "{{ csrf_token() }}" , "email" : $("#email_input").val()},
                success: function () {
                    $("#message_asd").text('An email sent, please check your inbox!').css('color' , 'green').show();
{{--                    window.location = "{{ route('profile') }}";--}}
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    // tag.text('Error!');
                    $("#message_asd").text('An error has occurred!').css('color' , 'red').show();
                }
            });

        });


    </script>

@endsection
