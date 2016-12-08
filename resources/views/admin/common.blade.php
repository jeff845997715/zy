<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>贴吧</title>

  <!--icheck-->
  <link href="{{ URL::asset('assets/admin/js/iCheck/skins/minimal/minimal.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/admin/js/iCheck/skins/square/square.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/admin/js/iCheck/skins/square/red.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/admin/js/iCheck/skins/square/blue.css') }}" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="{{ URL::asset('assets/admin/css/clndr.css') }}" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{ URL::asset('assets/admin/js/morris-chart/morris.css') }}">

  <!--common-->
  <link href="{{ URL::asset('assets/admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/admin/css/style-responsive.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="{{ URL::asset('assets/admin/images/logo.png') }}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{ URL::asset('assets/admin/images/logo_icon.png') }}" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="#"><i class="fa fa-home"></i> <span>首页</span></a></li>
                <li class="menu-list"><a href="/admin/users"><i class="fa fa-laptop"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admin/users">用户列表</a></li>
                        <li><a href="/admin/users/create">添加用户</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="/admin/post"><i class="fa fa-book"></i> <span>帖子管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admin/post">帖子列表</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="/admin/product"><i class="fa fa-cogs"></i> <span>积分商城</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admin/product">商品管理</a></li>
                    </ul>
                </li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="images/photos/user-avatar.png" alt="" />
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                            <li><a href="/admin/admin/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        @yield('banner')
<!--         <div class="page-heading"> -->
<!--             <h3> -->
<!--                 Dashboard -->
<!--             </h3> -->
<!--             <ul class="breadcrumb"> -->
<!--                 <li> -->
<!--                     <a href="#">Dashboard</a> -->
<!--                 </li> -->
<!--                 <li class="active"> My Dashboard </li> -->
<!--             </ul> -->
            
<!--         </div> -->
        
        
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            @yield('content')
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2016 &copy; admin by Jeff
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- js 共用文件 -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/admin/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/jquery.nicescroll.js') }}"></script>

<!--easy pie chart-->
<script src="{{ URL::asset('assets/admin/js/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/easypiechart/easypiechart-init.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ URL::asset('assets/admin/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/sparkline/sparkline-init.js') }}"></script>

<!--icheck -->
<script src="{{ URL::asset('assets/admin/js/iCheck/jquery.icheck.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/icheck-init.js') }}"></script>

<!-- jQuery Flot Chart-->
<script src="{{ URL::asset('assets/admin/js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/flot-chart/jquery.flot.tooltip.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/flot-chart/jquery.flot.resize.js') }}"></script>


<!--Morris Chart-->
<script src="{{ URL::asset('assets/admin/js/morris-chart/morris.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/morris-chart/raphael-min.js') }}"></script>

<!--Calendar-->
<script src="{{ URL::asset('assets/admin/js/calendar/clndr.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/calendar/evnt.calendar.init.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/calendar/moment-2.2.1.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="{{ URL::asset('assets/admin/js/scripts.js') }}"></script>

<!--Dashboard Charts-->
<script src="{{ URL::asset('assets/admin/js/dashboard-chart-init.js') }}"></script>
@yield('js')
</body>
</html>
