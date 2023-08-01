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
                                {{ text('Deposit') }}
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="tabs">
                                        <div role="tablist" class="tabs__control">
                                            <div class="indicator"></div>
                                            <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1"
                                                    class="tabs__tab tabs__tab--current">
                                                {{ text('Crypto') }}</button>
                                            <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2"
                                                    class="tabs__tab" tabindex="-1">
                                                {{ text('Fiat') }}</button>
                                        </div>
                                        <div class="tabs__contents">
                                            <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1" class="tabs__content tabs__content--current">
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="form sell-form" method="POST"
                                                                      action="{{ route('deposit_request') }}">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                                            <div style="margin-top: 0"
                                                                                 class="input-row">
                                                                                <label>
                                                                                    {{ text('Amount to Deposit') }}
                                                                                </label>
                                                                                <div class="position-relative">
                                                                                    <div class="dollar-sign">
                                                                                        $
                                                                                    </div>

                                                                                    <input id="padding-left"
                                                                                           class="padding-left @error('amount') error-input @enderror"
                                                                                           type="text" name="amount"
                                                                                           placeholder="2000"/>

                                                                                    @error('amount')
                                                                                    <div class="error-massage-img flex-box error-massage justify-content-start">
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
                                                                                             width="24" height="23"
                                                                                             viewBox="0 0 24 23"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                    d="M8 9.85059L12 13.5519L16 9.85059"
                                                                                                    stroke-width="1.5"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"/>
                                                                                        </svg>

                                                                                        <a class="selected">
                                                                                            <div class="first-text">
                                                                                                {{ text('Select coin') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="options">
                                                                                        <ul>
                                                                                            @foreach(\App\Models\CoinPrice::all() as $coin_price)
                                                                                                <li>
                                                                                                    <a data-id="{{ $coin_price->id }}"
                                                                                                       data-client="{{ $coin_price->client_coin() }}">
                                                                                                        <span class="Coin flex-box justify-content-start">
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
                                                                                    </div>
                                                                                    <input type="hidden"
                                                                                           id="coin_selected" value="0"
                                                                                           name="coin_price_id"/>
                                                                                    <input type="hidden"
                                                                                           id="selected_network"
                                                                                           value="0" name="network_id"/>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="input-row">
                                                                                <label>
                                                                                    Tx id
                                                                                </label>
                                                                                <input type="text" name="transaction_id"
                                                                                       class="@error('transaction_id') error-input @enderror"
                                                                                       placeholder="Tx id"/>

                                                                                @error('transaction_id')
                                                                                <div class="error-massage-img flex-box error-massage justify-content-start">
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
                                                                        <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                                            <h6 class="price margin">
                                                                                {{text('Total balance')}}:
                                                                                <span id="total_balance"></span>
                                                                            </h6>
                                                                        </div>
                                                                        <div class="  col-lg-12 col-md-12 col-sm-12">
                                                                            <button type="submit" class="dark-button">
                                                                                {{text('Charge')}}
                                                                            </button>
                                                                        </div>
                                                                        <div class="  col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="light-box">
                                                                                <div class="flex-box">
                                                                                    <img src="{{ asset('assets/icon/light.svg') }}">
                                                                                    <h6>
                                                                                        {{text('Deposit notice')}}
                                                                                    </h6>

                                                                                </div>
                                                                                <p>
                                                                                    {{ text('Deposit notice 1') }}
                                                                                </p>
                                                                                <p>
                                                                                    {{ text('Deposit notice 2') }}
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="height: auto" class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                                        <div class="row first-tabs" style="display: none"
                                                             id="network_div">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="price">
                                                                    {{text('Details')}}
                                                                </h6>
                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="first-details-row details-row flex-box justify-content-evenly position-relative"
                                                                     id="networks">
                                                                    <div class="items active">
                                                                        BEP2
                                                                    </div>
                                                                    <div class="items">
                                                                        BEP20
                                                                    </div>
                                                                    <div class="items">
                                                                        ERC20
                                                                    </div>
                                                                    <div class="slider"
                                                                         style="transform: matrix(1, 0, 0, 1, 2, 0);z-index: 0"></div>
                                                                </div>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="details-text">
                                                                    {{ text('Network name') }}
                                                                    <span id="network_name">

                                                                    </span>

                                                                </h6>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h6 class="details-text">
                                                                    {{ text('Average arrival') }}
                                                                    <span id="average_arrival">

                                                                    </span>

                                                                </h6>

                                                            </div>
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="details-row address-row">
                                                                    <h6>
                                                                        {{text('Address')}}
                                                                    </h6>
                                                                    <h6 id="network_address"
                                                                        style="word-break: break-all;">

                                                                    </h6>
                                                                    <div class="flex-box icon-box-row">
                                                                        <a class="icon-box flex-box"
                                                                           onclick="copy_address()">
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
                                                                                <img src="" id="qr_code_img">
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

                                                    </div>
                                                </div>

                                            </div>
                                            <div data-tab-content="2" role="tabpanel" tabindex="0" id="tab-2"
                                                 class="tabs__content" hidden>
                                                <div class="row">

                                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="form sell-form">
                                                                    <div class="row">
                                                                        <div
                                                                                class="position-relative col-lg-12 col-md-12 col-sm-12">
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
                                                                                           placeholder="Amount"/>
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                        <div class=" col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="input-row">
                                                                                <label>
                                                                                    {{ text('Select payment method') }}
                                                                                </label>
                                                                                <a class="payment-item"
                                                                                   data-type="ideal">
                                                                                    <svg width="25" height="25"
                                                                                         viewBox="0 0 25 25" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                                d="M3.00146 7.00216H21.009"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M9.00398 11.0041H6.48193"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M10.0044 17.0078H6.00271C4.34517 17.0078 3.00146 15.6641 3.00146 14.0065V6.0032C3.00146 4.34566 4.34517 3.00195 6.00271 3.00195H18.0077C19.6653 3.00195 21.009 4.34566 21.009 6.0032V9.00445"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0054 12.6055V19.4083C13.0065 20.2921 14.797 21.009 17.007 21.009C19.2171 21.009 21.0076 20.2921 21.0087 19.4083V12.6055"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M21.0076 12.6046C21.0076 13.4884 19.216 14.2052 17.0059 14.2052C14.7958 14.2052 13.0054 13.4884 13.0054 12.6046C13.0054 11.7196 14.7981 11.0039 17.007 11.0039C19.216 11.0039 21.0076 11.7208 21.0087 12.6046"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0059 16.0059C13.0059 16.8897 14.7963 17.6065 17.0064 17.6065C19.2164 17.6065 21.0081 16.8897 21.0081 16.0059"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                    </svg>
                                                                                    iDEAL
                                                                                </a>
                                                                                <a class="payment-item"
                                                                                   data-type="visa">
                                                                                    <svg width="25" height="25"
                                                                                         viewBox="0 0 25 25" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                                d="M3.00146 7.00216H21.009"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M9.00398 11.0041H6.48193"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M10.0044 17.0078H6.00271C4.34517 17.0078 3.00146 15.6641 3.00146 14.0065V6.0032C3.00146 4.34566 4.34517 3.00195 6.00271 3.00195H18.0077C19.6653 3.00195 21.009 4.34566 21.009 6.0032V9.00445"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0054 12.6055V19.4083C13.0065 20.2921 14.797 21.009 17.007 21.009C19.2171 21.009 21.0076 20.2921 21.0087 19.4083V12.6055"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M21.0076 12.6046C21.0076 13.4884 19.216 14.2052 17.0059 14.2052C14.7958 14.2052 13.0054 13.4884 13.0054 12.6046C13.0054 11.7196 14.7981 11.0039 17.007 11.0039C19.216 11.0039 21.0076 11.7208 21.0087 12.6046"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0059 16.0059C13.0059 16.8897 14.7963 17.6065 17.0064 17.6065C19.2164 17.6065 21.0081 16.8897 21.0081 16.0059"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                    </svg>
                                                                                    Bank Card (Visa/Mc)
                                                                                </a>
                                                                                <a class="payment-item"
                                                                                   data-type="sepa_debit">
                                                                                    <svg width="25" height="25"
                                                                                         viewBox="0 0 25 25" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                                d="M3.00146 7.00216H21.009"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M9.00398 11.0041H6.48193"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M10.0044 17.0078H6.00271C4.34517 17.0078 3.00146 15.6641 3.00146 14.0065V6.0032C3.00146 4.34566 4.34517 3.00195 6.00271 3.00195H18.0077C19.6653 3.00195 21.009 4.34566 21.009 6.0032V9.00445"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0054 12.6055V19.4083C13.0065 20.2921 14.797 21.009 17.007 21.009C19.2171 21.009 21.0076 20.2921 21.0087 19.4083V12.6055"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M21.0076 12.6046C21.0076 13.4884 19.216 14.2052 17.0059 14.2052C14.7958 14.2052 13.0054 13.4884 13.0054 12.6046C13.0054 11.7196 14.7981 11.0039 17.007 11.0039C19.216 11.0039 21.0076 11.7208 21.0087 12.6046"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                        <path
                                                                                                d="M13.0059 16.0059C13.0059 16.8897 14.7963 17.6065 17.0064 17.6065C19.2164 17.6065 21.0081 16.8897 21.0081 16.0059"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"/>
                                                                                    </svg>
                                                                                    Bank Transfer(SEPA)
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="  col-lg-12 col-md-12 col-sm-12">
                                                                            <button type="button" class="dark-button">
                                                                                {{text('Charge')}}

                                                                            </button>

                                                                        </div>

                                                                        <div id="payment-element">
                                                                            <!--Stripe.js injects the Payment Element-->
                                                                        </div>


                                                                        <div class="  col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="light-box">
                                                                                <div class="flex-box">
                                                                                    <img src="{{ asset('assets/icon/light.svg') }}">
                                                                                    <h6>
                                                                                        {{ text('Deposit notice') }}
                                                                                    </h6>

                                                                                </div>
                                                                                <p>
                                                                                    {{ text('Deposit notice 1') }}

                                                                                </p>
                                                                                <p>
                                                                                    {{ text('Deposit notice 2') }}

                                                                                </p>
                                                                            </div>

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

    <div style="position: absolute" id="card-element"></div>

@endsection


@section('javascript')
    <script src="https://js.stripe.com/v3/"></script>

    const stripe = Stripe({{ config('constants.STRIPE_PUBLIC_KEY') }});


    <script>

        let networks = [];
        let current_address = "";
        //TOGGLING NESTED ul
        $(".drop-down .selected .selected").click(function () {
            $(".drop-down .options ul").toggle();
            $(".drop-down .selected .drop-arrow").toggleClass("active");

        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function () {
            var text = $(this).html();
            $(".drop-down .selected a ").html(text);
            $(".drop-down .options ul").hide();
            $(".drop-down .selected .drop-arrow").removeClass("active");

            const coin_price_id = $(this).attr("data-id");

            $("#coin_selected").val(coin_price_id)
            $("#total_balance").text($(this).attr("data-client"))

            get_network(coin_price_id);
        });

        function copy_address() {
            copyTextToClipboard(current_address);
        }

        function fallbackCopyTextToClipboard(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;

            // Avoid scrolling to bottom
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.position = "fixed";

            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                console.log('Fallback: Copying text command was ' + msg);
            } catch (err) {
                console.error('Fallback: Oops, unable to copy', err);
            }

            document.body.removeChild(textArea);
        }

        function copyTextToClipboard(text) {
            if (!navigator.clipboard) {
                fallbackCopyTextToClipboard(text);
                return;
            }
            navigator.clipboard.writeText(text).then(function () {
                console.log('Async: Copying to clipboard was successful!');
            }, function (err) {
                console.error('Async: Could not copy text: ', err);
            });
        }

        function get_network(coin_price_id) {

            $("#network_div").fadeIn();

            $.ajax({
                type: "GET",
                url: "{{ route('deposit.index') }}/" + coin_price_id,
                data: {},
                success: function (data) {
                    console.log(data);

                    if (data.data.length > 0) {
                        let template = ``;

                        networks = data.data;

                        for (let i = 0; i < data.data.length; i++) {

                            template += `
                                        <div data-id="${data.data[i].id}" class="items items_networks ${i === 0 ? 'active' : ''}" data-tab-target="#first-items${i + 1}" data-index="${i}">
                                            ${data.data[i].symbol.toUpperCase()}
                                        </div>`

                        }

                        template += `<div class="slider" style="transform: matrix(1, 0, 0, 1, 2, 0);z-index: 0"></div>`

                        $("#networks").html(template);


                        const tabsitems = document.querySelectorAll('.items_networks')
                        // const tabContentsitems = document.querySelectorAll('.first-tabs  [data-tab-content]')

                        tabsitems.forEach(tab => {
                            tab.addEventListener('click', () => {
                                const target = document.querySelector(tab.dataset.tabTarget)
                                // tabContentsitems.forEach(tabContent => {
                                //     tabContent.classList.remove('active')
                                // })
                                tabsitems.forEach(tab => {
                                    tab.classList.remove('active')
                                })
                                tab.classList.add('active')
                                // target.classList.add('active')
                            })
                        });


                        const tabList = document.querySelector(".first-details-row ");
                        const tabs = document.querySelectorAll(".first-details-row .items");
                        const activeTab = document.querySelector(".first-details-row .items.active");
                        const selectionBar = document.querySelector(".first-details-row .slider");

                        const toggleTabClass = (target, elements) => {
                            Array.from(elements).forEach((element) =>
                                element.classList.remove("active")
                            );
                            target.classList.add("active");
                        };

                        const moveTabSelectionBar = (targetTab) => {
                            const rectTargetTab = targetTab.getBoundingClientRect();
                            const rectTabList = tabList.getBoundingClientRect();
                            const selectionBarPosition = rectTargetTab.left - rectTabList.left - 4;

                            selectionBar.style.transform = `matrix(1, 0, 0, 1, ${selectionBarPosition}, 0)`;
                        };

                        Array.from(tabs).forEach((tab) => {
                            tab.addEventListener("click", (event) => {
                                toggleTabClass(event.target, tabs);
                                moveTabSelectionBar(event.target);
                            });
                        });

                        moveTabSelectionBar(activeTab);

                        $("#networks .items").click(function () {

                            select_network($(this).attr('data-index'), $(this).attr('data-id'))

                        });

                        select_network(0, data.data[0].id);
                    } else {

                    }


                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });
        }

        function select_network(index, id) {
            $("#network_name").html(networks[index].name + ` (${networks[index].symbol})`);
            $("#average_arrival").html(networks[index].average_arrival);
            $("#network_address").html(networks[index].address);

            $("#selected_network").val(id);

            const piece = networks[index].coin_name.toLowerCase() + ":" + networks[index].address;

            current_address = networks[index].address;

            $("#qr_code_img").attr('src', "https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=" + piece);
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
