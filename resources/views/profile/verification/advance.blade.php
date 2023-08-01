@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="history-row flex-box reference-row justify-content-start">
                            <a href="{{ route('profile') }}">
                                {{ text('Personal verification') }}
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
                                {{ text('Advance setup') }}
                            </a>
                        </div>

                    </div>
                    <div class="advance-setup padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tabs ">
                            <div role="tablist" class="tabs__control">
                                <div class="indicator"></div>
                                <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1"
                                        class="tabs__tab tabs__tab--current">{{ text('Natural person') }}
                                </button>
                                <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2"
                                        class="tabs__tab" tabindex="-1">{{ text('Juridical person') }}
                                </button>
                            </div>
                            <div class="tabs__contents">
                                <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1"
                                     class="tabs__content tabs__content--current">
                                    <div class="row">

                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row">
                                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <form class="basic-info" action="{{ route('advance.store') }}"
                                                          method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="is_natural" value="true"/>
                                                        <div class="row">
                                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Your Address') }}
                                                                    </label>
                                                                    <input name="address" type="text"
                                                                           placeholder="{{ text('Your Address') }}"
                                                                           @error('address') class="error-input"
                                                                           @enderror value="{{ old('address') }}"/>

                                                                    @error('address')
                                                                    <div
                                                                        class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Zip Code') }}
                                                                    </label>
                                                                    <input name="zip_code" type="text"
                                                                           placeholder="{{ text('Zip Code') }}"
                                                                           @error('zip_code') class="error-input"
                                                                           @enderror value="{{ old('zip_code') }}"/>

                                                                    @error('zip_code')
                                                                    <div class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Proof of Address') }}
                                                                    </label>
                                                                    <div class="control-group file-upload">
                                                                        <div class="upload-image text-center">
                                                                            <img
                                                                                src="{{asset('assets/icon/upload.svg')}}">
                                                                            <p>{{ text('Upload your photo here') }}</p>
                                                                            <img class="img" src="" alt="">
                                                                        </div>
                                                                        <div class="controls" style="display: none;">
                                                                            <input type="file" name="proof_of_address"
                                                                                   @error('proof_of_address') class="error-input" @enderror />
                                                                        </div>
                                                                        @error('proof_of_address')
                                                                            <div
                                                                            class="error-massage-img flex-box error-massage justify-content-start">
                                                                            <svg width="18" height="18" viewBox="0 0 18 18"
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
                                <div data-tab-content="2" role="tabpanel" tabindex="0" id="tab-2" class="tabs__content"
                                     hidden>
                                    <div class="row">

                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row">
                                                <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <form class="basic-info" action="{{ route('advance.store') }}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="is_natural" value="false"/>
                                                        <div class="row">
                                                            <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Business Name') }}
                                                                    </label>
                                                                    <input type="text" name="business_name"
                                                                           placeholder="{{ text('Business Name') }}"
                                                                           @error('business_name') class="error-input"
                                                                           @enderror value="{{ old('business_name') }}"/>

                                                                    @error('business_name')
                                                                    <div
                                                                        class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Your Email') }}
                                                                    </label>
                                                                    <input type="text" placeholder="{{ text('Your Email') }}"
                                                                           name="email"
                                                                           @error('email') class="error-input"
                                                                           @enderror value="{{ old('email') }}"/>

                                                                    @error('email')
                                                                    <div
                                                                        class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Business mailing address') }}
                                                                    </label>
                                                                    <input type="text" placeholder="{{ text('Business mailing address') }}"
                                                                           name="business_mailing_address"
                                                                           @error('business_mailing_address') class="error-input"
                                                                           @enderror value="{{ old('business_mailing_address') }}"/>

                                                                    @error('business_mailing_address')
                                                                        <div
                                                                        class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                                                                <div class="input-row">
                                                                    <label>
                                                                        {{ text('Zip Code') }}
                                                                    </label>
                                                                    <input type="text" placeholder="{{ text('Zip Code') }}"
                                                                           name="zip_code"
                                                                           @error('zip_code') class="error-input"
                                                                           @enderror value="{{ old('zip_code') }}"/>

                                                                    @error('zip_code')
                                                                        <div
                                                                        class="error-massage-img flex-box error-massage justify-content-start">
                                                                        <svg width="18" height="18" viewBox="0 0 18 18"
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
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@section('javascript')
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
        $(".upload-image").click(function (event) {
            var previewImg = $(this).children(".img");

            $(this)
                .siblings()
                .children("input")
                .trigger("click");

            $(this)
                .siblings()
                .children("input")
                .change(function () {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var urll = e.target.result;
                        $(previewImg).attr("src", urll);
                        previewImg.parent().css("background", "transparent");
                        previewImg.show();
                        previewImg.siblings("p").hide();
                    };
                    reader.readAsDataURL(this.files[0]);
                });
        });

    </script>
@endsection
