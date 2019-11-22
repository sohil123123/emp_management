@extends('backend.layout.app')

@section('content')
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-xl-6">
                                <div class="card user-card">
                                    <div class="card-block">
                                        <h5 class="f-w-400 m-b-15">Register User</h5>
                                        <h4 class="f-w-300 mb-3">{{$user}}</h4>
                                        <!-- <span class="text-muted"><label class="label theme-bg3 text-white f-12 f-w-400">50%</label>Yearly Increase</span> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card user-card">
                                    <div class="card-block">
                                        <h5 class="f-w-400 m-b-15">Total Admin</h5>
                                        <h4 class="f-w-300 mb-3">{{$admin}}</h4>
                                        <!-- <span class="text-muted"><label class="label theme-bg3 text-white f-12 f-w-400">50%</label>Yearly Increase</span> -->
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-xl-6">
                                <div class="card card-social">
                                    <div class="card-block border-bottom">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col text-center">
                                                <h3>Total Permissions</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row align-items-center justify-content-center card-active">
                                            <div class="col-6">
                                                <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Backend:</span>{{$backend_permission}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width:60%;height:6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Frontend:</span>{{$frontend_permission}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar progress-c-theme2" role="progressbar" style="width:45%;height:6px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-6">
                                <div class="card card-social">
                                    <div class="card-block border-bottom">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col text-center">
                                                <h3>Total Roles</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row align-items-center justify-content-center card-active">
                                            <div class="col-6">
                                                <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Backend:</span>{{$backend_role}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar progress-c-theme" role="progressbar" style="width:60%;height:6px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5">Frontend:</span>{{$frontend_role}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar progress-c-theme2" role="progressbar" style="width:45%;height:6px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
@endsection


@push('js')
<script type="text/javascript">
    $(function(){
        $('.dashboard').addClass('active');
    });
</script>
@endpush