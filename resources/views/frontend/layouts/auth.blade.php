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

    @stack('css')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body>
    
    @yield('content')
    

    <!-- Required Js -->
    <script src="{{ asset('/backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/custom.js') }}"></script>

    @stack('js')

</body>
</html>

