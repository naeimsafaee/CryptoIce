
@extends('index')

@section('content')

    <section class="main">
        <div class="row">
             @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="history-row flex-box reference-row justify-content-start">
                            <a href="{{ route('profile') }}">
                                {{ text('Personal verification') }}
                            </a>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 17L19 12" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M14 7L19 12" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <a>
                                {{ text('Intermediate setup') }}
                            </a>
                        </div>

                    </div>
                    <div class=" col-lg-8 col-md-9 col-sm-12 col-12">
                        <form class="basic-info" method="POST" action="{{ route('intermediate.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Passport') }}
                                            <div class="tooltip">
                                                Contrary to popular belief , Lorem Ipsum is not simply random text.
                                            </div>
                                        </label>
                                        <input name="id" type="text" placeholder="{{ text('Passport') }}"
                                               @error('id') class="error-input" @enderror/>
                                        @error('id')
                                        <div class="error-massage-img flex-box error-massage justify-content-start">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.875 12.4766L15.75 14.3516" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.75 12.4766L13.875 14.3516" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.37498 9.05025V6.75" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path
                                                    d="M9.37497 11.7539V11.7539C9.30869 11.7539 9.25496 11.8076 9.25496 11.8739C9.25496 11.8744 9.25496 11.8749 9.25497 11.8754V11.8754C9.25536 11.9418 9.30862 11.9957 9.37497 11.9969V11.9969C9.44207 11.9969 9.49647 11.9425 9.49647 11.8754C9.49647 11.8083 9.44207 11.7539 9.37497 11.7539"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path
                                                    d="M15.4095 10.1418L11.8643 4.05331V4.05331C11.0602 2.67854 9.29389 2.2159 7.91911 3.01996C7.49165 3.26997 7.13577 3.62585 6.88576 4.05331L2.61076 11.3868V11.3868C1.87344 12.6552 2.30397 14.2812 3.57238 15.0185C3.98218 15.2567 4.44826 15.381 4.92226 15.3783H11.652"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Your ID card image') }}
                                        </label>
                                        <div class="control-group file-upload">
                                            <div class="upload-image text-center">
                                                <img src="{{ asset('assets/icon/upload.svg') }}">
                                                <p>{{ text('Upload your photo here') }}</p>
                                                <img class="img" src="" alt="">
                                            </div>
                                            <div class="controls" style="display: none;">
                                                <input type="file" name="id_card_photo"/>
                                            </div>
                                            @error('id_card_photo')
                                            <div class="error-massage-img flex-box error-massage justify-content-start">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.875 12.4766L15.75 14.3516" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M15.75 12.4766L13.875 14.3516" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.37498 9.05025V6.75" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M9.37497 11.7539V11.7539C9.30869 11.7539 9.25496 11.8076 9.25496 11.8739C9.25496 11.8744 9.25496 11.8749 9.25497 11.8754V11.8754C9.25536 11.9418 9.30862 11.9957 9.37497 11.9969V11.9969C9.44207 11.9969 9.49647 11.9425 9.49647 11.8754C9.49647 11.8083 9.44207 11.7539 9.37497 11.7539"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M15.4095 10.1418L11.8643 4.05331V4.05331C11.0602 2.67854 9.29389 2.2159 7.91911 3.01996C7.49165 3.26997 7.13577 3.62585 6.88576 4.05331L2.61076 11.3868V11.3868C1.87344 12.6552 2.30397 14.2812 3.57238 15.0185C3.98218 15.2567 4.44826 15.381 4.92226 15.3783H11.652"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Facial recognition') }}
                                        </label>
                                        <div class="control-group file-upload">
                                            <div class="upload-image text-center">
                                                <img src="{{asset('assets/icon/upload.svg')}}">
                                                <p>U{{ text('Upload your photo here') }}</p>
                                                <img class="img" src="" alt="">
                                            </div>
                                            <div class="controls" style="display: none;">
                                                <input type="file" name="facial_photo"/>
                                            </div>
                                            @error('facial_photo')
                                            <div class="error-massage-img flex-box error-massage justify-content-start">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.875 12.4766L15.75 14.3516" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M15.75 12.4766L13.875 14.3516" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.37498 9.05025V6.75" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path
                                                        d="M9.37497 11.7539V11.7539C9.30869 11.7539 9.25496 11.8076 9.25496 11.8739C9.25496 11.8744 9.25496 11.8749 9.25497 11.8754V11.8754C9.25536 11.9418 9.30862 11.9957 9.37497 11.9969V11.9969C9.44207 11.9969 9.49647 11.9425 9.49647 11.8754C9.49647 11.8083 9.44207 11.7539 9.37497 11.7539"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                    <path
                                                        d="M15.4095 10.1418L11.8643 4.05331V4.05331C11.0602 2.67854 9.29389 2.2159 7.91911 3.01996C7.49165 3.26997 7.13577 3.62585 6.88576 4.05331L2.61076 11.3868V11.3868C1.87344 12.6552 2.30397 14.2812 3.57238 15.0185C3.98218 15.2567 4.44826 15.381 4.92226 15.3783H11.652"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"/>
                                                </svg>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <h6 style="margin: 5px 0 0 0" class="blue padding-items">
                                        <a target="_blank" href="{{ route('detail' , 'intermediate') }}">{{ text('See recognition details') }}</a>
                                    </h6>
                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="dark-button submit">
                                        {{ text('change_password submit') }}

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('javascript')
    <script>
        $(".upload-image").click(function (event) {
            var previewImg = $(this).children(".img");

            $(this)
                .siblings()
                .children("input")
                .trigger("click");

            $(this)
                .siblings()
                .children("input")
                .change(function () {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var urll = e.target.result;
                        $(previewImg).attr("src", urll);
                        previewImg.parent().css("background", "transparent");
                        previewImg.show();
                        previewImg.siblings("p").hide();
                    };
                    reader.readAsDataURL(this.files[0]);
                });
        });

    </script>


@endsection
