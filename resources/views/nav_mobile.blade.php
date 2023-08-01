<div class="sidebar">
    <nav>
        <svg class="close" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <ul class="nav-list">
            <li>
                <div class="user-profile flex-box">
                    <div class="image-box">
                        @if(auth()->guard('clients')->check())
                            <img src="{{ auth()->guard('clients')->user()->avatar ? Voyager::image(auth()->guard('clients')->user()->avatar) : asset('assets/icon/user.svg') }}">
                        @else
                            <img src="{{ asset('assets/icon/user.svg') }}">
                        @endif
                    </div>
                    <div class="user-content">
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
                <a class="flex-box" >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 15.55H15"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 19.45H20"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>
                        {{ text('header service') }}
                    </p>
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.66666 5.83334L6.99999 8.16668L9.33333 5.83334" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
                        <path d="M15 17L16 15L13.052 13.019L11.109 12.895L10 14L12 17H15Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.813 3.03501C7.189 2.54601 2.546 7.18901 3.035 12.813C3.407 17.092 6.907 20.592 11.186 20.964C16.81 21.453 21.453 16.811 20.964 11.186C20.592 6.90801 17.092 3.40801 12.813 3.03501V3.03501Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.951 7.96101L8 11L9.005 9.00501L13 8.00001L14.182 3.27301" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <p>
                        {{ text('header Learning') }}

                    </p>
                </a>
            </li>
            <li>
                <a class="flex-box" href="{{ route('contact_us.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.856 13.144C9.68602 11.974 8.80402 10.664 8.21802 9.33499C8.09402 9.05399 8.16702 8.72499 8.38402 8.50799L9.20302 7.68999C9.87402 7.01899 9.87402 6.06999 9.28802 5.48399L8.11402 4.30999C7.33302 3.52899 6.06702 3.52899 5.28602 4.30999L4.63402 4.96199C3.89302 5.70299 3.58402 6.77199 3.78402 7.83199C4.27802 10.445 5.79602 13.306 8.24502 15.755C10.694 18.204 13.555 19.722 16.168 20.216C17.228 20.416 18.297 20.107 19.038 19.366L19.689 18.715C20.47 17.934 20.47 16.668 19.689 15.887L18.516 14.714C17.93 14.128 16.98 14.128 16.395 14.714L15.492 15.618C15.275 15.835 14.946 15.908 14.665 15.784C13.336 15.197 12.026 14.314 10.856 13.144V13.144Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


                    <p>
                        {{ text('header contact') }}
                    </p>
                </a>
            </li>
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

            <li>
                <a class="button flex-box">Language Change</a>
                <ul class="nav-dropdown">
                    <li>
                        <a href="{{ $targetUrl_en }}">
                            English
                        </a>
                    </li>
                    <li>
                        <a href="{{ $targetUrl_fr }}">
                            France
                        </a>
                    </li>
                    <li>
                        <a href="{{ $targetUrl_de }}">
                            Germany
                        </a>
                    </li>
                </ul>

            </li>

        </ul>
    </nav>
</div>
