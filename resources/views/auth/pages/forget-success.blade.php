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
                        <div class="margin col-lg-12 col-md-12 col-sm-12">
                            <svg width="106" height="53" viewBox="0 0 106 53" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect class="path" width="100" height="50" rx="20"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M28.7561 14.5558C30.8306 16.6303 30.8306 19.9937 28.7561 22.0682C26.6817 24.1426 23.3183 24.1426 21.2438 22.0682C19.1694 19.9937 19.1694 16.6303 21.2438 14.5558C23.3183 12.4814 26.6817 12.4814 28.7561 14.5558Z"
                                      fill="#E2EAEC"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M25 27.678C31.072 27.678 37 30.3006 37 34.334V35.6673C37 36.4033 36.4027 37.0006 35.6667 37.0006H14.3333C13.5973 37.0006 13 36.4033 13 35.6673V34.334C13 30.2993 18.928 27.678 25 27.678Z"
                                      fill="#E2EAEC"/>
                                <rect x="43" y="14" width="45" height="7" fill="#E2EAEC"/>
                                <rect x="43" y="23" width="34" height="7" fill="#E2EAEC"/>
                                <rect x="88" y="32" width="18" height="18" rx="8" fill="#FF3A44"/>
                                <path class="path"
                                      d="M97.1016 42.2988C96.8594 42.2988 96.6738 42.2305 96.5449 42.0938C96.4199 41.957 96.3535 41.7617 96.3457 41.5078L96.252 37.4531C96.252 37.4336 96.25 37.4043 96.2461 37.3652C96.2461 37.3223 96.2461 37.293 96.2461 37.2773C96.2461 37.0078 96.3223 36.7969 96.4746 36.6445C96.6309 36.4922 96.8418 36.416 97.1074 36.416C97.3691 36.416 97.5762 36.4922 97.7285 36.6445C97.8809 36.7969 97.957 37.0078 97.957 37.2773C97.957 37.3555 97.9551 37.4141 97.9512 37.4531L97.8633 41.5078C97.8555 41.7617 97.7852 41.957 97.6523 42.0938C97.5234 42.2305 97.3398 42.2988 97.1016 42.2988ZM97.7754 44.8828C97.5918 45.0586 97.3672 45.1465 97.1016 45.1465C96.8359 45.1465 96.6094 45.0586 96.4219 44.8828C96.2383 44.7031 96.1465 44.4844 96.1465 44.2266C96.1465 43.9688 96.2383 43.752 96.4219 43.5762C96.6094 43.3965 96.8359 43.3066 97.1016 43.3066C97.3672 43.3066 97.5918 43.3965 97.7754 43.5762C97.9629 43.752 98.0566 43.9688 98.0566 44.2266C98.0566 44.4844 97.9629 44.7031 97.7754 44.8828Z"/>
                            </svg>
                        </div>
                        <div class="margin col-lg-12 col-md-12 col-sm-12">
                            <h2 class="bold-chid">
                                {{ text('Forget password email has been sent') }}
                            </h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h5 class="grey">
                                An Email containing the verification link has

                            </h5>
                            <h5 class="grey">
                                been sent to your email address at
                            </h5>
                        </div>
                        <div class="margin col-lg-12 col-md-12 col-sm-12">
                            <h2>
                                {{ $client->email }}
                            </h2>
                        </div>
                        <div class="margin-bottom col-lg-12 col-md-12 col-sm-12">
                            <h6 class="grey">
                                please check your email to continue
                            </h6>
                        </div>
                        {{--<div class=" col-lg-12 col-md-12 col-sm-12">
                            <a class="grey">
                                Didn’t recieve the email?
                                <span class="blue">
                                  Resend
                                </span>
                            </a>
                        </div>--}}

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

