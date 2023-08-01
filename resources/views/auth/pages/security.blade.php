@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            @include('profile.sidebar.profile_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 style="margin: 0" class="title-item">
                            {{ text('security title') }}
                        </h2>
                    </div>
                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div class="margin-top margin-bottom padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                        {{ text('security number') }}
                                        ({{ $number }}/3)
                                    </h6>
                                </div>

                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 21H7C5.89543 21 5 20.1046 5 19V5C5 3.89543 5.89543 3 7 3H15C16.1046 3 17 3.89543 17 5V10"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M13.5 3V5C13.5 5.27614 13.2761 5.5 13 5.5H9C8.72386 5.5 8.5 5.27614 8.5 5V3"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <rect x="13" y="17" width="6" height="4" rx="1.25"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M14.25 17V15.75C14.25 14.7835 15.0335 14 16 14V14C16.9665 14 17.75 14.7835 17.75 15.75V17"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                {{ text('sms auth title') }}
                                            </h6>
                                            <p>
                                                {{ text('sms auth text') }}
                                            </p>

                                        </div>
                                        <a class="button " href="{{ route('show_enable_sms') }}" style="display: flex">
                                            @if($client->sms_auth)
                                                <span>{{ text('security active') }}</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            @else
                                                {{ text('security setup') }}
                                            @endif
                                        </a>

                                    </div>
                                </div>

                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="line">

                                    </div>
                                </div>

                                <div class="margin-bottom padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.71 17V15.71C19.71 14.813 18.945 14 18 14C17.055 14 16.29 14.765 16.29 15.71V17"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M20 21H16C15.448 21 15 20.552 15 20V18C15 17.448 15.448 17 16 17H20C20.552 17 21 17.448 21 18V20C21 20.552 20.552 21 20 21Z"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M11 18.9815H5C3.895 18.9815 3 18.0865 3 16.9815V7.01953C3 5.91453 3.895 5.01953 5 5.01953H19C20.105 5.01953 21 5.91453 21 7.01953V11.0005"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M17 9L12 12L7 9" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                {{ text('email auth title') }}
                                            </h6>
                                            <p>
                                                {{ text('email auth text') }}
                                            </p>

                                        </div>
                                        <a class="button " href="{{ route('show_enable_email') }}" style="display: flex">
                                            @if($client->email_auth)
                                                <span>{{ text('security active') }}</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232"
                                                          stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            @else
                                                {{ text('security setup') }}
                                            @endif
                                        </a>
                                    </div>

                                </div>

                                <div class="margin-bottom padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.71 17V15.71C19.71 14.813 18.945 14 18 14C17.055 14 16.29 14.765 16.29 15.71V17"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M20 21H16C15.448 21 15 20.552 15 20V18C15 17.448 15.448 17 16 17H20C20.552 17 21 17.448 21 18V20C21 20.552 20.552 21 20 21Z"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M11 18.9815H5C3.895 18.9815 3 18.0865 3 16.9815V7.01953C3 5.91453 3.895 5.01953 5 5.01953H19C20.105 5.01953 21 5.91453 21 7.01953V11.0005"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M17 9L12 12L7 9" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                Authenticator
                                            </h6>
                                            <p>
                                                enable your Authenticator to protect your account
                                            </p>

                                        </div>
                                        <a class="button " href="{{ route('show_enable_authenticator') }}" style="display: flex">
                                            @if($client->{"2fa_auth"})
                                                <span>enabled</span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232"
                                                          stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            @else
                                                enable
                                            @endif
                                        </a>
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
