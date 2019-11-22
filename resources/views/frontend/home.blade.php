@extends('frontend.layouts.app')

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

                            <div class="col-md-12 col-xl-12">
                                <div class="card user-card">
                                    <div class="card-block">
                                        <h5 class="text-center">Welcome to dashboard</h5>
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
