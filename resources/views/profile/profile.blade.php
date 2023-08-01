@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            @include('profile.sidebar.profile_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 style="margin: 0" class="title-item">
                            {{ text('Profile Info') }}
                        </h2>
                    </div>
                    <div class=" col-lg-8 col-md-9 col-sm-12 col-12">
                        <form >
                            <div class="row">
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>

                                        </label>
                                        <input type="text" placeholder="{{ text('Profile Name') }}">
                                    </div>

                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('ID Card') }}
                                        </label>
                                        <input type="text" placeholder="{{ text('ID Card') }}">

                                    </div>

                                </div>
                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Upload ID Card') }}
                                        </label>
                                        <input id="upload-file" type="file" placeholder="ID Card" hidden/>
                                        <label class="upload-file flex-box justify-content-between" for="upload-file">
                                            <div class="file-name">
                                                {{ text('File') }}
                                            </div>
                                            <div>
                                                {{ text('Browse File') }}
                                            </div>
                                        </label>
                                        <div class="upload-progress">
                                            10% Upload
                                        </div>
                                    </div>

                                </div>

                                <div class="padding-items col-lg-12 col-md-12 col-sm-12">
                                    <button type="button" class="dark-button submit">
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
