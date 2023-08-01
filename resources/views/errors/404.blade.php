@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class=" padding-items center col-lg-5 col-md-5 col-sm-6 col-12">
                <img class="error-img" src="{{ asset('assets/icon/error.svg') }}">
                <a href="{{ route('home') }}" class="center-button flex-box dark-button dark-button-without-img">
                    {{ setting('404.text') }}
                </a>
            </div>
        </div>

    </section>

@endsection
