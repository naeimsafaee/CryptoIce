@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6>
                                {{text('Withdraw')}}
                            </h6>
                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="tabs">

                                        <div role="tablist" class="tabs__control">
                                            <div class="indicator"></div>
                                            <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1"
                                                    class="tabs__tab tabs__tab--current">
                                                {{ text('Withdraw') }}</button>
                                            <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2"
                                                    class="tabs__tab" tabindex="-1">
                                                {{ text('Fiat') }}</button>
                                        </div>

                                        <div class="tabs__contents">
                                            <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1"
                                                 class="tabs__content tabs__content--current">
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="form sell-form"
                                                                      action="{{ route('withdraw.store') }}"
                                                                      method="POST">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                                            <div style="margin-top: 0"
                                                                                 class="input-row">
                                                                                <label>
                                                                                    {{text('Amount to Withraw')}}
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <div class="dollar-sign">
                                                                                        $
                                                                                    </div>
                                                                                    <input id="padding-left"
                                                                                           class="padding-left @error('amount') error-input @enderror"
                                                                                           type="text"
                                                                                           placeholder="200"
                                                                                           name="amount"/>

                                                                                    @error('amount')
                                                                                    <div
                                                                                            class="error-massage-img flex-box error-massage justify-content-start">
                                                                                        <svg width="18" height="18"
                                                                                             viewBox="0 0 18 18"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M13.875 12.4766L15.75 14.3516"
                                                                                                  stroke-width="1.5"
                                                                                                  stroke-linecap="round"
                                                                                                  stroke-linejoin="round"/>
                                                                                            <path d="M15.75 12.4766L13.875 14.3516"
                                                                                                  stroke-width="1.5"
                                                                                                  stroke-linecap="round"
                                                                                                  stroke-linejoin="round"/>
                                                                                            <path d="M9.37498 9.05025V6.75"
                                                                                                  stroke-width="1.5"
                                                                                                  stroke-linecap="round"
                                                                                                  stroke-linejoin="round"/>
                                                                                            <path
                                                                                                    d="M9.37497 11.7539V11.7539C9.30869 11.7539 9.25496 11.8076 9.25496 11.8739C9.25496 11.8744 9.25496 11.8749 9.25497 11.8754V11.8754C9.25536 11.9418 9.30862 11.9957 9.37497 11.9969V11.9969C9.44207 11.9969 9.49647 11.9425 9.49647 11.8754C9.49647 11.8083 9.44207 11.7539 9.37497 11.7539"
                                                                                                    stroke-width="1.5"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                            <path
                                                                                                    d="M15.4095 10.1418L11.8643 4.05331V4.05331C11.0602 2.67854 9.29389 2.2159 7.91911 3.01996C7.49165 3.26997 7.13577 3.62585 6.88576 4.05331L2.61076 11.3868V11.3868C1.87344 12.6552 2.30397 14.2812 3.57238 15.0185C3.98218 15.2567 4.44826 15.381 4.92226 15.3783H11.652"
                                                                                                    stroke-width="1.5"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                        </svg>
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                    @enderror
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                        <div class=" col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="input-row">
                                                                                <label>
                                                                                    {{text('Select Coin')}}
                                                                                </label>
                                                                                <div class="drop-down">
                                                                                    <div class="selected">
                                                                                        <svg class="drop-arrow"
                                                                                             width="24"
                                                                                             height="23"
                                                                                             viewBox="0 0 24 23"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M8 9.85059L12 13.5519L16 9.85059"
                                                                                                  stroke-width="1.5"
                                                                                                  stroke-linecap="round"
                                                                                                  stroke-linejoin="round"/>
                                                                                        </svg>

                                                                                        <a class="selected">
                                                                                            <div class="first-text">
                                                                                                {{text('Select Coin')}}
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="options">
                                                                                        <ul>

                                                                                           {{-- <li class="select_coin"
                                                                                                data-id="0">
                                                                                                <a>
                                                                                                    <span class="Coin flex-box justify-content-start">
                    --}}{{--                                                                                    <img style="width: 24px;margin-right: 8px"--}}{{--
                                                                                                        --}}{{--                                                                                         src="{{ asset("assets/icon/crypto/" . $coin_price->coin->symbol . '.svg') }}"--}}{{--
                                                                                                        --}}{{--                                                                                         alt="alt text"/>--}}{{--
                                                                                                        <h6>
                                                                                                            USD
                                                                                                        </h6>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>--}}

                                                                                            @foreach(\App\Models\CoinPrice::all() as $coin_price)
                                                                                                <li class="select_coin"
                                                                                                    data-id="{{ $coin_price->id }}">
                                                                                                    <a>
                                                                                    <span
                                                                                            class="Coin flex-box justify-content-start">
                                                                                        <img style="width: 24px;margin-right: 8px"
                                                                                             src="{{ asset("assets/icon/crypto/" . $coin_price->coin->symbol . '.svg') }}"
                                                                                             alt="alt text"/>
                                                                                        <h6>
                                                                                            {{ strtoupper($coin_price->coin->symbol) }} <span>({{ ucfirst($coin_price->coin->coin_name) }})</span>
                                                                                        </h6>
                                                                                    </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                        <input type="hidden"
                                                                                               id="selected_coin"
                                                                                               name="selected_coin"
                                                                                               value="0"/>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <script>

                                                                            $('.select_coin').click(function () {
                                                                                const id = $(this).attr('data-id');

                                                                                $("#selected_coin").val(id);
                                                                            });

                                                                        </script>

                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="input-row">
                                                                                <label>
                                                                                    {{ text('Crypto code') }}
                                                                                </label>
                                                                                <input type="text" name="address"
                                                                                       placeholder="{{ text('Crypto code') }}"/>

                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="input-row">
                                                                                <label>
                                                                                    {{text('Description')}}
                                                                                </label>
                                                                                <textarea type="text" name="desc"
                                                                                          placeholder="Type your description"></textarea>

                                                                            </div>

                                                                        </div>
                                                                        <div class="second-margin  col-lg-12 col-md-12 col-sm-12">
                                                                            <button type="submit" class="dark-button">
                                                                                {{text('Withdraw')}}
                                                                            </button>
                                                                        </div>
                                                                    </div>


                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="height: auto" class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                                        <h6 class="price">
                                                            {{ text('Withdraw Title') }}
                                                        </h6>
                                                        <p>

                                                            {{ text('Withdraw Description') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-tab-content="2" role="tabpanel" tabindex="0" id="tab-2"
                                                 class="tabs__content" hidden>
                                                <div class="row">

                                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="form sell-form" method="post" action="{{ route('withdraw_fiat') }}">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                                            <div style="margin-top: 0"
                                                                                 class="input-row">
                                                                                <label>
                                                                                    {{ text('Amount to Charge') }}
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <div class="dollar-sign">
                                                                                        $
                                                                                    </div>

                                                                                    <input id="padding-left2"
                                                                                           class="padding-left"
                                                                                           type="text"
                                                                                           placeholder="Amount" name="amount">

                                                                                    @error('amount')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class=" col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="input-row">
                                                                                    <label>
                                                                                        Select Type
                                                                                    </label>
                                                                                    <div class="drop-down">
                                                                                        <div class="selected">
                                                                                            <svg class="drop-arrow"
                                                                                                 width="24"
                                                                                                 height="23"
                                                                                                 viewBox="0 0 24 23"
                                                                                                 fill="none"
                                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M8 9.85059L12 13.5519L16 9.85059"
                                                                                                      stroke-width="1.5"
                                                                                                      stroke-linecap="round"
                                                                                                      stroke-linejoin="round"/>
                                                                                            </svg>
                                                                                            <a class="selected">
                                                                                                <div class="first-text">
                                                                                                    Select Type
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="options">
                                                                                            <ul>

                                                                                                <li class="select_type"
                                                                                                    data-id="SWIFT">
                                                                                                    <a>
                                                                                                        <span class="Coin flex-box justify-content-start">
                                                                                                            <h6>
                                                                                                                SWIFT
                                                                                                            </h6>
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="select_type"
                                                                                                    data-id="local bank account">
                                                                                                    <a>
                                                                                                        <span class="Coin flex-box justify-content-start">
                                                                                                            <h6>
                                                                                                                Local bank account
                                                                                                            </h6>
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <input type="hidden"
                                                                                                   id="selected_type"
                                                                                                   name="selected_type"
                                                                                                   value="SWIFT"/>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                            <script>

                                                                                $('.select_type').click(function () {
                                                                                    const id = $(this).attr('data-id');
                                                                                    if(id == 'SWIFT'){
                                                                                        $('.swift').show()
                                                                                        $('.local_bank').hide()
                                                                                    } else {
                                                                                        $('.swift').hide()
                                                                                        $('.local_bank').show()
                                                                                    }

                                                                                    $("#selected_type").val(id);
                                                                                });

                                                                            </script>

                                                                            <div style="margin-top: 0"
                                                                                 class="input-row">
                                                                                <label>
                                                                                    Full name of the account holder
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="Full name of the account holder" name="fullname">

                                                                                    @error('fullname')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    SWIFT / BIC code
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="SWIFT / BIC code" name="bic_code">
                                                                                    @error('bic_code')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    IBAN / Account Number
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="IBAN / Account Number" name="iban_account_number">
                                                                                    @error('iban_account_number')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    Country
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="Country" name="country">
                                                                                    @error('country')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    City
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="City" name="city">
                                                                                    @error('city')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    Address
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="Address" name="address">
                                                                                    @error('address')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row swift">
                                                                                <label>
                                                                                    Post Code
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="Post Code" name="post_code">
                                                                                    @error('post_code')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row local_bank">
                                                                                <label>
                                                                                    ACH routing number
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="ACH routing number" name="ach_routing">
                                                                                    @error('ach_routing')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div style="margin-top: 0; display: none"
                                                                                 class="input-row local_bank">
                                                                                <label>
                                                                                    Account number
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <input id="padding-left2"
                                                                                           type="text"
                                                                                           placeholder="account number" name="account_number">
                                                                                    @error('account_number')
                                                                                    <span style="color: red">
                                                                                        {{ $message }}
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="  col-lg-12 col-md-12 col-sm-12">
                                                                            <button type="submit" class="dark-button">
                                                                                {{text('Charge')}}

                                                                            </button>

                                                                        </div>

                                                                        <div id="payment-element">
                                                                            <!--Stripe.js injects the Payment Element-->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    {{--<div style="height: auto"
                                                         class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="price">
                                                                    {{ text('Details') }}
                                                                </h6>
                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div
                                                                        class="details-row flex-box justify-content-between position-relative">
                                                                    <div class="items active">
                                                                        BEP2
                                                                    </div>
                                                                    <div class="items">
                                                                        BEP20
                                                                    </div>
                                                                    <div class="items">
                                                                        ERC20
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="details-text">
                                                                    {{ text('Network name') }}
                                                                    <span>
                                                                                            Ethereum (ETH)
                                                                                        </span>

                                                                </h6>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="details-text">
                                                                    {{ text('Average arrival') }}

                                                                    <span>
                                                                                       24 hours
                                                                                        </span>

                                                                </h6>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="details-row address-row">
                                                                    <h6>
                                                                        {{text('Address')}}
                                                                    </h6>
                                                                    <h6>
                                                                    </h6>
                                                                    <div class="flex-box icon-box-row">

                                                                        <a class="icon-box flex-box">
                                                                            <svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                        d="M16 18H18C19.1046 18 20 17.1046 20 16V5C20 3.89543 19.1046 3 18 3H9C7.89543 3 7 3.89543 7 5V7"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path fill-rule="evenodd"
                                                                                      clip-rule="evenodd"
                                                                                      d="M15.3593 9.47041L13.5296 7.6407C13.1194 7.23047 12.563 7 11.9828 7H6C4.89543 7 4 7.89543 4 9V19C4 20.1046 4.89543 21 6 21H14C15.1046 21 16 20.1046 16 19V11.0172C16 10.437 15.7695 9.88065 15.3593 9.47041Z"
                                                                                      stroke-width="1.5"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M16 11.5H13C12.1716 11.5 11.5 10.8284 11.5 10V7"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                            </svg>

                                                                        </a>
                                                                        <a class="icon-box flex-box">
                                                                            <div class="tooltip">
                                                                                <img src="assets/icon/qr-code.svg">
                                                                            </div>
                                                                            <svg width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                      clip-rule="evenodd"
                                                                                      d="M6 6H10V10H6V6Z"
                                                                                      stroke-width="1.5"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"/>
                                                                                <path fill-rule="evenodd"
                                                                                      clip-rule="evenodd"
                                                                                      d="M6 14H10V18H6V14Z"
                                                                                      stroke-width="1.5"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"/>
                                                                                <path fill-rule="evenodd"
                                                                                      clip-rule="evenodd"
                                                                                      d="M18 10H14V6L18 6V10Z"
                                                                                      stroke-width="1.5"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M16.0354 15.9646C16.0549 15.9842 16.0549 16.0158 16.0354 16.0354C16.0158 16.0549 15.9842 16.0549 15.9646 16.0354C15.9451 16.0158 15.9451 15.9842 15.9646 15.9646C15.9842 15.9451 16.0158 15.9451 16.0354 15.9646"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M14.0354 13.9646C14.0549 13.9842 14.0549 14.0158 14.0354 14.0354C14.0158 14.0549 13.9842 14.0549 13.9646 14.0354C13.9451 14.0158 13.9451 13.9842 13.9646 13.9646C13.9842 13.9451 14.0158 13.9451 14.0354 13.9646"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M14.0354 17.9646C14.0549 17.9842 14.0549 18.0158 14.0354 18.0354C14.0158 18.0549 13.9842 18.0549 13.9646 18.0354C13.9451 18.0158 13.9451 17.9842 13.9646 17.9646C13.9842 17.9451 14.0158 17.9451 14.0354 17.9646"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M18.0354 17.9646C18.0549 17.9842 18.0549 18.0158 18.0354 18.0354C18.0158 18.0549 17.9842 18.0549 17.9646 18.0354C17.9451 18.0158 17.9451 17.9842 17.9646 17.9646C17.9842 17.9451 18.0158 17.9451 18.0354 17.9646"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M21.5 7.978V4.5C21.5 3.395 20.605 2.5 19.5 2.5H16.022"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M7.978 2.5H4.5C3.395 2.5 2.5 3.395 2.5 4.5V7.978"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M2.5 16.0215V19.4995C2.5 20.6045 3.395 21.4995 4.5 21.4995H7.978"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M16.022 21.4995H19.5C20.605 21.4995 21.5 20.6045 21.5 19.4995V16.0215"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                                <path
                                                                                        d="M18.0354 13.9646C18.0549 13.9842 18.0549 14.0158 18.0354 14.0354C18.0158 14.0549 17.9842 14.0549 17.9646 14.0354C17.9451 14.0158 17.9451 13.9842 17.9646 13.9646C17.9842 13.9451 18.0158 13.9451 18.0354 13.9646"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"/>
                                                                            </svg>


                                                                        </a>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
            console.log(this)
            $(this).parents(".drop-down").find(".selected a").html(text);
            // $(".drop-down .selected a ").html(text);
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

    <script>
        // Get all tabs
        var tabs_items = document.querySelectorAll(".tabs");

        // Loop through all tabs
        tabs_items.forEach(function (tabs) {
            // Set variable
            var controls = tabs.querySelector(".tabs__control");
            var tab = controls.querySelectorAll(".tabs__tab");
            var contents = tabs.querySelector(".tabs__contents");
            var content = contents.querySelectorAll(".tabs__content");

            // Loop through all tabs
            tab.forEach(function (item) {
                item.onclick = function (e) {
                    e.preventDefault();

                    // Get clicked tab ID
                    var tabId = item.dataset.tab;

                    /*if (tabId.toString() === "1") {
                        $('#network_div').fadeIn();
                    } else
                        $('#network_div').fadeOut();*/

                    // Set current tab
                    tab.forEach(function (item) {
                        if (tabId == item.dataset.tab) {
                            item.classList.add("tabs__tab--current");
                            item.setAttribute('aria-selected', 'true');
                            item.removeAttribute('tabindex', '-1');
                        } else {
                            item.classList.remove("tabs__tab--current");
                            item.setAttribute('aria-selected', 'false');
                            item.setAttribute('tabindex', '-1');
                        }
                    });

                    // Set current content
                    content.forEach(function (item) {
                        if (tabId == item.dataset.tabContent) {
                            item.classList.add("tabs__content--current");
                            item.removeAttribute('hidden', 'hidden');
                        } else {
                            item.classList.remove("tabs__content--current");
                            item.setAttribute('hidden', 'hidden');
                        }
                    });
                };
            });
        });

    </script>
    <script>
        const elements = Array.from(document.querySelectorAll('.tabs__tab '));

        let activeIndex = 0;

        const updateIndex = (newIndex) => {
            elements[activeIndex].classList.remove('active');
            document.body.style.setProperty('--active-index', newIndex);
            elements[newIndex].classList.add('active');
            activeIndex = newIndex;
        };

        const registerEvent = (button, index) => {
            button.addEventListener('click', () => updateIndex(index))
        };

        elements.forEach(registerEvent);
    </script>
    <script>

        let type = "";

        $(".payment-item").click(function () {
            $(".payment-item").removeClass("active");
            $(this).addClass("active");

            type = $(this).attr('data-type');

        });


        $(".dark-button").click(async function () {
            const amount = $("#padding-left2").val();
            if (amount.length === 0 || type === "")
                return;

            $.ajax({
                type: "POST",
                url: "{{ route('deposit.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}", "type": type, "amount": amount
                },
                success: async function (data) {

                    const {clientSecret} = data;

                    elements = stripe.elements({clientSecret});

                    const paymentElement = elements.create("payment");
                    paymentElement.mount("#payment-element");

                    if (type === 'visa') {
                        const {error} = await stripe.confirmPayment({
                            elements,
                            confirmParams: {
                                return_url: '{{ route('callback_api') }}',
                            },
                        });

                        if (error.type === "card_error" || error.type === "validation_error") {
                            return;
                        } else {
                            return;
                        }
                    }


                    window.location = data;
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });

        });


    </script>

@endsection
