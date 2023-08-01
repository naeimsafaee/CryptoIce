<div class="padding-items col-lg-3 col-md-4 col-sm-6 col-12">
    <div class="row">
        <div class="padding-items flex-box justify-content-start col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 style="margin: 0" class="title-item">
                {{ text('Profile') }}
            </h2>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="border-item">
                <div class="flex-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"
                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z"
                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z"
                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 15.55H15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 19.45H20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h5>
                        {{ text('Account') }}
                    </h5>
                </div>
                <div class="line"></div>
                <a href="{{ route('profile') }}"
                   class=" border-item-details flex-box @if(url()->current() == route('profile')) active @endif">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
                    </svg>
                    <p>
                        {{ text('Profile info') }}
                    </p>
                </a>
                <a href="{{ route('change_password.index') }}"
                   class="border-item-details flex-box @if(url()->current() == route('change_password.index')) active @endif">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
                    </svg>
                    <p>
                        {{ text('Change password') }}
                    </p>
                </a>
                <a href="{{ route('security') }}"
                   class="border-item-details flex-box @if(url()->current() == route('security')) active @endif">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
                    </svg>
                    <p>
                        {{ text('Security') }}
                    </p>
                </a>

                @if(auth()->guard('clients')->user()->is_trader)
                    <a href="{{ route('trader_profile123') }}"
                       class="border-item-details flex-box @if(url()->current() == route('trader_profile123')) active @endif">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
                        </svg>
                        <p>
                            Trader Profile
                        </p>
                    </a>
                @endif

                <a href="{{ route('logout') }}" class="border-item-details flex-box">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
                    </svg>
                    <p>
                        {{ text('Logout') }}
                    </p>
                </a>
            </div>
        </div>

    </div>
</div>
