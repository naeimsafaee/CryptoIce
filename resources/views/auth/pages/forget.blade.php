@extends('auth.index')

@section('scripts')
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <div class="login-blur1" >
                    <img class="star1" src="{{ asset('assets/icon/star.svg') }}">
                    <img class="star2" src="{{ asset('assets/icon/star.svg') }}">
                    <div class="pink">

                    </div>
                    <div class="blue">

                    </div>
                </div>
                <div class="login-blur2" >
                    <img class="star1" src="{{ asset('assets/icon/star.svg') }}">
                    <img class="star2" src="{{ asset('assets/icon/star.svg') }}">
                    <div class="pink">

                    </div>
                    <div class="blue">

                    </div>
                </div>
                <form class="form-list" action="{{ route('forget_password.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1>
                                {{ text('forget password text') }}
                            </h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    {{ text('Email') }}
                                </label>
                                <input name="email" value="{{ old('email') }}" @if($errors->get('email')) class="error-input" @endif type="text" placeholder="{{ text('Email') }}"/>
                                @error('email')
                                    <p class="error-massage">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeVauwdAAAAAIlFPY6PyUEXb5NaL_D9CuJe6d1e"></div>

                        <div class="flex-box justify-content-between margin-top col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="dark-button">
                                {{ text('Reset password') }}
                            </button>
                            <a class="Sign-up" href="{{ route('login') }}">
                                <span class="blue">
                                    {{ text('Account') }}
                                </span>
                            </a>

                        </div>
                        <div class="  margin-top col-lg-12 col-md-12 col-sm-12">
                            <a class="more button" href="{{ route('login') }}">
                                {{ text('Back to Home') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
