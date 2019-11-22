@extends('frontend.layouts.auth')

@section('content')
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-unlock auth-icon"></i>
                </div>

                @include('frontend.layouts.session')
                
                <h3 class="mb-4">User Login</h3>
                <form class="form-horizontal user_login_form" role="form" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group">
                        <input id="email" type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('username') ?: old('email') }}" autofocus placeholder="Email or Mobile" required>
                        @if ($errors->has('username') || $errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="remember" id="checkbox-fill-a1">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                </form>
                @if (Route::has('password.request'))<p class="mb-2 text-muted"><a href="{{ route('password.request') }}">Forgot password?</a></p>@endif
                <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">Signup</a></p>
            </div>
        </div>
    </div>
</div>
@endsection


