<!-- Mobile Header -->
<header class="mobile-header">
    <div class="panel-control-left">
        <a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page_title">
        <a href="/"><img src="{{asset('assets/main/assets/img/logo.png')}}" alt="Logo" class="img-fluid" width="60" height="60"></a>
    </div>
</header>
<!-- Mobile Header /-->

<!-- Mobile Sidebar -->
<div class="sidebar sidebar-menu" id="side_menu">
    <div class="sidebar-inner slimscroll">
        <a id="close_menu" href="#"><i class="fa fa-close"></i></a>
        <ul class="mobile-menu-wrapper" style="display: block;">
            <li>
                @include('includes.dashboardMobi-sideBar')
            </li>
            <li class="{{ Request::is('/') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a>
                </div>
            </li>
            <li class="{{ Request::is('about') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('/about')}}"><i class="fa fa-info-circle"></i>About Us</a>
                </div>
            </li>
            <li class="{{ Request::is('contact') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('/contact')}}"><i class="fa fa-phone"></i>Contact Us</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="appointment.html"><i class="fa fa-calendar"></i>Book Appointment</a>
                </div>
            </li>
            <li class="{{ Request::is('login') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('/login')}}"><i class="fa fa-sign-in"></i>Login</a>
                </div>
            </li>
{{--            <li class="{{ Request::is('register') ? ' active' : '' }}">--}}
{{--                <div class="mobile-menu-item clearfix">--}}
{{--                    <a href="register"><i class="fa fa-users"></i>Staff Register</a>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="{{ Request::is('edit-Profile') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('edit-Profile')}}"><i class="fa fa-key"></i>Edit Profile</a>
                </div>
            </li>
            <li class="{{ Request::is('changePassword') ? ' active' : '' }}">
                <div class="mobile-menu-item clearfix">
                    <a href="{{url('/changePassword')}}"><i class="fa fa-key"></i>Change Password</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href=""><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </li>
        </ul>

    </div>
</div>
<!-- Mobile Sidebar /-->
