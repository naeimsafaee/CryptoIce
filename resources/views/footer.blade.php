<section class="footer">
    <footer>
        <div class=" row footer-first-row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                        <h2 class="title">{{ text('footer service title') }}</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-6">
                                {!! menu('service_menu' , 'components.footer_manu') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                        <h2 class="title CryptoICE">Cryptoo ICE</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                {!! menu('Crypto_ICE' , 'components.footer_manu') !!}
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                {!! menu('third_menu' , 'components.footer_manu') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-5 col-md-6 col-sm-12 col-12">
                <h2 class="title">{{ text('footer application') }}</h2>
                <p>
                    {{ text('footer application desc') }}
                </p>
                <div class="flex-box button-row  ">

                    <a>
                        <img src="{{ asset('assets/icon/google-play.svg') }}">
                    </a>

                    <a>
                        <img src="{{ asset('assets/icon/app-store.svg') }}">
                    </a>

                </div>

                <ul class="social-list">

                    @if(setting('social.facebook'))
                        <li class="social-item">
                            <a href="{{ setting('social.facebook') }}" class="social-link">
                                <svg class="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke" d="M9.68401 11.314H14.315" stroke="#323232" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M14.316 7.45508H13.506C12.249 7.45508 11.229 8.47508 11.229 9.73208V10.5421V16.5451"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                    @endif

                    @if(setting('social.twitter'))
                        <li class="social-item">
                            <a href="{{ setting('social.twitter') }}" class="social-link">
                                <svg class="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M18.05 10.7329C18.05 10.3187 17.7142 9.98291 17.3 9.98291C16.8858 9.98291 16.55 10.3187 16.55 10.7329H18.05ZM7.10559 15.0905C6.86124 14.756 6.39201 14.683 6.05755 14.9273C5.72309 15.1717 5.65005 15.6409 5.89441 15.9754L7.10559 15.0905ZM6.38303 14.7921C5.97388 14.8567 5.69458 15.2407 5.75918 15.6499C5.82378 16.059 6.20783 16.3383 6.61697 16.2737L6.38303 14.7921ZM8.3 14.9329L8.53837 15.644C8.78392 15.5617 8.96963 15.3585 9.02961 15.1066C9.08959 14.8547 9.01534 14.5896 8.83322 14.4055L8.3 14.9329ZM7.7 7.73291L8.36062 7.37782C8.23802 7.14975 8.00645 7.00104 7.74805 6.98445C7.48965 6.96786 7.24096 7.08574 7.09021 7.29627L7.7 7.73291ZM11.3 10.7329L11.1227 11.4617C11.3421 11.515 11.5739 11.4667 11.7537 11.3301C11.9335 11.1936 12.0422 10.9832 12.0496 10.7576L11.3 10.7329ZM16.7 8.93291L16.074 9.34601C16.2128 9.55634 16.448 9.68291 16.7 9.68291V8.93291ZM18.5 8.93291L19.124 9.34894C19.2775 9.11879 19.2918 8.82288 19.1613 8.57902C19.0307 8.33515 18.7766 8.18291 18.5 8.18291V8.93291ZM16.676 10.3169C16.4462 10.6615 16.5393 11.1272 16.884 11.3569C17.2286 11.5867 17.6943 11.4936 17.924 11.1489L16.676 10.3169ZM16.55 10.7329C16.55 12.6949 15.9901 14.3039 15.0126 15.4117C14.0454 16.5078 12.6093 17.1829 10.7 17.1829V18.6829C12.9907 18.6829 14.8546 17.858 16.1374 16.4041C17.4099 14.9619 18.05 12.9709 18.05 10.7329H16.55ZM10.7 17.1829C9.64463 17.1829 8.9577 16.9119 8.44749 16.5508C7.91436 16.1735 7.52821 15.6689 7.10559 15.0905L5.89441 15.9754C6.30979 16.5439 6.82364 17.2393 7.58101 17.7752C8.3613 18.3274 9.35537 18.6829 10.7 18.6829V17.1829ZM6.61697 16.2737C6.64335 16.2696 6.66373 16.2649 6.67051 16.2633C6.67992 16.2611 6.68748 16.2591 6.69194 16.258C6.70085 16.2556 6.70799 16.2536 6.71146 16.2525C6.71891 16.2504 6.72537 16.2484 6.72894 16.2473C6.73681 16.2448 6.74542 16.2421 6.75327 16.2396C6.76958 16.2343 6.79143 16.2272 6.81708 16.2187C6.86878 16.2017 6.94084 16.1779 7.02585 16.1496C7.1961 16.093 7.42099 16.0179 7.64489 15.9431C7.86889 15.8682 8.09225 15.7935 8.25959 15.7374C8.34327 15.7094 8.41295 15.6861 8.46172 15.6697C8.4861 15.6615 8.50526 15.6551 8.51832 15.6507C8.52485 15.6486 8.52986 15.6469 8.53324 15.6457C8.53493 15.6452 8.53621 15.6447 8.53707 15.6445C8.5375 15.6443 8.53782 15.6442 8.53804 15.6441C8.53815 15.6441 8.53823 15.6441 8.53828 15.6441C8.53831 15.644 8.53833 15.644 8.53835 15.644C8.53836 15.644 8.53837 15.644 8.3 14.9329C8.06163 14.2218 8.06163 14.2218 8.06161 14.2218C8.0616 14.2218 8.06158 14.2218 8.06155 14.2218C8.0615 14.2218 8.06142 14.2219 8.06131 14.2219C8.0611 14.222 8.06078 14.2221 8.06035 14.2222C8.0595 14.2225 8.05822 14.2229 8.05654 14.2235C8.05318 14.2246 8.04818 14.2263 8.04167 14.2285C8.02863 14.2329 8.00951 14.2393 7.98515 14.2474C7.93645 14.2637 7.86684 14.2871 7.78325 14.3151C7.61606 14.371 7.39299 14.4457 7.16936 14.5205C6.94564 14.5953 6.72171 14.67 6.55268 14.7262C6.46805 14.7543 6.39785 14.7776 6.34852 14.7938C6.32365 14.802 6.30529 14.808 6.29342 14.8118C6.28718 14.8138 6.28471 14.8146 6.28473 14.8146C6.2849 14.8145 6.28561 14.8143 6.28673 14.814C6.28774 14.8136 6.28992 14.813 6.29287 14.8121C6.2952 14.8115 6.30141 14.8097 6.3096 14.8075C6.31369 14.8064 6.32094 14.8045 6.3301 14.8024C6.33662 14.8009 6.35679 14.7962 6.38303 14.7921L6.61697 16.2737ZM8.83322 14.4055C7.09139 12.6445 6.96219 10.0515 8.30979 8.16956L7.09021 7.29627C5.32581 9.76031 5.50061 13.1693 7.76678 15.4603L8.83322 14.4055ZM7.03938 8.088C7.85057 9.59715 9.3813 11.038 11.1227 11.4617L11.4773 10.0042C10.2507 9.70578 9.02543 8.61467 8.36062 7.37782L7.03938 8.088ZM12.0496 10.7576C12.0727 10.0553 12.3194 9.49115 12.6948 9.10762C13.0661 8.72816 13.6041 8.48291 14.3 8.48291V6.98291C13.2289 6.98291 12.2954 7.37116 11.6227 8.05845C10.9541 8.74167 10.5843 9.67756 10.5504 10.7083L12.0496 10.7576ZM14.3 8.48291C14.8045 8.48291 15.1557 8.57852 15.4146 8.71668C15.6718 8.854 15.8839 9.05791 16.074 9.34601L17.326 8.51981C17.0271 8.06691 16.6407 7.67082 16.1209 7.39339C15.6028 7.1168 14.9985 6.98291 14.3 6.98291V8.48291ZM16.7 9.68291H18.5V8.18291H16.7V9.68291ZM17.876 8.51689L16.676 10.3169L17.924 11.1489L19.124 9.34894L17.876 8.51689Z"
                                          fill="#323232"></path>
                                </svg>
                            </a>
                        </li>
                    @endif

                    @if(setting('social.youtube'))
                        <li class="social-item">
                            <a href="{{ setting('social.youtube') }}" class="social-link">
                                <svg class="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.583 6.555C21.354 5.551 20.676 4.759 19.814 4.487C18.255 4 12 4 12 4C12 4 5.748 4 4.186 4.487C3.327 4.755 2.649 5.547 2.417 6.555C2 8.377 2 12.182 2 12.182C2 12.182 2 15.987 2.417 17.809C2.646 18.813 3.324 19.605 4.186 19.877C5.748 20.364 12 20.364 12 20.364C12 20.364 18.255 20.364 19.814 19.877C20.673 19.609 21.351 18.817 21.583 17.809C22 15.987 22 12.182 22 12.182C22 12.182 22 8.377 21.583 6.555Z"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.002 15.1821L15.198 12.1821L10.002 9.18213V15.1821Z" stroke="#323232"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                    @endif

                    @if(setting('social.instagram'))
                        <li class="social-item">
                            <a href="{{ setting('social.instagram') }}" class="social-link">
                                <svg class="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.496 3H16.505C18.987 3 21 5.012 21 7.496V16.505C21 18.987 18.988 21 16.504 21H7.496C5.013 21 3 18.988 3 16.504V7.496C3 5.013 5.012 3 7.496 3V3Z"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M16.949 6.71279C16.763 6.71379 16.612 6.86479 16.612 7.05079C16.612 7.23679 16.764 7.38779 16.95 7.38779C17.136 7.38779 17.287 7.23679 17.287 7.05079C17.288 6.86379 17.136 6.71279 16.949 6.71279"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M14.5456 9.45432C15.9515 10.8602 15.9515 13.1396 14.5456 14.5455C13.1397 15.9514 10.8603 15.9514 9.45444 14.5455C8.04855 13.1396 8.04855 10.8602 9.45444 9.45432C10.8603 8.04843 13.1397 8.04843 14.5456 9.45432"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                    @endif

                    @if(setting('social.linkedin'))
                        <li class="social-item">
                            <a href="{{ setting('social.linkedin') }}" class="social-link">
                                <svg class="img" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="stroke" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.5 3H16.504C18.987 3 21 5.013 21 7.496V16.505C21 18.987 18.987 21 16.504 21H7.496C5.013 21 3 18.987 3 16.504V7.5C3 5.015 5.015 3 7.5 3V3Z"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke" d="M8.12 11.1001V16.5001" stroke="#323232" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M11.719 16.5001V13.3501C11.719 12.1071 12.726 11.1001 13.969 11.1001V11.1001C15.212 11.1001 16.219 12.1071 16.219 13.3501V16.5001"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path class="stroke"
                                          d="M8.11799 7.83799C7.99399 7.83799 7.89299 7.93899 7.89399 8.06299C7.89399 8.18699 7.99499 8.28799 8.11899 8.28799C8.24299 8.28799 8.34399 8.18699 8.34399 8.06299C8.34399 7.93799 8.24299 7.83799 8.11799 7.83799"
                                          stroke="#323232" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                    @endif

                </ul>

            </div>

        </div>

        <div class="Snowflake1">
            <img src="{{ asset('assets/icon/SnowflakeSmall.svg') }}" alt="">
        </div>

        <div class="Snowflake2">
            <img src="{{ asset('assets/icon/Snowflake.svg') }}" alt="">
        </div>

    </footer>

</section>
