@extends('frontend.layouts.app')

@section('content')

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">LeaveType</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">LeaveType</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">

                            <div class="col-xl-12">

                                @include('frontend.layouts.session')

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add New LeaveType</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <a href="{{ route('leave-types.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('leave-types.store') }}" method="post" enctype="multipart/form-data" class="leave_type_form">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Leave Type Name</label>
                                                        <input type="text" name="name" placeholder="Enter Leave Type Name" class="form-control" value="{{old('name')}}" required>
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
                                                            <option value="1" {{ old('status') == '1' ? "selected" : '' }}>Active</option>
                                                            <option value="0" {{ old('status') == '0' ? "selected" : '' }}>Deactive</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" class="form-control" placeholder="Description" required>{!! old('description') !!}</textarea>
                                                        @if ($errors->has('description'))
                                                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Leave Groups</label>
                                                        {!! Form::select('leave_group_ids[]', $leave_groups, null,  ['class' => 'form-control select2', 'multiple']) !!}
                                                        @if ($errors->has('leave_group_ids'))
                                                            <div class="invalid-feedback">{{ $errors->first('leave_group_ids') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Submit</button>
                                            <a href="{{ route('leave-types.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
                                        </form>
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
@endsection

@push('js')
<script type="text/javascript">
$(function(){
    $('.leaves').addClass('active');
    $('.leaves').addClass('pcoded-trigger');
    $('.leave-types').addClass('active');
});
</script>
@endpush