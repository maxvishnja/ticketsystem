@extends($master)



@section('title')
    {{ trans('ticketit::lang.index-title') }}
@stop

@section('content')
    <div class="row">
        @include('ticketit::shared.header')
        @include('ticketit::tickets.index')
    </div>
@stop
@push('styles')
<link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ asset('js/datatables.js') }}"></script>
<script>
    $('#ticketit-table').DataTable({
        aaSorting: [[3, "desc"]],
        processing: false,
        serverSide: true,

        lengthMenu: {{ json_encode($setting->grab('length_menu')) }},
        ajax: '{!! route($setting->grab('main_route').'.data', $complete) !!}',

        language: {
            decimal: "{{ trans('ticketit::lang.table-decimal') }}",
            emptyTable: "{{ trans('ticketit::lang.table-empty') }}",
            info: "{{ trans('ticketit::lang.table-info') }}",
            infoEmpty: "{{ trans('ticketit::lang.table-info-empty') }}",
            infoFiltered: "{{ trans('ticketit::lang.table-info-filtered') }}",
            infoPostFix: "{{ trans('ticketit::lang.table-info-postfix') }}",
            thousands: "{{ trans('ticketit::lang.table-thousands') }}",
            lengthMenu: "{{ trans('ticketit::lang.table-length-menu') }}",
            loadingRecords: "{{ trans('ticketit::lang.table-loading-results') }}",
            processing: "{{ trans('ticketit::lang.table-processing') }}",
            search: "{{ trans('ticketit::lang.table-search') }}",
            zeroRecords: "{{ trans('ticketit::lang.table-zero-records') }}",
            paginate: {
                first: "{{ trans('ticketit::lang.table-paginate-first') }}",
                last: "{{ trans('ticketit::lang.table-paginate-last') }}",
                next: "{{ trans('ticketit::lang.table-paginate-next') }}",
                previous: "{{ trans('ticketit::lang.table-paginate-prev') }}"
            },
            aria: {
                sortAscending: "{{ trans('ticketit::lang.table-aria-sort-asc') }}",
                sortDescending: "{{ trans('ticketit::lang.table-aria-sort-desc') }}"
            },
        },

        columns: [
            {data: 'id', name: 'ticketit.id', width: "6%"},
            {data: 'subject', name: 'subject', width: "16%"},
            {data: 'status', name: 'ticketit_statuses.name', width: "6%"},
            {data: 'updated_at', name: 'ticketit.updated_at', width: "16%", order: "asc"},
            {data: 'agent', name: 'users.last_name', width: "16%"},
                @if( $u->isAgent() || $u->isAdmin() )
            {
                data: 'priority', name: 'ticketit_priorities.name', width: "8%"
            },
            {data: 'owner', name: 'users.last_name', width: "16%"},
            {data: 'category', name: 'ticketit_categories.name', width: "8%"},
                @endif
                @if($u->isAdmin() )
            {
                data: 'action', name: 'ticketit.delete', width: "8%"
            }
            @endif
        ]
    });

    $('body').on('click', '.ticket-destroy', function (e) {
        e.preventDefault();
        var companyId = $(this).data('ticket-id');
        var tr = $(this).closest('tr');
        $.confirm({

            title: '{{ trans('ticketit::lang.confirm-title') }}',
            content: ' ',
            confirmButton: '{{ trans('ticketit::lang.confirm-but-yes') }}',
            cancelButton: '{{ trans('ticketit::lang.confirm-but-no') }}',
            confirm: function () {
                $.ajax({
                    url: '/tickets/' + companyId,
                    type: 'delete',
                    data: {_method: 'delete'},
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
@endpush
