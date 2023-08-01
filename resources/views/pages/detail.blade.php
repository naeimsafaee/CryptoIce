@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class="margin-top center padding-items col-lg-8 col-md-10 col-sm-12">
                <h2 class="title-item">
                    {{ $detail->getTranslatedAttribute('title') }}
                </h2>
            </div>
            <div class=" center padding-items col-lg-8 col-md-10 col-sm-12">

                {!! $detail->getTranslatedAttribute('description') !!}

            </div>
        </div>

    </section>

@endsection

