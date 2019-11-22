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

                <h3 class="mb-4">Confirm Password</h3>


                <p>{{ __('Please confirm your password before continuing.') }}</p>
                <p>{{ __('We won\'t ask for your password again for a few hours.') }}</p>

                <form class="form-horizontal user_login_form" role="form" method="POST" action="{{ route('password.confirm') }}">
                @csrf
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary shadow-2 mb-4">Confirm Password</button>
                </form>
                @if (Route::has('password.request'))<p class="mb-2 text-muted"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>@endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style type="text/css">
    .auth-wrapper .auth-content{
        width: 566px;
    }
</style>
@endpush