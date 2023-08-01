@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class=" padding-items col-lg-12 col-md-12 col-sm-12">
                <h2 class="title-item">
                    {{ text('services title') }}
                </h2>
            </div>
            <div class="margin-bottom padding-items col-lg-12 col-md-12 col-sm-12">
                <h5 >
                    {{ text('services text') }}
                </h5>
            </div>

            @foreach($services as $service)
                <div class="padding-items col-lg-6 col-md-6 col-sm-12">
                    <a class="flex-box service-item" href="{{ route('service.show' , $service->getTranslatedAttribute('title')) }}">
                        <img src="{{ $service->image ? Voyager::image($service->image) : asset('assets/icon/circle-with-mask.svg') }}">
                        <div class="service-content">
                            <h2>
                                {{ $service->getTranslatedAttribute('title') }}
                            </h2>
                            <p>
                                {{ $service->getTranslatedAttribute('description') }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>

@endsection

@section('javascript')


@endsection
