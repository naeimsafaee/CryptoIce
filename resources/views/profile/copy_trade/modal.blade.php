
<!-- Modal 1-->
<div class="modal fade" id="follow-pay-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{ text('Copy') }}
                <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                     height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="modal-body">
                <div class=" flex-box justify-content-start">
                    <div class="img-box">
                        <img id="avatar_modal" src="assets/photo/Ellipse%2051.png">
                    </div>
                    <div>
                        <h6>
                            <span id="fullname_modal"></span>
                            <span id="username_modal">

                            </span>
                        </h6>
                        <p>
                                <span class="green" id="percent_modal">

                                </span>
                            {{ text('Return') }}
                        </p>
                    </div>
                </div>
                <div class="margin-top flex-box justify-content-between">
                    <div>
                        <h6>
                            {{ text('Pay') }}
                            <span class="price price_modal"></span>
                            {{ text('to copy this Trader') }}
                        </h6>
                        <h6 class="details" id="description">

                        </h6>
                    </div>
                    {{--                        data-dismiss="modal" --}}
                    <a class="dark-button" onclick="handleCheckCopyPay()">
                        {{ text('Pay') }}

                    </a>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
{{--todo:
<div class="modal fade" id="follow-copy-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Copy
                <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                     height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="modal-body">
                <div class=" flex-box justify-content-start">
                    <div class="img-box">
                        <img src="assets/photo/Ellipse%2051.png">
                    </div>
                    <div>
                        <h6>
                            HaniJL
                            <span>
                                Hani Jalili
                            </span>
                        </h6>
                        <p>
                            <span class="green">
                                 90.90%
                            </span>
                            Return (Last 12M)
                        </p>
                    </div>
                </div>
                <div class="margin-top flex-box justify-content-between">
                    <div>
                        <h6>
                            Follow
                        </h6>
                        <h6 class="details">
                            You can fallow Hani to see her trades
                        </h6>
                    </div>
                    <a data-dismiss="modal" class="button">
                        Pay
                    </a>

                </div>
                <div class="margin-top flex-box justify-content-between">
                    <div>
                        <h6>
                            Copy
                        </h6>
                        <h6 class="details">
                            You can Copy Hani’s Trade and ...
                        </h6>
                    </div>
                    <a data-dismiss="modal" class="dark-button">
                        Pay
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
--}}
<!-- Modal 3-->
<div class="modal fade" id="API-key-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{ text('Copy') }}

                <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                     height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="modal-body">
                <a data-dismiss="modal" class="back dark-button">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.01025 11.9902H20.0003" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M11.014 17.6289L4.99805 11.9997L11.014 6.37057" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    {{ text('Back') }}
                </a>
                <form class="center-div">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="input-row">
                                <label>
                                    {{ text('Pay') }}
                                    <span class="price price_modal"></span>
                                    {{ text('to copy this Trader') }}
                                </label>
                                {{--<input type="text" class="apiKeyInput" placeholder="vgjhkljhnbvdsdtryuiol;k,mjnbvcxd"/>--}}
                                <div class="error-massage-img flex-box error-massage justify-content-start" id="error_div_api_key" style="display: none">
                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.875 12.4766L15.75 14.3516"
                                              stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M15.75 12.4766L13.875 14.3516"
                                              stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M9.37498 9.05025V6.75" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path
                                                d="M9.37497 11.7539V11.7539C9.30869 11.7539 9.25496 11.8076 9.25496 11.8739C9.25496 11.8744 9.25496 11.8749 9.25497 11.8754V11.8754C9.25536 11.9418 9.30862 11.9957 9.37497 11.9969V11.9969C9.44207 11.9969 9.49647 11.9425 9.49647 11.8754C9.49647 11.8083 9.44207 11.7539 9.37497 11.7539"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        <path
                                                d="M15.4095 10.1418L11.8643 4.05331V4.05331C11.0602 2.67854 9.29389 2.2159 7.91911 3.01996C7.49165 3.26997 7.13577 3.62585 6.88576 4.05331L2.61076 11.3868V11.3868C1.87344 12.6552 2.30397 14.2812 3.57238 15.0185C3.98218 15.2567 4.44826 15.381 4.92226 15.3783H11.652"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                    </svg>
                                    <span id="error_api_key"></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a class="button" onclick="handleSubmitApiKey()">
                                {{ text('change_password submit') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4-->
<div class="modal fade" id="submit-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{ text('Copy') }}
                <svg type="button" class="pop-up-close" data-dismiss="modal" aria-label="Close" width="32"
                     height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6666 10.667L21.3333 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.3333 10.667L10.6666 21.3337" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="modal-body">
                <div class="center-div">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2 class="text-center price" id="title_of_last_modal">

                            </h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="text-center" id="desc_of_last_modal">

                            </p>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a data-dismiss="modal" class="dark-button">
                                {{ text('Done') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>