<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

    <title>CAFP - admin</title>
    <!-- Plugins CSS -->
@yield('plugins-css')

<!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('dist/css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="horizontal-nav skin-megna fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">CAFP</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('images/logo.jpg')}}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="{{asset('images/logo.jpg')}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('images/logo.jpg')}}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo text -->
                    </span>
                </a>
            </div>

            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <br/>
            <br/>
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <li class="nav-item"><a class="nav-link sidebartoggler d-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->

                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="hidden-md-down">cafp admin &nbsp;<i
                                    class="fa fa-angle-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->

                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                                Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
                               class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <br/>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->

            <nav class="sidebar-nav">

                    <ul id="sidebarnav">

                        <li><a class="waves-effect waves-dark" href="/" aria-expanded="false"><i
                                    class="fa fa-bank"></i><span class="hide-menu">Home</span> </a>

                        </li>
                        <li><a class=" waves-effect waves-dark" href="/admin/about" aria-expanded="false"><i
                                    class="fa fa-user-md"></i><span class="hide-menu">About Us</span></a>
                        </li>

                        <li>
                            <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="fa fa-pie-chart"></i><span class="hide-menu">About CAFP</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/admin/board">Board of trustees</a></li>
                                <li><a href="/admin/staff">Staff</a></li>
                                <li><a href="/admin/associates">Associates</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="fa fa-pie-chart"></i><span class="hide-menu">Publications</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/admin/publications">Publications</a></li>
                                <li><a href="/admin/events">Events</a></li>
                                <li><a href="/admin/articles">Articles</a></li>
                                <li><a href="/admin/plants">Plans</a></li>
                                <li><a href="/admin/pillars">Pillars</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="/admin/partners" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Partners</span></a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="/admin/vacancies" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Vacancies</span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{url('/admin/capacity_developments')}}"
                               aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Capacity developments</span></a>
                        </li>

                        <li><a class="waves-effect waves-dark" href="/admin/faqs" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">FAQs</span></a>
                        </li>

                        <li><a class="waves-effect waves-dark" href="/admin/gallery" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Gallery</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>


                    </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        ©{{date('Y')}} Allied Health Practitioners Council
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('dist/js/custom.min.js')}}"></script>
<!-- ============================================================== -->

<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('/ckeditor/styles.js')}}"></script>
<script src="{{asset('/ckeditor/ckeditor.custom.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>


<!-- This page plugins -->
@yield('plugins-js')
<script src="{{asset('dist/js/dashboard1.js')}}"></script>


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>

<script>
    CKEDITOR.replace('editor1');
</script>
</body>

</html>
