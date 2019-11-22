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
                                        <h5>Edit Admin</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <form action="{{ route('admin.admins.destroy', [$admin->id]) }}" method="post">
                                                <a href="{{ route('admin.admins.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>
                                                <button type="submit" class="btn btn-glow-danger btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather icon-trash-2"></i>Delete</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.admins.update',[$admin->id]) }}" method="post" enctype="multipart/form-data" class="admin_form">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" placeholder="Enter Name" class="form-control" value="{{ $admin->name }}" required>
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{ $admin->email }}" required>
                                                    @if ($errors->has('email'))
                                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                                    @if ($errors->has('password'))
                                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Roles</label>
                                            {!! Form::select('roles[]', $roles, isset($admin) ? $admin->roles->pluck('id')->toArray() : null,  ['class' => 'form-control select2', 'multiple']) !!}
                                            @if ($errors->has('roles'))
                                                <div class="invalid-feedback">{{ $errors->first('roles') }}</div>
                                            @endif
                                        </div>

                                        <!-- Permissions -->
                                        <div class="form-group">
                                            @if(isset($admin))
                                                @include('backend.shared._permissions', ['closed' => 'true', 'model' => $admin ])
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Update</button>
                                        <a href="{{ route('admin.admins.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
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
});
</script>
@endpush