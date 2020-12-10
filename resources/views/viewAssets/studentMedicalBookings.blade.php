<div class="row">
    <div class="col-sm-4 col-3">
        <h4 class="page-title">Appointments</h4>
    </div>
    <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="{{route('bookings')}}"  class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="example" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Patient Name</th>
                    <th>Medical Type</th>
                    <th>Appointment Date</th>
                    <!-- <th>Appointment Time</th> -->
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    
                @foreach ($medicals as $medical)
                
                <tr>
                <!-- <a href="edit-bookings/{{$medical->id}}"> -->
                    <td>APT {{$medical->id}} </td>
                    <td> {{$medical->user->name}}</td>
                    <td>{{$medical->medical_name}}</td>
                    <td>{{$medical->appointment_date}}</td>
                    <!-- <td>10:00am - 11:00am</td> -->
                    @if($medical->isCompleted == 0)
                    <td><span class="custom-badge status-orange">Pending</span></td>
                    @elseif($medical->isCompleted == 1)
                    <td><span class="custom-badge status-green">Completed</span></td>
                    @endif
                    <td class="text-center">
                        @if($medical->isCompleted == 0)
                        <span><a href="edit-bookings/{{$medical->id}}"><i class="fa fa-pencil text-warning"></i></a></span>
                        
                        <span class="text-info">&nbsp;  &nbsp;</span>
                        
                        <span><a href="{{$medical->id}}/delete-appointment"><i class="fa fa-trash text-danger"></i></a></span>
                        @endif
                    </td>
                    <!-- </a> -->
                </tr>
                
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
