<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>

    <!-- Styles -->
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('/backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('/backend/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('/backend/assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/style.css') }}">

    <style type="text/css">
        .invalid-feedback {
            display: block;
            text-align: left;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body>
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

                    @include('backend.layout.session')

                    <h3 class="mb-4">Login</h3>
                    <form class="form-horizontal admin_login_form" role="form" method="POST" action="{{ url('/admin/login') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
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
                    <!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="{{ asset('/backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/custom.js') }}"></script>

</body>
</html>

