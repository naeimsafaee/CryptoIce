@extends('auth.index')



@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <div class="login-blur1">
                    <img class="star1" src="{{ asset('assets/icon/star.svg') }}">
                    <img class="star2" src="{{ asset('assets/icon/star.svg') }}">
                    <div class="pink">

                    </div>
                    <div class="blue">

                    </div>
                </div>
                <div class="login-blur2">
                    <img class="star1" src="{{ asset('assets/icon/star.svg') }}">
                    <img class="star2" src="{{ asset('assets/icon/star.svg') }}">
                    <div class="pink">

                    </div>
                    <div class="blue">

                    </div>
                </div>

                <div class="form-list position-relative">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1>
                            Sign up
                        </h1>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <div class="slider" style="@if(old('is_number') === "1") left: 100px; @endif"></div>
                        <li class="nav-item">
                            <a class="nav-link @if(!old('is_number') || old('is_number') === 0) active @endif"
                               id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="home"
                               aria-selected="{{ (!old('is_number') || (old('is_number') === 0)) }}"><i
                                    class="fas fa-home"></i> Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(old('is_number') === "1") active @endif" id="mobile-tab"
                               data-toggle="tab" href="#mobile" role="tab" aria-controls="profile"
                               aria-selected="{{ old('is_number') === "1" }}"><i class="fas fa-id-card"></i> Mobile</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade @if(!old('is_number') || old('is_number') === 0) show active @endif"
                             id="email" role="tabpanel" aria-labelledby="email-tab">

                            <form class="form-list" action="{{ route('register') }}" method="POST">
                                @csrf
                                <input name="is_number" value="0" type="hidden"/>

                                @if($errors->any())
                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="error-item flex-box justify-content-between">
                                            <div class="flex-box justify-content-start">
                                                <img src="{{ asset('assets/icon/personal-error.svg') }}">
                                                {{ $errors->first() }}
                                            </div>
                                            <img src="{{ asset('assets/icon/personal-close.svg') }}">
                                        </div>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            <label>
                                                {{ text('username') }}
                                            </label>
                                            <input value="{{ old('is_number') ? '' : old('username') }}" type="text"
                                                   name="username" placeholder="{{ text('username') }}"/>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            <label>
                                                {{ text('email') }}
                                            </label>
                                            <input value="{{ old('email') }}" type="text"
                                                   name="email" placeholder="{{ text('email') }}"/>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            {{--<a class="blue forget-pass" href="{{ route('forget_password.index') }}">
                                                {{ text('forget password q') }}
                                            </a>--}}
                                            <label>
                                                {{ text('password') }}
                                            </label>
                                            <input type="password" name="password" class="password"
                                                   placeholder="{{ text('password') }}" autocomplete="off"/>

                                            <img class="visibility_icon"
                                                 src="{{ asset('assets/icon/visibility1.png') }}"
                                                 onclick="toggle_icon()"
                                                 style="position: absolute;right: 18px;top: 52px;width: 26px;"/>
                                        </div>

                                    </div>

                                    <div class="g-recaptcha"
                                         data-sitekey="6LeVauwdAAAAAIlFPY6PyUEXb5NaL_D9CuJe6d1e"></div>

                                    <div
                                        class="flex-box justify-content-between margin-top col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="dark-button">
                                            {{ text('sign up text') }}
                                        </button>
                                        <a class="Sign-up" href="{{ route('login') }}">
                                            {{ text('already_have_account') }}
                                            <span class="blue">
                                    {{ text('sign in text') }}
                                </span>
                                        </a>

                                    </div>
                                    <div class="  margin-top col-lg-12 col-md-12 col-sm-12">
                                        <a class="more button" href="{{ route('home') }}">
                                            {{ text('Back to Home') }}
                                        </a>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <div class="tab-pane fade @if(old('is_number') === "1") show active @endif" id="mobile"
                             role="tabpanel" aria-labelledby="mobile-tab">
                            <form class="form-list" action="{{ route('register') }}" method="POST">
                                @csrf
                                <input name="is_number" value="1" type="hidden"/>

                                @if($errors->any())
                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="error-item flex-box justify-content-between">
                                            <div class="flex-box justify-content-start">
                                                <img src="{{ asset('assets/icon/personal-error.svg') }}">
                                                {{ $errors->first() }}
                                            </div>
                                            <img src="{{ asset('assets/icon/personal-close.svg') }}">
                                        </div>
                                    </div>
                                @endif

                                <div class="row input-row input-with-drop-down ">

                                    <div class="row">
                                        <div class=" col-lg-12 col-md-12 col-sm-12">
                                            <label>
                                                Enter Phone number
                                            </label>
                                        </div>
                                        <div class=" col-lg-4 col-md-4 col-sm-4 col-5">
                                            <div class="inter-code drop-down">
                                                <div class="selected">
                                                    <input type="hidden" name="country_code" value="98">
                                                    <svg class="drop-arrow" width="24" height="23" viewBox="0 0 24 23"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 9.85059L12 13.5519L16 9.85059" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <input value="+98" name="country_code" class="selected select-input" />
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
                                        </div>
                                        <div class=" col-lg-8 col-md-8 col-sm-8 col-7">
                                            <input value="{{ old('phone') }}" type="text"
                                                   name="phone" placeholder="Your number"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            <label>
                                                {{ text('username') }}
                                            </label>
                                            <input value="{{ old('is_number') ? '' : old('username') }}" type="text"
                                                   name="username" placeholder="{{ text('username') }}"/>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            {{--<a class="blue forget-pass" href="{{ route('forget_password.index') }}">
                                                {{ text('forget password q') }}
                                            </a>--}}
                                            <label>
                                                {{ text('password') }}
                                            </label>
                                            <input type="password" name="password" class="password"
                                                   placeholder="{{ text('password') }}" autocomplete="off"/>

                                            <img class="visibility_icon"
                                                 src="{{ asset('assets/icon/visibility1.png') }}"
                                                 onclick="toggle_icon()"
                                                 style="position: absolute;right: 18px;top: 52px;width: 26px;"/>

                                        </div>
                                    </div>

                                    <div class="g-recaptcha"
                                         data-sitekey="6LeVauwdAAAAAIlFPY6PyUEXb5NaL_D9CuJe6d1e"></div>

                                    <div
                                        class="flex-box justify-content-between margin-top col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="dark-button">
                                            {{ text('sign up text') }}
                                        </button>
                                        <a class="Sign-up" href="{{ route('register') }}">
                                            {{ text('no account q') }}
                                            <span class="blue">
                                    {{ text('sign in text') }}
                                </span>
                                        </a>

                                    </div>
                                    <div class="  margin-top col-lg-12 col-md-12 col-sm-12">
                                        <a class="more button" href="{{ route('home') }}">
                                            {{ text('Back to Home') }}
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

