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
                <div class="mb-6">
                    <i class="feather icon-unlock auth-icon"></i>
                </div>

                <h3 class="mb-6">Verify Your Email Address</h3>

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<style type="text/css">
    .auth-wrapper .auth-content{
        width: 866px;
    }
</style>
@endpush
