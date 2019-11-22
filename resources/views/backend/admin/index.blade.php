@extends('backend.layout.app')

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
                                    <h5 class="m-b-10">Admins</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admins</a></li>
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

                                @include('backend.layout.session')

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Admins</h5>

                                        <div class="d-inline-block dropdown float-right">
                                            @can('add_admins')
                                                <a href="{{ route('admin.admins.create') }}" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-plus-circle"></i>Add New Admin</a>
                                            @endcan

                                            @can('delete_admins')
                                                <button class="btn btn-glow-danger btn-danger btn-sm admin_bulk_delete" data-url="{{ route('admin.admins.bulkremove') }}"><i class="feather icon-trash-2"></i>Bulk Delete</button>
                                            @endcan
                                            
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive Recent-Users">
                                            <table class="table table-hover admin_datatable">
                                                <thead>
                                                    <tr>
                                                        @can('delete_admins')
                                                          <th><div class="checkbox checkbox-fill d-inline"><input type="checkbox" name="checkbox-fill-0" id="checkbox-fill-0"><label for="checkbox-fill-0" class="cr"></label></div></th>
                                                        @endcan
                                                        <th>Name</th>
                                                        <th>Role</th>
                                                        <th>Email</th>
                                                        <th>Created On</th>
                                                        @if(auth()->user()->can('edit_admins') || auth()->user()->can('delete_admins'))
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
        $('.admins').addClass('active');

    var oTable = $('.admin_datatable').DataTable({
        processing: false,
        serverSide: true,
        ajax:'{!! route('admin.admins.datatable') !!}',
        columns: [
            @can('delete_admins')
                {data: 'id', sortable: false, orderable: false, searchable: false},
            @endcan
            {data: 'name', name: 'name', sortable: true, orderable: true, searchable: true},
            {data: 'role', name: 'role', sortable: true, orderable: true, searchable: true},
            {data: 'email', name: 'email', sortable: true, orderable: true, searchable: true},
            {data: 'created_at', name: 'created_at', sortable: true, orderable: true, searchable: true},
            @if(auth()->user()->can('edit_admins') || auth()->user()->can('delete_admins'))
                {data: 'action', sortable: false,searchable: false},
            @endif
        ],
        @can('delete_admins')
        columnDefs: [
            {
                targets: 0,
                checkboxes:{
                    selectRow: true
                },
                // 'render': function (data, type, full, meta){
                //     // console.log(full);
                //     if(full.role == 'Admin' || full.role == 'admin'){
                //         return '';
                //     }else{
                //         // return '<input type="checkbox" class="dt-checkboxes">';
                //         return '<div class="checkbox checkbox-fill d-inline"><input type="checkbox" name="checkbox-fill-1" class="dt-checkboxes" id="checkbox-fill-'+full.id+'"><label for="checkbox-fill-'+full.id+'" class="cr"></label></div>';
                //     }
                // }
            }
        ],
        select: {
            style: 'multi', // 'single', 'multi', 'os', 'multi+shift'
            // selector: 'td:first-child',
        },
        @endcan

        @if(!auth()->user()->can('edit_admins') && !auth()->user()->can('delete_admins'))
            order: [[3, 'desc']],
        @elseif(auth()->user()->can('edit_admins') && auth()->user()->can('delete_admins'))
            order: [[4, 'desc']],
        @elseif(auth()->user()->can('edit_admins'))
            order: [[3, 'desc']],
        @elseif(auth()->user()->can('delete_admins'))
            order: [[4, 'desc']],
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

    // oTable.on('select.dt deselect.dt', function (e, dt, type, indexes){
    //     var countSelectedRows = oTable.rows( { selected: true } ).count();
    //     var countItems = oTable.rows().count();

    //     if (countItems > 0) {
    //     if (countSelectedRows == countItems){
    //             $('thead .selectall-checkbox input[type="checkbox"]', this).prop('checked', true);
    //     } else {
    //             $('thead .selectall-checkbox input[type="checkbox"]', this).prop('checked', false);
    //     }
    //     }

    //     if (e.type === 'select') {
    //         $('.selectall-checkbox input[type="checkbox"]', oTable.rows({ selected: true }).nodes()).prop('checked', true);
    //     } else {
    //         $('.selectall-checkbox input[type="checkbox"]', oTable.rows({ selected: false }).nodes()).prop('checked', false);
    //     }
    // });

    // // When clicking on "thead .selectall-checkbox", trigger click on checkbox in that cell.
    // oTable.on('click', 'thead .selectall-checkbox', function() {
    //     // console.log('aa');
    //     $('input[type="checkbox"]', this).trigger('click');
    // });


    // // When clicking on the checkbox in "thead .selectall-checkbox", define the actions.
    // oTable.on('click', 'thead .selectall-checkbox input[type="checkbox"]', function(e) {
    //     if (this.checked) {
    //         oTable.rows().select();
    //     } else {
    //         oTable.rows().deselect();
    //     }
          
    //     e.stopPropagation();
    // });


    $(document.body).on('click','.admin_bulk_delete',function(){
        var me = $(this);
        var id = [];
        var rows_selected = oTable.column(0).checkboxes.selected();
        // console.log(rows_selected);
        //id = rows_selected.join(",").split(",");
        $.each(rows_selected, function(index, rowId){
            id.push(rowId);
        });
        bulkDelete(me, '.admin_datatable', id);
    });

    });
</script>
@endpush