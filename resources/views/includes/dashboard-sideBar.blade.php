<div class="sidebar1" id="sidebar1">
    <div class="sidebar1-inner slimscroll">
        <div id="sidebar1-menu" class="sidebar1-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="{{ Request::is('student/dashboard') ? ' active' : '' }}">
                    <a href="{{url('/student/dashboard')}}"><i class="fa fa-dashboard"></i>{{$user->status}} dashboard</a>
                </li>
                {{--                what Admin will see--}}
                @if($user->status == "admin")
                <li class="{{ Request::is('student/dashboard') ? ' active' : '' }}">
                    <a href="{{url('/register')}}"><i class="fa fa-dashboard"></i>Register users</a>
                </li>
                
                @endif
            </ul>
        </div>
    </div>
</div>
