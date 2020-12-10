<header class="header ">
    <div class="header-top navbar-f">
        <div class="container">
            <div class="row">
                <div class="col-md-2 float-left">
                    <div class="logo">
                        <a href="/"><img alt="Logo" src="{{asset('assets/main/assets/img/logo.png')}}" width="1200px" height="1200px"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-md p-0">
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav main-nav float-right ml-auto">
                                <li class="nav-item {{ Request::is('/') ? ' active' : '' }}">
                                    <a href="{{url('/home')}}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item {{ Request::is('about') ? ' active' : '' }}">
                                    <a href="{{url('/about')}}" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item {{ Request::is('contact') ? ' active' : '' }}">
                                    <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                                </li>
                               
                                
                                <li class="dropdown nav-item">
                                    <a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    @guest()
                                        <a class="dropdown-item {{ Request::is('login') ? ' active' : '' }}" href="{{url('/login')}}" >Login</a>
{{--                                        <a class="dropdown-item {{ Request::is('register') ? ' active' : '' }}" href="register">Staff Register</a>--}}
                                         @endguest()
                                         @auth()
                                        <a class="dropdown-item {{ Request::is('edit-Profile') ? ' active' : '' }}" href="edit">Edit Profile</a>
                                        <a class="dropdown-item {{ Request::is('changePassword') ? ' active' : '' }}" href="{{ route('password.request') }}">Change Password</a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                       
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        @endauth()
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
