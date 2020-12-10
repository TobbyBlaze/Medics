<div class="col-lg-12 col-sm-12">
    <div class="card-box">
        <h4 class="card-title"></h4>
        <ul class="nav nav-tabs nav-tabs-top nav-justified">
            <li class="nav-item"><a class="nav-link active " href="#top-justified-tab1" data-toggle="tab">Upcoming</a></li>
            <li class="nav-item"><a class="nav-link" href="#top-justified-tab2" data-toggle="tab">Records</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="top-justified-tab1">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Upcoming Appointments</h6>
                                <p class="content-group">
                                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                                </p>
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Index Number</th>
                                            <th>Appointment Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($stMedicals as $stMedical)
                                        <tr>
                                            <td>{{$stMedical->user->fullname()}}</td>
                                            <td>{{$stMedical->user->id_number}}</td>
                                            <td>{{$stMedical->appointment_date}}</td>
                                            <td class="text-center">
                                            @if($stMedical->isCompleted == 0)
                                            <form action=" {{ route('stEdit-appointment', ['id'=>$stMedical->id]) }} " method="POST">
                                                @csrf
                                                @method('patch')
                                                <input type="hidden" name="isCompleted" class="form-control" value="1">
                                                <input type="hidden" name="medical_name" class="form-control" value="{{$stMedical->medical_name}}">
                                                <input type="hidden" name="appointment_date" class="form-control" value="{{$stMedical->appointment_date}}">
                                                <input type="hidden" name="user_id" class="form-control" value="{{$stMedical->user_id}}">
                                                <span><button type="submit" class="btn btn-success">completed &nbsp;<i class="fa fa-check text-white"></i></button></span>
                                            </form>
                                            
                                                <span class="text-info">&nbsp;  &nbsp;</span>
                                                <span><a href="{{$stMedical->id}}/delete-appointment"><i class="fa fa-trash text-danger"></i></a></span>
                                           
                                            @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="top-justified-tab2">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Data Table</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">All Appointments</h6>
                                <p class="content-group">
                                    {{--                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.--}}
                                </p>
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Index Number</th>
                                            <th>Appointment Date</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($stMedicals as $stMedical)
                                        <tr>
                                        <td>{{$stMedical->user->fullname()}}</td>
                                            <td>{{$stMedical->user->id_number}}</td>
                                            <td>{{$stMedical->appointment_date}}</td>
                                            @if($stMedical->isCompleted == 1)
                                            <td class="bg-success text-white">completed</td>
                                            @elseif($stMedical->isCompleted == 0)
                                            <td class="bg-warning text-white">Pending</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
