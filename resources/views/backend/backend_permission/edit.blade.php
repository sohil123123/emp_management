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
                                    <h5 class="m-b-10">Backend (Admin Panel) Permissions</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Backend Permissions</a></li>
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
                                        <h5>Edit Permission</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <form action="{{ route('admin.backend-permissions.destroy', [$permission->id]) }}" method="post">
                                                <a href="{{ route('admin.backend-permissions.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>    
                                                <button type="submit" class="btn btn-glow-danger btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather icon-trash-2"></i>Delete</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.backend-permissions.update', [$permission->id]) }}" method="post" enctype="multipart/form-data" class="backend_permission_form">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" placeholder="Enter Name" class="form-control" value="{{ $permission->name }}" required>
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                        <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Update</button>
                                        <a href="{{ route('admin.backend-permissions.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
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
    $('.permissions').addClass('active');
    $('.permissions').addClass('pcoded-trigger');
    $('.backend_permissions').addClass('active');
});
</script>
@endpush