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
                                    <h5 class="m-b-10">Users</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
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

                                @include('backend.layout.session')

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add New User</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data" class="user_form">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Personal Infomation</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input type="text" name="firstname" placeholder="Enter First Name" class="form-control" value="{{old('firstname')}}" required>
                                                                    @if ($errors->has('firstname'))
                                                                        <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control" value="{{old('lastname')}}" required>
                                                                    @if ($errors->has('lastname'))
                                                                        <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Gender</label>
                                                                    <select name="gender" class="form-control uppercase">
                                                                        <option value="male" {{ old('gender') == 'male' ? "selected" : '' }}>Male</option>
                                                                        <option value="female" {{ old('gender') == 'female' ? "selected" : '' }}>Female</option>
                                                                    </select>
                                                                    @if ($errors->has('gender'))
                                                                        <div class="invalid-feedback">{{ $errors->first('gender') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Civil Status</label>
                                                                    <select name="civil_status" class="form-control uppercase">
                                                                        <option value="single" {{ old('civil_status') == 'single' ? "selected" : '' }}>Single</option>
                                                                        <option value="married" {{ old('civil_status') == 'married' ? "selected" : '' }}>Married</option>
                                                                        <option value="anulled" {{ old('civil_status') == 'anulled' ? "selected" : '' }}>Anulled</option>
                                                                        <option value="widowed" {{ old('civil_status') == 'widowed' ? "selected" : '' }}>Widowed</option>
                                                                        <option value="legally_seprated" {{ old('civil_status') == 'legally_seprated' ? "selected" : '' }}>Legally Sseprated</option>
                                                                    </select>
                                                                    @if ($errors->has('civil_status'))
                                                                        <div class="invalid-feedback">{{ $errors->first('civil_status') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Height</label>
                                                                    <input type="number" name="height" placeholder="Enter Height" class="form-control" value="{{old('height')}}">
                                                                    @if ($errors->has('height'))
                                                                        <div class="invalid-feedback">{{ $errors->first('height') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Weight</label>
                                                                    <input type="number" name="weight" placeholder="Enter Weight" class="form-control" value="{{old('weight')}}">
                                                                    @if ($errors->has('weight'))
                                                                        <div class="invalid-feedback">{{ $errors->first('weight') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email (Personal)</label>
                                                                    <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{old('email')}}" required>
                                                                    @if ($errors->has('email'))
                                                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Mobile Number</label>
                                                                    <input type="number" name="mobileno" placeholder="Enter Mobile Number" class="form-control" value="{{old('mobileno')}}">
                                                                    @if ($errors->has('mobileno'))
                                                                        <div class="invalid-feedback">{{ $errors->first('mobileno') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative form-group">
                                                                    <label>Password</label>
                                                                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                                                                    @if ($errors->has('password'))
                                                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Age</label>
                                                                    <input type="number" name="age" placeholder="Enter Age" class="form-control" value="{{old('age')}}">
                                                                    @if ($errors->has('age'))
                                                                        <div class="invalid-feedback">{{ $errors->first('age') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Date of Birth</label>
                                                                    <input type="text" name="dob" id="dob" placeholder="Enter Date of Birth" class="form-control" value="{{old('dob')}}">
                                                                    @if ($errors->has('dob'))
                                                                        <div class="invalid-feedback">{{ $errors->first('dob') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>National ID</label>
                                                                    <input type="text" name="nationalid" placeholder="Enter National ID" class="form-control" value="{{old('nationalid')}}">
                                                                    @if ($errors->has('nationalid'))
                                                                        <div class="invalid-feedback">{{ $errors->first('nationalid') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Place of Birth</label>
                                                                    <input type="text" name="birth_place" placeholder="Enter Place of Birth" class="form-control" value="{{old('birth_place')}}">
                                                                    @if ($errors->has('birth_place'))
                                                                        <div class="invalid-feedback">{{ $errors->first('birth_place') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Home Address</label>
                                                                    <input type="text" name="home_address" placeholder="Enter Home Address" class="form-control" value="{{old('home_address')}}">
                                                                    @if ($errors->has('home_address'))
                                                                        <div class="invalid-feedback">{{ $errors->first('home_address') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Upload Profile photo</label>
                                                                    <input type="file" name="profile_image" placeholder="Enter Place of Birth" class="form-control" accept="image/png, image/jpeg, image/jpg">
                                                                    @if ($errors->has('profile_image'))
                                                                        <div class="invalid-feedback">{{ $errors->first('profile_image') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Employee Details</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Company</label>
                                                                    <select name="company_id" class="form-control uppercase">
                                                                        <option value="">-Select Company-</option>
                                                                        @forelse($companies as $company)
                                                                        <option value="{{$company->id}}" old('company_id') == {{$company->id}} ? 'selected' : ''>{{$company->name}}</option>
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                    @if ($errors->has('company_id'))
                                                                        <div class="invalid-feedback">{{ $errors->first('company_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Department</label>
                                                                    <select name="department_id" class="form-control uppercase">
                                                                        <option value="">-Select Department-</option>
                                                                        @forelse($departments as $department)
                                                                        <option value="{{$department->id}}" old('department_id') == {{$department->id}} ? 'selected' : ''>{{$department->name}}</option>
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                   
                                                                    @if ($errors->has('department_id'))
                                                                        <div class="invalid-feedback">{{ $errors->first('department_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Job Title / Position</label>
                                                                    <select name="job_title_id" class="form-control uppercase">
                                                                        <option value=''>-Select Job Title/Postion-</option>
                                                                    </select>
                                                                    @if ($errors->has('job_title_id'))
                                                                        <div class="invalid-feedback">{{ $errors->first('job_title_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>ID Number</label>
                                                                    <input type="text" name="employeeid" placeholder="Enter ID Number" class="form-control" value="{{old('employeeid')}}" required>
                                                                    @if ($errors->has('employeeid'))
                                                                        <div class="invalid-feedback">{{ $errors->first('employeeid') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email Address (Company)</label>
                                                                    <input type="email" name="company_email" placeholder="Enter Email Address (Company)" class="form-control" value="{{old('company_email')}}">
                                                                    @if ($errors->has('company_email'))
                                                                        <div class="invalid-feedback">{{ $errors->first('company_email') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Leave Group</label>
                                                                    <select name="leave_group_id" class="form-control uppercase">
                                                                        <option value="">-Select Department-</option>
                                                                        @forelse($leave_groups as $leave_group)
                                                                        <option value="{{$leave_group->id}}" old('leave_group_id') == {{$leave_group->id}} ? 'selected' : ''>{{$leave_group->name}}</option>
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                    @if ($errors->has('leave_group_id'))
                                                                        <div class="invalid-feedback">{{ $errors->first('leave_group_id') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="mt-5">Employment Information</h5>
                                                        <hr>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Employment Type</label>
                                                                    <select name="employment_type" class="form-control uppercase">
                                                                        <option value="regular" {{ old('employment_type') == 'regular' ? "selected" : '' }}>Regular</option>
                                                                        <option value="trainee" {{ old('employment_type') == 'trainee' ? "selected" : '' }}>Trainee</option>
                                                                    </select>
                                                                    @if ($errors->has('employment_type'))
                                                                        <div class="invalid-feedback">{{ $errors->first('employment_type') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Employment Status</label>
                                                                    <select name="employment_status" class="form-control uppercase" required>
                                                                        <option value="">-Select Status-</option>
                                                                        <option value="1" {{ old('employment_status') == '1' ? "selected" : '' }}>Active</option>
                                                                        <option value="0" {{ old('employment_status') == '0' ? "selected" : '' }}>Deactive</option>
                                                                    </select>
                                                                    @if ($errors->has('employment_status'))
                                                                        <div class="invalid-feedback">{{ $errors->first('employment_status') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Official Start Date</label>
                                                                    <input type="text" name="start_date" id="start_date" placeholder="Enter Official Start Date" class="form-control" value="{{old('start_date')}}">
                                                                    @if ($errors->has('start_date'))
                                                                        <div class="invalid-feedback">{{ $errors->first('start_date') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Date Regularized</label>
                                                                    <input type="text" name="date_regularized" id="date_regularized" placeholder="Enter Date Regularized" class="form-control" value="{{old('date_regularized')}}">
                                                                    @if ($errors->has('date_regularized'))
                                                                        <div class="invalid-feedback">{{ $errors->first('date_regularized') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>Roles</label>
                                            {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control select2', 'multiple']) !!}
                                            @if ($errors->has('roles'))
                                                <div class="invalid-feedback">{{ $errors->first('roles') }}</div>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Submit</button>
                                         <a href="{{ route('admin.users.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
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
    $('.users').addClass('active');
    $("#mobile-collapse").trigger('click');
    $('#dob, #start_date, #date_regularized').bootstrapMaterialDatePicker
    ({
        time: false,
        clearButton: true,
        // minDate : new Date()
    });

    $("select[name='department_id']").change(function(){
        var department_id = $(this).val();
        var blank_option = "<option value=''>-Select Job Title/Postion-</option>";
        if(department_id == ''){
            $("select[name='department_id']").html(blank_option);
            return false;
        }
        $.ajax({
            type: "POST",
            url: `{{route('get.job_title')}}`,
            data: {
                'department_id' : department_id,
                "_token": "{{ csrf_token() }}",
            },
            dataType: 'json',
            success:function(data){
                if(data.status == 'success'){
                    $("select[name='job_title_id']").html(data.html);
                }else{
                    $("select[name='job_title_id']").html(blank_option);
                }
            }
        });
    });

});

</script>
@endpush