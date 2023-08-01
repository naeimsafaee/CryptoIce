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
                <div class="form-list">
                    <div class="row">
                        <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                            <h2 style="margin: 0" class="title-item">
                               {{ text('change_password title') }}
                            </h2>
                        </div>
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="{{ route('forget_password.update' , $id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="put" />
                                <div class="row">
                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            <label>
                                                {{ text('change_password input two') }}
                                            </label>
                                            <input @if($errors->get('password')) class="error-input" @endif type="password" name="password"
                                                   placeholder="New Password" autocomplete="off"/>
                                            @error('password')
                                                <p class="error-massage">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-row">
                                            <label>
                                                {{ text('change_password input three') }}
                                            </label>
                                            <input name="password_confirmation" @if($errors->get('password_confirmation')) class="error-input" @endif type="password" placeholder=" New Password" autocomplete="off"/>
                                            @error('password_confirmation')
                                                <p class="error-massage">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="dark-button submit">
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

@endsection
