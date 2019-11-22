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
                                    <h5 class="m-b-10">Companies</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Companies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">

                            <div class="col-xl-12">

                                @include('frontend.layouts.session')

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edit Company</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <form action="{{ route('companies.destroy', [$company->id]) }}" method="post">
                                                <a href="{{ route('companies.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>
                                                <button type="submit" class="btn btn-glow-danger btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather icon-trash-2"></i>Delete</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('companies.update',[$company->id]) }}" method="post" enctype="multipart/form-data" class="company_form">
                                        @csrf
                                        @method('put')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" name="name" placeholder="Enter Company name" class="form-control" value="{{ $company->name }}" required>
                                                        @if ($errors->has('name'))
                                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control uppercase" required>
                                                            <option value="">-Select Status-</option>
                                                            <option value="1" {{ $company->status == '1' ? "selected" : '' }}>Active</option>
                                                            <option value="0" {{ $company->status == '0' ? "selected" : '' }}>Deactive</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Update</button>
                                            <a href="{{ route('companies.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
                                        </form>
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
    $('.companies').addClass('active');

});

</script>
@endpush