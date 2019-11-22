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

                <h3 class="mb-4">Reset Password</h3>
                <form class="form-horizontal user_login_form" role="form" method="POST" action="{{ route('password.email') }}">
                @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Send Password Reset Link</button>
                </form>
                
                <p class="mb-0 text-muted">Allready have an account? <a href="{{ route('login') }}"> Log in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
