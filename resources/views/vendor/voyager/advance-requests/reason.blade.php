@extends('voyager::master')

{{--@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))--}}

@section('page_header')
    <div class="action">

{{--        <a class="btn btn-red btn-danger " href="{{ route('decrease_client_status' , $dataTypeContent->id) }}">--}}


    </div>
{{--    @include('voyager::multilingual.language-selector')--}}
@stop

@section('content')


    <div class="databox">
        <h3>Reason</h3>
        <div class="box">

            <form action="{{ route('decrease_client_status' , request()->id) }}" method="post">
                @csrf
                <textarea required class="form-control" name="reason" rows="5" placeholder="your reason to reject"></textarea>

                <button type="submit" style="margin-top: 20px" class="btn btn-red btn-danger " >
                    <span><i class="voyager-exclamation"></i></span>&nbsp;
                    Reject
                </button>

            </form>

        </div>
    </div>

@stop
