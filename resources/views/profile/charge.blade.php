@extends('index')
@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="flex-box second-title-item">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.51025 12.4199L19.5003 12.4199" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.514 18.5684L4.49805 12.4303L10.514 6.29224" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <h6>
                                {{text('Charge Wallet')}}
                            </h6>

                        </a>
                    </div>
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item second-border-time">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <form class="form sell-form">
                                                <div class="row">
                                                    <div class="position-relative col-lg-12 col-md-12 col-sm-12">
                                                        <div style="margin-top: 0"  class="input-row">
                                                            <label>
                                                                {{text('Amount to Charge')}}
                                                            </label>
                                                            <div class="position-relative">
                                                                <div class="dollar-sign">
                                                                    $
                                                                </div>

                                                                <input id="padding-left"  value="2000" class="padding-left" type="text" placeholder="User Name"/>
                                                            </div>



                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Crypto code')}}
                                                            </label>
                                                            <input type="text" placeholder="{{text('Crypto code')}}"/>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="input-row">
                                                            <label>
                                                                {{text('Wallet address')}}
                                                            </label>
                                                            <input type="text" placeholder="{{text('Wallet address')}}"/>

                                                        </div>

                                                    </div>
                                                    <div class="second-margin  col-lg-12 col-md-12 col-sm-12">
                                                        <button type="button" class="dark-button">
                                                            {{text('Charge wallet')}}
                                                        </button>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div style="height: auto" class="border-side col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div  class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="price">
                                                {{text('charge wallet title')}}
                                            </h6>
                                        </div>
                                        <div  class=" col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="details-row address-row">
                                                <h6>
                                                    {{ text('Address') }}
                                                </h6>
                                                <h6>
                                                    12w37xt567755n87665789h cf456789
                                                </h6>
                                                <div class="flex-box icon-box-row">

                                                    <a class="icon-box flex-box">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M16 18H18C19.1046 18 20 17.1046 20 16V5C20 3.89543 19.1046 3 18 3H9C7.89543 3 7 3.89543 7 5V7"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3593 9.47041L13.5296 7.6407C13.1194 7.23047 12.563 7 11.9828 7H6C4.89543 7 4 7.89543 4 9V19C4 20.1046 4.89543 21 6 21H14C15.1046 21 16 20.1046 16 19V11.0172C16 10.437 15.7695 9.88065 15.3593 9.47041Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M16 11.5H13C12.1716 11.5 11.5 10.8284 11.5 10V7"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>

                                                    </a>
                                                    <a class="icon-box flex-box">
                                                        <div class="tooltip">
                                                            <img src="assets/icon/qr-code.svg">
                                                        </div>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 6H10V10H6V6Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 14H10V18H6V14Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10H14V6L18 6V10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M16.0354 15.9646C16.0549 15.9842 16.0549 16.0158 16.0354 16.0354C16.0158 16.0549 15.9842 16.0549 15.9646 16.0354C15.9451 16.0158 15.9451 15.9842 15.9646 15.9646C15.9842 15.9451 16.0158 15.9451 16.0354 15.9646"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14.0354 13.9646C14.0549 13.9842 14.0549 14.0158 14.0354 14.0354C14.0158 14.0549 13.9842 14.0549 13.9646 14.0354C13.9451 14.0158 13.9451 13.9842 13.9646 13.9646C13.9842 13.9451 14.0158 13.9451 14.0354 13.9646" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14.0354 17.9646C14.0549 17.9842 14.0549 18.0158 14.0354 18.0354C14.0158 18.0549 13.9842 18.0549 13.9646 18.0354C13.9451 18.0158 13.9451 17.9842 13.9646 17.9646C13.9842 17.9451 14.0158 17.9451 14.0354 17.9646" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M18.0354 17.9646C18.0549 17.9842 18.0549 18.0158 18.0354 18.0354C18.0158 18.0549 17.9842 18.0549 17.9646 18.0354C17.9451 18.0158 17.9451 17.9842 17.9646 17.9646C17.9842 17.9451 18.0158 17.9451 18.0354 17.9646"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M21.5 7.978V4.5C21.5 3.395 20.605 2.5 19.5 2.5H16.022" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M7.978 2.5H4.5C3.395 2.5 2.5 3.395 2.5 4.5V7.978" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.5 16.0215V19.4995C2.5 20.6045 3.395 21.4995 4.5 21.4995H7.978"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M16.022 21.4995H19.5C20.605 21.4995 21.5 20.6045 21.5 19.4995V16.0215" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M18.0354 13.9646C18.0549 13.9842 18.0549 14.0158 18.0354 14.0354C18.0158 14.0549 17.9842 14.0549 17.9646 14.0354C17.9451 14.0158 17.9451 13.9842 17.9646 13.9646C17.9842 13.9451 18.0158 13.9451 18.0354 13.9646"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>


                                                    </a>
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

