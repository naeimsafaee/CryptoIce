@extends('index')

@section('content')

    <section class="main">
        <div class="row">

            <div class=" padding-items col-lg-12 col-md-12 col-sm-12">
                <form class="form center" action="{{ route('request.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12">
                            <h2 class="title-item">
                                Please fill out the form below to become a trader in CryptooICE platform
                            </h2>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    First Name
                                </label>
                                <input id="firstname" value="{{ old('firstname') }}" name="firstname" type="text" @if($errors->get('firstname')) class="error-input" @endif placeholder="firstname"/>
                                @error('firstname')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                   Last Name
                                </label>
                                <input id="lastname" value="{{ old('lastname') }}" name="lastname" type="text" @if($errors->get('lastname')) class="error-input" @endif placeholder="lastname"/>
                                @error('lastname')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    CryptooICE UserName
                                </label>
                                <input id="username" value="{{ old('username') }}" name="username" type="text" @if($errors->get('username')) class="error-input" @endif placeholder="username"/>
                                @error('username')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    Email
                                </label>
                                <input id="email" value="{{ old('email') }}" name="email" type="text" @if($errors->get('email')) class="error-input" @endif placeholder="email"/>
                                @error('email')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    Twitter Profile Address
                                </label>
                                <input id="address" value="{{ old('address') }}" name="address" type="text" @if($errors->get('address')) class="error-input" @endif placeholder="address"/>
                                @error('address')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    Have you had at least 150 buys or sells on the CryptooICE platform?
                                </label>
                                <input id="min_buy" value="{{ old('min_buy') }}" name="min_buy" type="text" @if($errors->get('min_buy')) class="error-input" @endif placeholder="type yes or no"/>
                                @error('min_buy')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    Do you possess 1 Bitcoin or Equivalent coin value in your wallet?
                                </label>
                                <input id="min_btc" value="{{ old('min_btc') }}" name="min_btc" type="text" @if($errors->get('min_btc')) class="error-input" @endif placeholder="type yes or no"/>
                                @error('min_btc')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        {{--<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    User Name
                                </label>
                                <input value="{{ old('username') }}" name="username" type="text" @if($errors->get('username')) class="error-input" @endif placeholder="{{ text('username') }}"/>
                                @error('username')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                        </div>--}}
                        {{--<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    Email
                                </label>
                                <input value="{{ old('email') }}" name="email" type="text" @if($errors->get('email')) class="error-input" @endif placeholder="{{ text('email') }}"/>
                                @error('email')
                                <p class="error-massage">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                        </div>--}}

                        <div class="margin-top col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="dark-button">
                                Send
                            </button>

                        </div>
                    </div>


                </form>
            </div>
        </div>

    </section>

@endsection

