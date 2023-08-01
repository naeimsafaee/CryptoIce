<section class="nav-bar-container flex-box">
    <div class="nav-bar flex-box">
        <a id="nav-toggle" href="#!">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.25 7.08301H29.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.25 17H29.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.25 26.917H29.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>

        <nav>
            <ul class="nav-list">
                <li>
                    <div class="user-profile flex-box">
                        <a style="margin-right: 0" href="{{ route('profile') }}">
                            <div class="image-box">
                                @if(auth()->guard('clients')->check())
                                    <img src="{{ auth()->guard('clients')->user()->avatar ? Voyager::image(auth()->guard('clients')->user()->avatar) : asset('assets/icon/user.svg') }}">
                                @else
                                    <img src="{{ asset('assets/icon/user.svg') }}">
                                @endif
                            </div>
                        </a>
                        <div class="user-content">
                            <a href="{{ route('profile') }}">
                                @if(auth()->guard('clients')->check())
                                    <h6>
                                        {{ auth()->guard('clients')->user()->username }}
                                    </h6>
                                    <a href="{{ route('profile') }}">
                                        {{ text('header setting') }}
                                    </a>
                                @else
                                    <h6>
                                        {{ text('header account') }}
                                    </h6>
                                    <a href="{{ route('profile') }}">
                                        {{ text('header guest') }}
                                    </a>
                                @endif
                            </a>
                        </div>
                    </div>
                </li>


                @if(auth()->guard('clients')->check())
                    <li>
                        <a class="flex-box" href="{{ route('dashboard') }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                        d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                        d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 15.55H15" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M15 19.45H20" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <p>
                                {{ text('header dashboard') }}
                            </p>

                        </a>
                    </li>
                @endif

                <li>
                    <a class="flex-box" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                    d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                    d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 15.55H15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 19.45H20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>
                            {{ text('header service') }}
                        </p>
                        <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66666 5.83334L6.99999 8.16668L9.33333 5.83334" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('dashboard') }}">{{ text('Exchange') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('copy_trade.index') }}">{{ text('Copy Trading') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('trade' , ['trade' => "BTC_USDT"]) }}">{{ text('Trade') }}</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="flex-box" href="{{ route('blog.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17L16 15L13.052 13.019L11.109 12.895L10 14L12 17H15Z" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                    d="M12.813 3.03501C7.189 2.54601 2.546 7.18901 3.035 12.813C3.407 17.092 6.907 20.592 11.186 20.964C16.81 21.453 21.453 16.811 20.964 11.186C20.592 6.90801 17.092 3.40801 12.813 3.03501V3.03501Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.951 7.96101L8 11L9.005 9.00501L13 8.00001L14.182 3.27301" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>
                            {{ text('header Learning') }}
                        </p>
                    </a>
                </li>
                <li>
                    <a class="flex-box" href="{{ route('contact_us.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M10.856 13.144C9.68602 11.974 8.80402 10.664 8.21802 9.33499C8.09402 9.05399 8.16702 8.72499 8.38402 8.50799L9.20302 7.68999C9.87402 7.01899 9.87402 6.06999 9.28802 5.48399L8.11402 4.30999C7.33302 3.52899 6.06702 3.52899 5.28602 4.30999L4.63402 4.96199C3.89302 5.70299 3.58402 6.77199 3.78402 7.83199C4.27802 10.445 5.79602 13.306 8.24502 15.755C10.694 18.204 13.555 19.722 16.168 20.216C17.228 20.416 18.297 20.107 19.038 19.366L19.689 18.715C20.47 17.934 20.47 16.668 19.689 15.887L18.516 14.714C17.93 14.128 16.98 14.128 16.395 14.714L15.492 15.618C15.275 15.835 14.946 15.908 14.665 15.784C13.336 15.197 12.026 14.314 10.856 13.144V13.144Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>
                            {{ text('header contact') }}
                        </p>
                    </a>
                </li>




            </ul>
        </nav>
        <div class="flex-box ">
            <div class="notif">
                <div class="notif-popup">
                    <div class="triangles">
                        <div class="flex-box justify-content-between">

                            <div class="flex-box">
                                {{ text('header notif') }}
                                @if(auth()->guard('clients')->check() && auth()->guard('clients')->user()->notifications()->count() > 0)
                                    <div class="flex-box">
                                        {{ auth()->guard('clients')->user()->notifications()->count() }}
                                    </div>
                                @endif
                            </div>
                            <svg class="close-popup" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 8L16 16" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 8L8 16" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        @if(auth()->guard('clients')->check() && auth()->guard('clients')->user()->notifications(true)->count() > 0)
                            <div class="seperate">
                                Today
                            </div>
                            <div class="notification flex-box justify-content-between">
                                <div class="img-box">
                                    <img src="assets/icon/notif-circle.svg">
                                    <img class="red-circle" src="assets/icon/red-circle.svg">
                                </div>
                                <div class="content-box">
                                    <p>
                                        Welcome hani! You are now a part of the CryptoICE trading community
                                    </p>
                                    <div>
                                        Welcome hani! You are now a part of the CryptoICE trading community Welcome
                                        hani!
                                        You are now a part of the CryptoICE trading community
                                    </div>

                                </div>
                                <div class="time">
                                    2 min
                                </div>


                            </div>
                            <div class="seperate">
                                Yesterday
                            </div>
                            <div class="notification flex-box justify-content-between">
                                <div class="img-box">
                                    <img src="assets/icon/notif-circle.svg">
                                </div>
                                <div class="content-box">
                                    <p>
                                        Welcome hani! You are now a part of the CryptoICE trading community
                                    </p>
                                    <div>
                                        Welcome hani! You are now a part of the CryptoICE trading community Welcome
                                        hani!
                                        You are now a part of the CryptoICE trading community
                                    </div>

                                </div>
                                <div class="time">
                                    2:50
                                </div>


                            </div>
                            <div class="notification flex-box justify-content-between">
                                <div class="img-box">
                                    <img src="assets/icon/notif-circle.svg">
                                </div>
                                <div class="content-box">
                                    <p>
                                        Welcome hani! You are now a part of the CryptoICE trading community
                                    </p>
                                    <div>
                                        Welcome hani! You are now a part of the CryptoICE trading community Welcome
                                        hani!
                                        You are now a part of the CryptoICE trading community
                                    </div>

                                </div>
                                <div class="time">
                                    2:50
                                </div>


                            </div>
                            <div class="notification flex-box justify-content-between">
                                <div class="img-box">
                                    <img src="assets/icon/notif-circle.svg">
                                </div>
                                <div class="content-box">
                                    <p>
                                        Welcome hani! You are now a part of the CryptoICE trading community
                                    </p>
                                    <div>
                                        Welcome hani! You are now a part of the CryptoICE trading community Welcome
                                        hani!
                                        You are now a part of the CryptoICE trading community
                                    </div>

                                </div>
                                <div class="time">
                                    2:50
                                </div>


                            </div>
                        @else
                            <span>you have no notifications</span>
                        @endif


                    </div>

                </div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M9.51001 18V18.512V18.512C9.51001 19.8861 10.6239 21 11.998 21C11.9987 21 11.9993 21 12 21V21C13.3747 21.0006 14.4895 19.8866 14.49 18.512C14.49 18.5117 14.49 18.5113 14.49 18.511V18"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                            d="M17.947 18V18C19.0808 18 20 17.0808 20 15.947V15.947V15.9471C19.9996 15.3711 19.7709 14.8188 19.364 14.411L18 13.048V9C18 5.68629 15.3137 3 12 3V3C8.68629 3 6 5.68629 6 9V9V13.048L4.636 14.411V14.411C4.22916 14.8187 4.00046 15.371 4 15.947V15.947V15.947C4 17.0808 4.91916 18 6.053 18L17.947 18Z"
                            s stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                @if(auth()->guard('clients')->check() && auth()->guard('clients')->user()->notifications()->count() > 0)
                    <div class="number">
                        <span>
                            {{ auth()->guard('clients')->user()->notifications()->count() }}
                        </span>
                    </div>
                @endif
            </div>

            @php
                $segments = request()->segments();

                if (count($segments) > 0 && $segments[0] == app()->getLocale()) {

                    $segments[0] = 'en';

                    $targetUrl_en = app()->make('url')->to(implode('/', $segments));

                    $segments[0] = 'fr';
                    $targetUrl_fr = app()->make('url')->to(implode('/', $segments));

                    $segments[0] = 'de';
                    $targetUrl_de = app()->make('url')->to(implode('/', $segments));


                } else {

                    $targetUrl_en = app()->make('url')->to("/en");
                    $targetUrl_fr = app()->make('url')->to("/fr");
                    $targetUrl_de = app()->make('url')->to("/de");

                    if(count($segments) > 0){
                        $targetUrl_en .= "/" . implode("/" , $segments);
                        $targetUrl_fr .= "/" . implode("/" , $segments);
                        $targetUrl_de .= "/" . implode("/" , $segments);
                    }
                }
            @endphp

            <div class="Language-button button flex-box" style="width: 110px;">
                {{ text('header change lang') }}
                <ul class="Language-popup">
                    <li>
                        <a href="{{ $targetUrl_en }}">
                            English
                        </a>
                    </li>
                    <li>
                        <a href="{{ $targetUrl_fr }}">
                            Français
                        </a>
                    </li>
                    <li>
                        <a href="{{ $targetUrl_de }}">
                            Deutsch
                        </a>
                    </li>
                </ul>
            </div>
            <a class="logo" href="{{route('home')}}">
                <img src="{{ asset('assets/icon/logo.svg') }}">
            </a>
        </div>
    </div>
</section>
