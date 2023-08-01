<div class=" col-lg-4  col-md-4 col-sm-4 col-12">
    <div class="flex-box tools">
        <div class="flex-box">
            {!! $feature->icon !!}
        </div>
        <div class="tools-content">
            <p>
                {{ $feature->getTranslatedAttribute('title') }}
            </p>
            <h6>
                {{ $feature->getTranslatedAttribute('description') }}
            </h6>

        </div>

    </div>

</div>
