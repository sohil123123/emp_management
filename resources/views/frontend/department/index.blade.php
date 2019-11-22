@extends('frontend.layouts.app')

@section('content')
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Departments</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Departments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <!-- [ Hover-table ] start -->
                            <div class="col-xl-12">

                                @include('frontend.layouts.session')

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Departments</h5>

                                        <div class="d-inline-block dropdown float-right">
                                            @can('add_departments')
                                                <a href="{{ route('departments.create') }}" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-plus-circle"></i>Add New Department</a>
                                            @endcan

                                            @can('delete_departments')
                                                <button class="btn btn-glow-danger btn-danger btn-sm department_bulk_delete" data-url="{{ route('departments.bulkremove') }}"><i class="feather icon-trash-2"></i>Bulk Delete</button>
                                            @endcan
                                            
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive Recent-Users">
                                            <table class="table table-hover department_datatable">
                                                <thead>
                                                    <tr>
                                                        @can('delete_departments')
                                                        <th>#</th>
                                                        @endcan
                                                        <th>Department</th>
                                                        <th>Status</th>
                                                        <th>Created On</th>
                                                        @if(auth()->user()->can('edit_departments') || auth()->user()->can('delete_departments'))
                                                        <th>Action</th>
                                                        @endif
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Hover-table ] end -->

                            
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- [ Main Content ] end -->
@endsection
@push('js')
<script type="text/javascript">
$(function(){
    $('.departments').addClass('active');
    var oTable = $('.department_datatable').DataTable({
        processing: false,
        serverSide: true,
        ajax:'{!! route('departments.datatable') !!}',
        columns: [
            @can('delete_departments')
            {data: 'id', sortable: false, orderable: false, searchable: false},
            @endcan
            {data: 'name', name: 'name', sortable: true, orderable: true, searchable: true},
            {data: 'status', name: 'status', sortable: true, orderable: true, searchable: true},
            {data: 'created_at', name: 'created_at', sortable: true, orderable: true, searchable: true},
            @if(auth()->user()->can('edit_departments') || auth()->user()->can('delete_departments'))
            {data: 'action', sortable: false,searchable: false},
            @endif
        ],
        @can('delete_departments')
        columnDefs: [
            {
                targets: 0,
                checkboxes:{
                    selectRow: true
                }
            }
        ],
        select: {
            style: 'multi'
        },
        @endcan

        @if(!auth()->user()->can('edit_departments') && !auth()->user()->can('delete_departments'))
            order: [[2, 'desc']],
        @elseif(auth()->user()->can('edit_departments') && auth()->user()->can('delete_departments'))
            order: [[3, 'desc']],
        @elseif(auth()->user()->can('edit_departments'))
            order: [[2, 'desc']],
        @elseif(auth()->user()->can('delete_departments'))
            order: [[3, 'desc']],
        @endif
       
        "pagingType": "full_numbers",
        "language": {
            // "emptyTable": "No fees",
            "search": '<span>Filter:</span> _INPUT_',
            "lengthMenu": '<span>Show:</span> _MENU_',
            "searchPlaceholder": "Search..."
            // "paginate": { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        autoWidth: false,
        'fnDrawCallback': function( oSettings ) {
        }
    });
    $(document.body).on('click','.department_bulk_delete',function(){
        var me = $(this);
        var id = [];
        var rows_selected = oTable.column(0).checkboxes.selected();
        //id = rows_selected.join(",").split(",");
        $.each(rows_selected, function(index, rowId){
            id.push(rowId);
        });
        bulkDelete(me, '.department_datatable', id);
    });
});
</script>
@endpush