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

            @each('components.service', $services , 'service')
        </div>
    </section>

@endsection

@section('javascript')


@endsection
