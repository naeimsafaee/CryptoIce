@extends('index')

@section('content')
    <section class="main">
        <div class="row">
            @include('profile.sidebar.dashboard_sidebar')
            <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                <div class="row">
                    <div class="padding-items  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="flex-box justify-content-between ">
                            <h2 style="margin: 0" class="title-item">
                                {{ $title }}
                            </h2>
                        </div>
                    </div>
                    <div class="  col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">

                            @each('components.copy_trade' , $sort_trader , 'trader')

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
@endsection


@section('modal')

    @include('profile.copy_trade.modal')

@endsection

@section('javascript')
    <script>
        let TraderId = -1;

        function handleGetCopyId(event) {
            TraderId = $(event.target).data('id');

            $("#avatar_modal").attr('src', $(event.target).data('avatar'));
            $("#fullname_modal").text($(event.target).data('name'));
            $("#username_modal").text($(event.target).data('username'));
            $("#percent_modal").text($(event.target).data('percent') + "%");
            $(".price_modal").text($(event.target).data('price') + "$");
            $("#description").text($(event.target).data('description'));

            $("#title_of_last_modal").text("you copied " + $(event.target).data('username'));
            $("#desc_of_last_modal").text($(event.target).data('description'));

        }

        function handleCheckCopyPay() {

            event.preventDefault();
            jQuery.noConflict();
            $('#follow-pay-popup').modal('toggle');
            $('#API-key-popup').modal('show');
        }

        function handleSubmitApiKey() {
            // let apiKeyIn = $('.apiKeyInput').removeClass('error-input').val();
            $("#error_api_key").text();
            $("#error_div_api_key").hide();

           /* if (apiKeyIn.length === 0) {
                $('.apiKeyInput').addClass('error-input');
                $("#error_api_key").text('please enter your api key');
                $("#error_div_api_key").show();
                return;
            }*/

            $.ajax({
                type: "POST",
                url: "{{ route('copy_trade.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "trader_id": TraderId,
                    "api_key": "a",
                },
                success: function (data) {
                    event.preventDefault();
                    jQuery.noConflict();
                    $('#API-key-popup').modal('hide');
                    $('#submit-popup').modal('show');
                },
                error: function (err) {

                    console.log(err);

                    $('.apiKeyInput').addClass('error-input');
                    $("#error_api_key").text(err.responseText.replaceAll('"', ""));
                    $("#error_div_api_key").show();
                }
            });

        }
    </script>
@endsection
