
<div class="content">
    <div class="row justify-content-lg-center">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$adMedicals->count()}}</h3>
                    <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$adMedics->count()}}</h3>
                    <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$adMedics->count()}}</h3>
                    <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

