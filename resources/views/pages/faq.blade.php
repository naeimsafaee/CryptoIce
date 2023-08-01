@extends('index')
@section('content')
    <section class="main">
        <div class="row">
            <div class=" center padding-items col-lg-8 col-md-10 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-item">
                            {{ text('FAQ') }}
                        </h2>
                    </div>
                    <div class="margin-bottom col-lg-12 col-md-12 col-sm-12">
                        <p style="margin: 0">
                            {{ text('FAQ Title') }}
                        </p>

                    </div>

                    @each('components.faq' , \App\Models\Faq::all() , 'faq')

                </div>
            </div>
        </div>

    </section>
@endsection

@section('javascript')
    <script>
        $('.fag-item .flex-box').click(function () {
            $(this).parent().toggleClass("active");
            $(this).parent().children("p").slideToggle();

        });
    </script>
@endsection
