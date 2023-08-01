@extends('index')

@section('content')

    <section class="main">
        <div class="row">

            @include('profile.sidebar.profile_sidebar')

            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                @if($errors)
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="error-item flex-box justify-content-between">
                            <div class="flex-box justify-content-start">
                                <img src="{{ asset('assets/icon/personal-error.svg') }}">
                                {{ $errors }}
                            </div>
                            <img src="{{ asset('assets/icon/personal-close.svg') }}">
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 style="margin: 0" class="title-item">
                            {{ text('Personal verification') }}
                        </h2>
                    </div>
                    <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="border-item">
                            <div class="row">
                                <div
                                    class="margin-top margin-bottom padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                        {{ text('Complete identity') }}
                                    </h6>
                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20 20V19.25C20 16.9028 18.0972 15 15.75 15H8.25C5.90279 15 4 16.9028 4 19.25V20"
                                                    stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <circle cx="12" cy="7" r="4" stroke="#323232" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                {{ text('Create your account') }}
                                            </h6>
                                            <ul class="personal-list">
                                                <li> - {{ text('Provide identity ') }}</li>
                                            </ul>
                                        </div>
                                        @if($client->status >= 0)
                                            <a class="button flex-box Completed" href="{{ route('basic.index') }}">
                                                {{ text('Completed') }}
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a class="button flex-box Completed" href="{{ route('basic.index') }}">
                                                {{ text('Complete') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="line">

                                    </div>
                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M19.9566 22.0043H6.04283C4.93737 22.0043 4.04199 21.1089 4.04199 20.0035V8.99888C4.04199 7.89342 4.93737 6.99805 6.04283 6.99805H19.9566C21.0621 6.99805 21.9575 7.89342 21.9575 8.99888V20.0035C21.9575 21.1089 21.0611 22.0043 19.9566 22.0043Z"
                                                      stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path
                                                    d="M13.0001 9.99805C14.3816 9.99805 15.5011 11.1175 15.5011 12.4991C15.5011 13.8807 14.3816 15.0001 13.0001 15.0001C11.6185 15.0001 10.499 13.8807 10.499 12.4991C10.499 11.1175 11.6185 9.99805 13.0001 9.99805"
                                                    stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M17.5018 19.0026C17.3707 18.6734 17.1677 18.3773 16.9075 18.1362V18.1362C16.4684 17.728 15.8931 17.502 15.2929 17.502C14.2925 17.502 11.7074 17.502 10.707 17.502C10.1067 17.502 9.53248 17.729 9.09229 18.1362V18.1362C8.83219 18.3773 8.6291 18.6734 8.49805 19.0026"
                                                    stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                                <path
                                                    d="M5.77832 6.99734V5.99693C5.77832 4.89147 6.67369 3.99609 7.77915 3.99609H18.2185C19.324 3.99609 20.2193 4.89147 20.2193 5.99693V6.99734"
                                                    stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                {{ text('Intermediate') }}
                                            </h6>
                                            <ul class="personal-list">
                                                <li>- {{ text('Provide identity ') }}</li>
                                                <li>- {{ text('Upload Government ID') }}</li>
                                            </ul>
                                        </div>
                                        @if($client->status >= 1)
                                            <a class="button flex-box Completed">
                                                {{text('Completed')}}
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        @elseif($is_intermediate === 0)
                                            <a class="button flex-box Completed" >
                                                {{ text('Requested') }}
                                            </a>
                                        @elseif($is_intermediate === 1)
                                            <a class="button flex-box Completed">
                                                {{text('Completed')}}
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a class="button flex-box Completed" href="{{ route('intermediate.index') }}">
                                                {{text('Complete')}}
                                            </a>
                                        @endif
                                    </div>

                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="line">

                                    </div>
                                </div>
                                <div class=" padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="security-item flex-box justify-content-between">
                                        <div class="image-box flex-box">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7H8" stroke="#323232" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.13 11H8" stroke="#323232" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M4 19.191V4C4 3.448 4.448 3 5 3H19C19.552 3 20 3.448 20 4V19.191C20 19.563 19.609 19.804 19.276 19.638L17.333 18.666L14.89 19.888C14.749 19.958 14.584 19.958 14.443 19.888L12 18.667L9.557 19.889C9.416 19.959 9.251 19.959 9.11 19.889L6.667 18.667L4.724 19.639C4.391 19.804 4 19.563 4 19.191Z"
                                                      stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M13 15H8" stroke="#323232" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="content-box">
                                            <h6>
                                                {{ text('Advance') }}
                                            </h6>
                                            <ul class="personal-list">
                                                <li>- {{ text('Provide identity ') }}</li>
                                                <li>- {{ text('Upload Government ID') }}</li>
                                                <li>- {{ text('Proof and Address') }}</li>
                                            </ul>

                                        </div>

                                        @if($client->status >= 2)
                                            <a class="button flex-box Completed">
                                                {{text('Completed')}}
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        @elseif($is_advance === 0)
                                            <a class="button flex-box Completed" >
                                                {{text('Requested')}}
                                            </a>
                                        @elseif($is_advance === 1)
                                            <a class="button flex-box Completed">
                                                {{text('Completed')}}

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#323232" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a class="button flex-box Completed" href="{{ route('advance.index') }}">
                                                {{text('Complete')}}
                                            </a>
                                        @endif

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
