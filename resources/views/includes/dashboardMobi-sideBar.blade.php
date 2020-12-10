<div class="bar" id="">
    <div class="bar-inner slimscroll">
        <div id="bar-menu" class="bar-menu">
            <ul>
                <li class="menu-title">Main</li>
                {{--         what student will see     --}}
                <li class="{{ Request::is('student/dashboard') ? ' active' : '' }}">
                    <a href="{{url('/student/dashboard')}}"><i class="fa fa-dashboard"></i>Status Dashboard</a>
                </li>
                {{--                what Admin will see--}}
                <li class="{{ Request::is('admin/staff') ? ' active' : '' }}">
                    <a href="{{url('/admin/staff')}}"><i class="fa fa-user-md"></i>Staff</a>
                </li>
                <li class="{{ Request::is('admin/students') ? ' active' : '' }}">
                    <a href="{{url('/admin/students')}}"><i class="fa fa-wheelchair"></i>Student</a>
                </li>

            </ul>
        </div>
    </div>
</div>