@endsection

@section('scripts')

    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <script>
        $(".nav-tabs a").click(function () {
            var position = $(this).parent().position();
            var width = $(this).parent().width();
            $(".slider").css({"left": +position.left, "width": width});
        });
        var actWidth = $(".nav-tabs").find(".active").parent("li").width();
        var actPosition = $(".nav-tabs .active").position();
        $(".slider").css({"left": +actPosition.left, "width": actWidth});

        setInputFilter(document.getElementsByName("phone")[0], function (value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });
    </script>

    <script>
        //TOGGLING NESTED ul
        $(".drop-down .selected .select-input").click(function() {
            $(".drop-down .options ul").toggle();
            $(".drop-down .selected .drop-arrow").toggleClass("active");

        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function () {
            var text = $(this).children("span:last-child").html().replace(/\s/g, '');
            $(".drop-down .selected .select-input").val(text)

            $(".drop-down .options ul").hide();
            $(".drop-down .selected .drop-arrow").removeClass("active");
            $('input[name=country_code]').val($(this).find('h5').html().trim())
        });

        // get input field and add 'keyup' event listener
        let searchInput = document.querySelector('.select-input');
        searchInput.addEventListener('keyup', search);

        // get all title
        let titles = document.querySelectorAll('.drop-down .options ul li a');
        let searchTerm = '';
        let tit = '';

        function search(e) {
            // get input fieled value and change it to lower case
            searchTerm = e.target.value.toLowerCase();

            titles.forEach((title) => {
                // navigate to p in the title, get its value and change it to lower case
                tit = title.textContent.toLowerCase();
                // it search term not in the title's title hide the title. otherwise, show it.
                tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
            });
        }

        //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
        $(document).bind('click', function (e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("drop-down")) {
                $(".drop-down .selected .drop-arrow").removeClass("active");
                $(".drop-down .options ul").hide();

            }

        });
    </script>

    <script>

        function toggle_icon() {

            if ($('.visibility_icon').attr('src') == '{{ asset('assets/icon/visibility1.png') }}') {

                $('.visibility_icon').attr('src', '{{ asset('assets/icon/visibility.png') }}')
                $('.password').attr('type' , 'text')

            } else {

                $('.visibility_icon').attr('src', '{{ asset('assets/icon/visibility1.png') }}')
                $('.password').attr('type' , 'password')

            }
        }

    </script>

@endsection
