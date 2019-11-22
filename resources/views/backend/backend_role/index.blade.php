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
                                    <h5 class="m-b-10">Backend (Admin Panel) Roles</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Backend Roles</a></li>
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
                                        <h5>Roles</h5>

                                        <div class="d-inline-block dropdown float-right">
                                            @can('add_backend-roles')
                                                <a href="{{ route('admin.backend-roles.create') }}" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-plus-circle"></i>Add New Role</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        
                                        @forelse ($roles as $key => $role)
                                            <div class="pt-3">
                                            {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.backend-roles.update',  $role->id ], 'class' => 'm-b']) !!}

                                            @if($role->name === 'admin')
                                                @include('backend.shared._permissions', [
                                                            'title' =>  ucwords(str_replace("_"," ",$role->name)) .' Permissions',
                                                            'options' => ['disabled'], 
                                                            'key' => $key,
                                                            'role_nm' => $role->name,
                                                        ])
                                            @else
                                                @include('backend.shared._permissions', [
                                                            'title' => ucwords(str_replace("_"," ",$role->name)) .' Permissions',
                                                            'key' => $key,
                                                            'role_nm' => $role->name,
                                                        ])
                                                @can('edit_backend-roles')
                                                    <div class="pt-2">{!! Form::submit('Save', ['class' => 'btn btn-glow-primary btn-primary btn-sm']) !!}</div>
                                                @endcan
                                            @endif

                                            {!! Form::close() !!}
                                            </div>
                                        @empty
                                            <p>No Roles defined, please run <code>php artisan db:seed</code> to seed some dummy data.</p>
                                        @endforelse
                                    

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
    $('.roles').addClass('active');
    $('.roles').addClass('pcoded-trigger');
    $('.backend_roles').addClass('active');
});
</script>
@endpush