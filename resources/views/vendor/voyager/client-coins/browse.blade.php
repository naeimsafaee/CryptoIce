@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="action">
        @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-blue add">
                {{ __('voyager::generic.add_new') }}
            </a>
        @endcan
        @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if(isset($dataType->order_column) && isset($dataType->order_display_column))
                <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-blue">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        @can('delete', app($dataType->model_name))
            @if($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle"
                       data-on="{{ __('voyager::bread.soft_deletes_off') }}"
                       data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan

        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
    <div class="bread">
        @include('voyager::alerts')
        <div class="table-responsive">
            <table id="dataTable" class="table">
                <thead>
                <tr>
                    <th>

                    </th>
                    <th>
                        Coin
                    </th>
                    <th>
                        Amount
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataTypeContent as $data)
                    <tr>
                        <td>

                        </td>
                        <td>
                            @php
                                $coin = \App\Models\CoinPrice::query()->findOrFail($data->coin_id)->coin;
                            @endphp
                            <div style="display: flex">
                                <img style="width: 24px;margin-top: -4px;margin-right: 8px" src="{{ asset('assets/icon/crypto/' .  $coin->symbol . '.svg') }}"/>
                                {{ $coin->coin_name }}
                            </div>
                        </td>
                        <td>
                            <p>{{ $data->amount }}</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
    @endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('voyager::dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function () {

            $('#search-input select').select2({
                minimumResultsForSearch: Infinity
            });


            $('.select_all').on('click', function (e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });
        $(document).on('preInit.dt', function (settings, json) {
            $('div.dataTables_length select').select2();
            $('div.dataTables_length').addClass('form-group').addClass('select');
            $('div.dataTables_length label').addClass('select');
            $('.dataTables_wrapper .dataTables_filter').addClass('form-group').addClass('search');
            $('.dataTables_wrapper .dataTables_filter input[type=search]').attr('placeholder', '{{__('voyager::hotdesk.bread_search')}}');
            $('.table-responsive').addClass('notserverside');
        });
        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
        @php
            $params = [
                's' => $search->value,
                'filter' => $search->filter,
                'key' => $search->key,
                'order_by' => $orderBy,
                'sort_order' => $sortOrder,
            ];
        @endphp
        $(function () {
            $('#show_soft_deletes').change(function () {
                if ($(this).prop('checked')) {
                    $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                } else {
                    $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                }

                $('#redir')[0].click();
            })
        })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function () {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
