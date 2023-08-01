@extends('index')
@section('content')

    <section class="main">
        <div class="row">
            <div class="padding-items col-lg-6 col-md-6 col-sm-12">
                <div class="row">

                    @if (session('success'))
                        <div class="padding-items col-lg-12 col-md-12 col-sm-12 col-12">
                            <a id="Back-to-exchange" class="flex-box justify-content-between charge-wallet"
                               href="{{ route('home') }}">
                                <h6>
                                    {{ text('contact success') }}
                                </h6>
                                <div class="flex-box">
                                    {{ text('Back to Home') }}
                                </div>
                            </a>
                        </div>
                    @endif


                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-item">
                            {{ text('Contact Us') }}
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form class="form" action="{{ route('contact_us.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Your Name') }}
                                        </label>
                                        <input type="text" placeholder="{{ text('Your Name') }}"
                                               value="{{ old('name') }}"
                                               name="name" @if($errors->get('name')) class="error-input" @endif>
                                        @error('name')
                                        <p class="error-massage">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{ text('Your Email') }}
                                        </label>

                                        <input type="text" placeholder="{{ text('Your Email') }}"
                                               value="{{ old('email') }}"
                                               name="email" @if($errors->get('email')) class="error-input" @endif>
                                        @error('email')
                                        <p class="error-massage">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-row">
                                        <label>
                                            {{text('Your Message')}}
                                        </label>
                                        <textarea placeholder="{{text('Your Message')}}"
                                                  name="text"
                                                  @if($errors->get('text')) class="error-input" @endif>{{ old('text') }}</textarea>

                                        @error('text')
                                        <p class="error-massage">
                                            {{ $message }}
                                        </p>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="dark-button">
                                        {{ text('Send') }}
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <div class="padding-items col-lg-6 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-item">
                            {{ text('Contact Us Title') }}
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h5>
                            {{ text('Contact Us Content') }}
                        </h5>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
