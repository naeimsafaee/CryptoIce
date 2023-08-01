<div class="padding-items col-lg-3 col-md-4 col-sm-6 col-12">
    <div class="row">

        <div class="padding-items flex-box justify-content-start col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 style="margin: 0" class="title-item">
                Profile
            </h2>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="border-item">
                <div class="flex-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 15.55H15"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 19.45H20"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5>
                        Account
                    </h5>
                </div>
                <div class="line"></div>
                <a href="{{ route('profile_info') }}" class="@if(\Illuminate\Support\Facades\Request::is('profile/info')) active @endif border-item-details flex-box">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z" />
                    </svg>
                    <p>
                        Profile info
                    </p>
                </a>
                <a href="{{ route('change_password.index') }}" class="@if(\Illuminate\Support\Facades\Request::is('change_password')) active @endif border-item-details flex-box" >
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z" />
                    </svg>
                    <p>
                        Change password
                    </p>
                </a>
                <a href="{{ route('security') }}" class="@if(\Illuminate\Support\Facades\Request::is('security')) active @endif border-item-details flex-box">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z" />
                    </svg>
                    <p>
                        Security
                    </p>
                </a>
                {{--<a href="{{ route('verification_list') }}" class="@if(\Illuminate\Support\Facades\Request::is('profile/verification')) active @endif border-item-details flex-box">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z" />
                    </svg>
                    <p>
                        Verification
                    </p>
                </a>--}}
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="border-item">


                <div class="flex-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 15.55H15"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 19.45H20"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5>
                        Service
                    </h5>
                </div>
                <div class="line"></div>

                @foreach(\App\Models\Service::all() as $service)

                    <a href="#" class="border-item-details flex-box">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z" />
                        </svg>
                        <p>
                            {{ $service->getTranslatedAttribute('title') }}
                        </p>
                    </a>

                @endforeach


            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="border-item">
                <div class="flex-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 9.5V6.5C21 5.83696 20.7366 5.20107 20.2678 4.73223C19.7989 4.26339 19.163 4 18.5 4H5.5C4.83696 4 4.20107 4.26339 3.73223 4.73223C3.26339 5.20107 3 5.83696 3 6.5V8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 14.5V17.5C21 18.163 20.7366 18.7989 20.2678 19.2678C19.7989 19.7366 19.163 20 18.5 20H13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12.5996V19.3996C2.00114 20.283 3.79086 20.9996 6 20.9996C8.20914 20.9996 9.99886 20.283 10 19.3996V12.5996"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.99886 12.6C9.99886 13.4834 8.208 14.2 5.99886 14.2C3.78972 14.2 2 13.4834 2 12.6C2 11.7154 3.792 11 6 11C8.208 11 9.99886 11.7166 10 12.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.00049 16C2.00049 16.8834 3.79021 17.6 5.99935 17.6C8.20849 17.6 9.99935 16.8834 9.99935 16"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5 9.5H21C21.2652 9.5 21.5196 9.60536 21.7071 9.79289C21.8946 9.98043 22 10.2348 22 10.5V13.5C22 13.7652 21.8946 14.0196 21.7071 14.2071C21.5196 14.3946 21.2652 14.5 21 14.5H18.5C17.837 14.5 17.2011 14.2366 16.7322 13.7678C16.2634 13.2989 16 12.663 16 12V12C16 11.337 16.2634 10.7011 16.7322 10.2322C17.2011 9.76339 17.837 9.5 18.5 9.5V9.5Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5>
                        Wallet
                    </h5>
                </div>

                <div class="line"></div>
                <p class="grey">
                    Total Balance
                </p>
                <h6 class="text-center price">
                    $ {{ auth()->guard('clients')->user()->wallet }}
                </h6>
                <div class="line"></div>
                <div class="wallet-button-row flex-box">
                    <a class="flex-box" href="{{ route('withdraw.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="black-path" d="M3 7H19C19.5304 7 20.0391 7.21071 20.4142 7.58579C20.7893 7.96086 21 8.46957 21 9V18.5C21 19.163 20.7366 19.7989 20.2678 20.2678C19.7989 20.7366 19.163 21 18.5 21H13"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="black-path"  d="M17 7V6C17 5.46957 16.7893 4.96086 16.4142 4.58579C16.0391 4.21071 15.5304 4 15 4H5.5C4.83696 4 4.20107 4.26339 3.73223 4.73223C3.26339 5.20107 3 5.83696 3 6.5V15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="blue-path" d="M6.5 22.501V15.501" stroke="#3797FD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="blue-path" d="M4.5 20.501L6.5 22.501L8.5 20.501" stroke="#3797FD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="black-path"  d="M17 14H15"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Withdraw
                    </a>
                    <a class="flex-box" href="{{ route('deposit.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="black-path" d="M3 7H19C19.5304 7 20.0391 7.21071 20.4142 7.58579C20.7893 7.96086 21 8.46957 21 9V18.5C21 19.163 20.7366 19.7989 20.2678 20.2678C19.7989 20.7366 19.163 21 18.5 21H13"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="black-path" d="M17 7V6C17 5.46957 16.7893 4.96086 16.4142 4.58579C16.0391 4.21071 15.5304 4 15 4H5.5C4.83696 4 4.20107 4.26339 3.73223 4.73223C3.26339 5.20107 3 5.83696 3 6.5V15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="green-path" d="M6.5 15.5V22.5" stroke="#1DB954" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="green-path" d="M8.5 17.5L6.5 15.5L4.5 17.5" stroke="#1DB954" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="black-path" d="M17 14H15"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Deposit
                    </a>
                </div>
                <a class="flex-box view-all" href="{{ route('transaction') }}">
                    <p>View All Transaction</p>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3691 7.00586H2.62497"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.86664 3.51367L11.376 7.00026L7.86664 10.4868"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="border-item">
                <h5 class=" margin-top text-center">
                    Have an Question?
                </h5>
                <a class="flex-box center-button button white-button" href="{{ route('faq') }}">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.8996 6.414L16.0716 3.586C15.6966 3.211 15.1876 3 14.6576 3H7.4856C6.3806 3 5.4856 3.895 5.4856 5V19C5.4856 20.105 6.3806 21 7.4856 21H17.4856C18.5906 21 19.4856 20.105 19.4856 19V7.828C19.4856 7.298 19.2746 6.789 18.8996 6.414V6.414Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.4856 8H15.4856C14.9336 8 14.4856 7.552 14.4856 7V3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6806 17.9999C15.5256 17.6099 15.2846 17.2589 14.9766 16.9739C14.4546 16.4909 13.7706 16.2219 13.0596 16.2219H11.9116C11.2006 16.2219 10.5156 16.4909 9.99459 16.9739C9.68559 17.2589 9.44559 17.6099 9.29059 17.9999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.6346 11.069C14.2692 11.7036 14.2692 12.7325 13.6346 13.3671C13 14.0017 11.9711 14.0017 11.3365 13.3671C10.7019 12.7325 10.7019 11.7036 11.3365 11.069C11.9711 10.4344 13 10.4344 13.6346 11.069Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>
                        Ask me
                    </p>

                </a>

            </div>
        </div>
    </div>
</div>
