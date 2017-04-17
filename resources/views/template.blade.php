<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard | MINA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <script type="text/javascript" src="{{asset('plugins/lib/modernizr.js')}}"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/page_messages.css')}}">
    <link rel="stylesheet" type="text/css" media="all"  href="{{asset('plugins/year-calendar/css/bootstrap-year-calendar.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/monthly/css/monthly.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/emojionearea/emojionearea.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/page-acctivity-timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
    @yield('css')
</head>
<body>

	<div class="wrapper has-footer">
        
        <header class="header-top navbar fixed-top">
            
            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="{{url('home')}}">
                    <img src="{{asset('images/img/logo1.png')}}">
                    <span>MINA APPS</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="sli-bell"></i>
                            <div class="new-alert active"></div>
                        </a>
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                            <li class="no-link">4 New Notifications</li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-file"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Ricky Palmer</span>
                                            <span class="time">3 hrs ago</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a file</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-email"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Charles Dockery</span>
                                            <span class="time">Jun 03, 2015</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a message</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-shopping-cart-full"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Kimberly Crouch</span>
                                            <span class="time">May 17, 2015</span>
                                            <p class="font-11 no-m-b text-overflow">Purchased your item</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#" class="text-center">See all</a></li>
                        </ul>
                    </li>
                    
                    

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('demo/users/img-user-01.jpg')}}" alt="" class="hidden-sm">
                            <div class="user-name"> {{ session()->get('name') }} <small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="{{url('showEmployees/'.session()->get('id'))}}"><i class="sli-user"></i> My Profile</a></li>
                            <li><a href="{{url('calendar')}}"><i class="sli-calendar"></i> Calendar</a></li>
                            <li><a href="{{url('inbox')}}"><i class="fa fa-envelope-o"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('destroySession')}}"><i class="sli-logout"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->
        
        <!-- START Navbar -->
        @if(session()->get('status') == 'Owner')
            @include('navbar_owner')
        @elseif(session()->get('status') == 'Manager')
            @include('navbar_manager')
        @elseif(session()->get('status') == 'Employee')
            @include('navbar_employee')
        @endif
        <!-- END Navbar -->
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard - {{ session()->get('status') }} <small>Welcome back <span class="text-primary">{{ session()->get('name') }}</span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            @yield('content-extends')
            <div class="content-wrap">  <!--START: Content Wrap-->
                
               @yield('content')

            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
        <footer class="footer"> <!-- START: Footer -->
            &copy; 2016 <b>Big Ben</b> Admin
        </footer>   <!-- END: Footer -->
        
    </div>  <!-- END: wrapper -->

	<script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/lib/plugins.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('plugins/flot/excanvas.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.crosshair.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/curvedLines.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/flot/jquery.flot.pie.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('plugins/fullcalendar/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/year-calendar/js/bootstrap-year-calendar.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('js/app.base.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/page-yearCalendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chart-plot.js')}}"></script>
    @yield('js')
</body>
</html>