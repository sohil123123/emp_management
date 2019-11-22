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
                                    <h5 class="m-b-10">Employees</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Employees</a></li>
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
                                        <h5>Edit Employee</h5>
                                        <div class="d-inline-block dropdown float-right">
                                            <form action="{{ route('users.destroy', [$user->id]) }}" method="post">
                                                <a href="{{ route('users.index') }}" class="btn btn-outline-primary btn-sm"><i class="feather icon-chevrons-left"></i>Return</a>
                                                <button type="submit" class="btn btn-glow-danger btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather icon-trash-2"></i>Delete</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('users.update',[$user->id]) }}" method="post" enctype="multipart/form-data" class="user_form">
                                        @csrf
                                        @method('put')
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
                                                                        <input type="text" name="firstname" placeholder="Enter First Name" class="form-control" value="{{ $user->firstname }}" required>
                                                                        @if ($errors->has('firstname'))
                                                                            <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Last Name</label>
                                                                        <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control" value="{{ $user->lastname }}" required>
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
                                                                            <option value="male" {{ $user->gender == 'male' ? "selected" : '' }}>Male</option>
                                                                            <option value="female" {{ $user->gender == 'female' ? "selected" : '' }}>Female</option>
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
                                                                            <option value="single" {{ $user->civil_status == 'single' ? "selected" : '' }}>Single</option>
                                                                            <option value="married" {{ $user->civil_status == 'married' ? "selected" : '' }}>Married</option>
                                                                            <option value="anulled" {{ $user->civil_status == 'anulled' ? "selected" : '' }}>Anulled</option>
                                                                            <option value="widowed" {{ $user->civil_status == 'widowed' ? "selected" : '' }}>Widowed</option>
                                                                            <option value="legally_seprated" {{ $user->civil_status == 'legally_seprated' ? "selected" : '' }}>Legally Sseprated</option>
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
                                                                        <input type="number" name="height" placeholder="Enter Height" class="form-control" value="{{ $user->height }}">
                                                                        @if ($errors->has('height'))
                                                                            <div class="invalid-feedback">{{ $errors->first('height') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Weight</label>
                                                                        <input type="number" name="weight" placeholder="Enter Weight" class="form-control" value="{{ $user->weight }}">
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
                                                                        <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{ $user->email }}" required>
                                                                        @if ($errors->has('email'))
                                                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Mobile Number</label>
                                                                        <input type="number" name="mobileno" placeholder="Enter Mobile Number" class="form-control" value="{{ $user->mobileno }}">
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
                                                                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
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
                                                                        <input type="number" name="age" placeholder="Enter Age" class="form-control" value="{{ $user->age }}">
                                                                        @if ($errors->has('age'))
                                                                            <div class="invalid-feedback">{{ $errors->first('age') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date of Birth</label>
                                                                        <input type="text" name="dob" id="dob" placeholder="Enter Date of Birth" class="form-control" value="{{ $user->dob }}">
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
                                                                        <input type="text" name="nationalid" placeholder="Enter National ID" class="form-control" value="{{ $user->nationalid }}">
                                                                        @if ($errors->has('nationalid'))
                                                                            <div class="invalid-feedback">{{ $errors->first('nationalid') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Place of Birth</label>
                                                                        <input type="text" name="birth_place" placeholder="Enter Place of Birth" class="form-control" value="{{ $user->birth_place }}">
                                                                        @if ($errors->has('birth_place'))
                                                                            <div class="invalid-feedback">{{ $errors->first('birth_place') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Upload Profile photo</label>
                                                                        <input type="file" name="profile_image" placeholder="Enter Place of Birth" class="form-control" accept="image/png, image/jpeg, image/jpg">
                                                                        @if ($errors->has('profile_image'))
                                                                            <div class="invalid-feedback">{{ $errors->first('profile_image') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Home Address</label>
                                                                        <input type="text" name="home_address" placeholder="Enter Home Address" class="form-control" value="{{ $user->home_address }}">
                                                                        @if ($errors->has('home_address'))
                                                                            <div class="invalid-feedback">{{ $errors->first('home_address') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                    @if($user->profile_image == '')
                                                                        <img src="{{asset('/backend/assets/images/no_image.png')}}" alt="" class="img-fluid">
                                                                    @else
                                                                        <img src="{{asset('/storage/frontend/profile_img/')}}/{{$user->profile_image}}" alt="" class="img-fluid" width="100 ">
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
                                                                            <option value="{{$company->id}}" {{$user->company_id == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
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
                                                                            <option value="{{$department->id}}" {{$user->department_id == $department->id ? 'selected' : '' }}>{{$department->name}}</option>
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
                                                                            @if(isset($user->job_title))
                                                                                <option value='{{$user->job_title->id}}'>{{$user->job_title->name}}</option>
                                                                            @else
                                                                                <option value="">-Select Job Title / Position-</option>
                                                                            @endif
                                                                            
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
                                                                        <input type="text" name="employeeid" placeholder="Enter ID Number" class="form-control" value="{{ $user->employeeid }}" required>
                                                                        @if ($errors->has('employeeid'))
                                                                            <div class="invalid-feedback">{{ $errors->first('employeeid') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Email Address (Company)</label>
                                                                        <input type="email" name="company_email" placeholder="Enter Email Address (Company)" class="form-control" value="{{ $user->company_email }}">
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
                                                                            <option value="">-Select Leave Group-</option>
                                                                            @forelse($leave_groups as $leave_group)
                                                                            <option value="{{$leave_group->id}}" {{$user->leave_group_id == $leave_group->id ? 'selected' : ''}}>{{$leave_group->name}}</option>
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
                                                                            <option value="regular" {{ $user->employment_type == 'regular' ? "selected" : '' }}>Regular</option>
                                                                            <option value="trainee" {{ $user->employment_type == 'trainee' ? "selected" : '' }}>Trainee</option>
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
                                                                            <option value="1" {{ $user->employment_status == '1' ? "selected" : '' }}>Active</option>
                                                                            <option value="0" {{ $user->employment_status == '0' ? "selected" : '' }}>Deactive</option>
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
                                                                        <input type="text" name="start_date" id="start_date" placeholder="Enter Official Start Date" class="form-control" value="{{ $user->start_date }}">
                                                                        @if ($errors->has('start_date'))
                                                                            <div class="invalid-feedback">{{ $errors->first('start_date') }}</div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date Regularized</label>
                                                                        <input type="text" name="date_regularized" id="date_regularized" placeholder="Enter Date Regularized" class="form-control" value="{{ $user->date_regularized }}">
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

                                            <!-- Permissions -->
                                            <div class="form-group">
                                                @if(isset($user))
                                                    @include('backend.shared._permissions', ['closed' => 'true', 'model' => $user ])
                                                @endif
                                            </div>

                                            <button type="submit" class="btn btn-glow-primary btn-primary btn-sm"><i class="feather icon-save"></i>Update</button>
                                            <a href="{{ route('users.index') }}" class="btn btn-glow-dark btn-dark btn-sm"><i class="feather icon-x-circle"></i>Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
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