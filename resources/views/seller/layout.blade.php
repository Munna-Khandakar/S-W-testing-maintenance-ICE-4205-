<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>foodgarage | Your Online Restaurant</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/fullcalendar.min.css')}}" />
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard">
    <!-- start: Header -->
    <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <div class="opener-left-menu is-open">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
                <a href="{{route('dashboard')}}" class="navbar-brand">
                    <b>foodgarage</b>
                </a>

                <ul class="nav navbar-nav search-nav">
                    <li>
                        <div class="search">
                            <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                            <div class="form-group form-animate-text">
                                <input type="text" class="form-text" required>
                                <span class="bar"></span>
                                <label class="label-search">Type anywhere to <b>Search</b> </label>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right user-nav">
                    <li class="user-name"><span>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span></li>
                    <li class="dropdown avatar-dropdown">
                        <img src="{{asset('asset/img/restaurant.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
                        <ul class="dropdown-menu user-dropdown">
                            <li><a href="{{ route('seller_register') }}"><span class="fa fa-user-plus"></span> Add Member</a></li>
                            <li><a href='#' onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        <div id="left-menu">
            <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li>
                        <div class="left-bg"></div>
                    </li>
                    <li class="time">
                        <h1 class="animated fadeInLeft"></h1>
                        <p class="animated fadeInRight"></p>
                    </li>

                    <li class="active ripple">
                        <a href="{{ route('dashboard') }}"><span class="fa fa-home"></span>Dashboard</a>
                    </li>
                    <li class="ripple">
                        <a href="{{route('products')}}"><span class="fa fa-opencart"></span>Products</a>
                    </li>
                    {{-- <li class="ripple">
                        <a href="{{ route('sell') }}"><span class="fa fa-area-chart"></span>Sell</a>
                    </li> --}}
                    <li class="ripple">
                        <a href="{{route('members')}}"><span class="fa fa-users"></span>Members</a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- end: Left Menu -->


        <!-- start: content -->
        <div id="content">
            @yield('content')
        </div>
        <!-- end: content -->

    </div>

    <!-- start: Mobile -->
    <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                         <a href="{{ route('dashboard') }}"><span class="fa fa-home"></span>Dashboard</a>
                    </li>
                    <li class="ripple">
                        <a href="{{ route('products') }}"><span class="fa fa-area-chart"></span>Sell</a>
                    </li>
                    <li class="ripple">
                        <a href="{{ route('members') }}"><span class="fa fa-users"></span>Members</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
    </button>
    <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>


    <!-- plugins -->
    <script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('asset/js/plugins/chart.min.js')}}"></script>


    <!-- custom -->
    <script src="{{asset('asset/js/main.js')}}"></script>
    @yield('javascript')
    <!-- end: Javascript -->
</body>
</html>
