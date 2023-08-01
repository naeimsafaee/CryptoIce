<div class="padding-items col-lg-6 col-md-6 col-sm-12">
    <a class="flex-box service-item" href="{{ $service->link }}">
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
