<div class="col-lg-12 col-sm-12">
    <div class="card-box">
        <h4 class="card-title"></h4>
        <ul class="nav nav-tabs nav-tabs-top nav-justified">
            <li class="nav-item"><a class="nav-link active bg-info text-white" href="#top-justified-tab1" data-toggle="tab">Medical Bookings</a></li>
            {{--            <li class="nav-item"><a class="nav-link {{ Request::is('top-justified-tab2') ? ' active' : '' }}" href="#top-justified-tab2" data-toggle="tab">Medical Reports</a></li>--}}
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="top-justified-tab1">
                @include('viewAssets.studentMedicalBookings')
            </div>
            {{--            <div class="tab-pane" id="top-justified-tab2">--}}
            {{--                @include('viewAssets.studentMedicalReports')--}}
            {{--            </div>--}}

        </div>
    </div>
</div>
