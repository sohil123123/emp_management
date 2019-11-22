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

    <link href="{{ asset('/backend/assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/assets/css/rowReorder.dataTables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/backend/assets/css/jquery-confirm.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/backend/assets/css/jquery.loadingModal.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('/backend/assets/css/sweetalert2.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('/backend/assets/css/select2.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('/frontend/css/custom.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @stack('css_link')
    
    @stack('css')

</head>
<body>
    
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="{{ route('admin.home') }}" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Frontend</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item dashboard">
                        <a href="{{ route('home') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    @can('view_users', 'add_users', 'edit_users', 'delete_users')
                    <li class="nav-item users">
                        <a href="{{ route('users.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Employees</span></a>
                    </li>
                    @endcan

                    @can('view_companies', 'add_companies', 'edit_companies', 'delete_companies')
                    <li class="nav-item companies">
                        <a href="{{ route('companies.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Companies</span></a>
                    </li>
                    @endcan

                    @can('view_departments', 'add_departments', 'edit_departments', 'delete_departments')
                    <li class="nav-item departments">
                        <a href="{{ route('departments.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Departments</span></a>
                    </li>
                    @endcan

                    @can('view_job-titles', 'add_job-titles', 'edit_job-titles', 'delete_job-titles')
                    <li class="nav-item job_titles">
                        <a href="{{ route('job-titles.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Job Titles</span></a>
                    </li>
                    @endcan
                    
                    @can('view_leave-groups', 'add_leave-groups', 'edit_leave-groups', 'delete_leave-groups', 'view_leave-types', 'add_leave-types', 'edit_leave-types', 'delete_leave-types')
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu leaves">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Leaves</span></a>
                        <ul class="pcoded-submenu">
                            @can('view_leave-groups', 'add_leave-groups', 'edit_leave-groups', 'delete_leave-groups')
                                <li class="leave-groups"><a href="{{ route('leave-groups.index') }}">Leave Groups</a></li>
                            @endcan
                            @can('view_leave-types', 'add_leave-types', 'edit_leave-types', 'delete_leave-types')
                                <li class="leave-types"><a href="{{ route('leave-types.index') }}">Leave Types</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="{{ route('admin.home') }}" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Frontend</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('/backend/assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                <span>{{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->lastname) }} ({{ Auth::user()->roles->first()->name }})</span>
                                <a href="{{ route('admin.logout') }}" class="dud-logout" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="feather icon-log-out"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <ul class="pro-body">
                               <!--  <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li> -->
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <!-- <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('/backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/pcoded.min.js') }}"></script>
    

    <script type="text/javascript" src="{{ asset('/backend/assets/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/dataTables.checkboxes.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/dataTables.rowReorder.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/backend/assets/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/jquery.validate.file.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/jquery-confirm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/assets/js/jquery.loadingModal.js') }}"></script>

    <script  src="{{ asset('/backend/assets/js/sweetalert2.all.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/backend/assets/js/select2.min.js') }}"></script>

    <script src="{{ asset('/frontend/js/custom.js') }}"></script>

    @stack('js_link')

    @stack('js')

</body>
</html>
