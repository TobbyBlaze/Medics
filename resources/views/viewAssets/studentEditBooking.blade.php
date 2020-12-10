<div class="container">
    <div class="row">
        <div class="ml-lg-4 col-lg-5 col-sm-5 ">
            <div class="card">
                <div class="card-body ">
                    <div class="appointment">
                        <div class="card-title bg-info p-2 nav nav-tabs nav-justified ">
                            <div class="nav-item">
                                <span class="text-white font-weight-bold">Online Booking</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action=" {{ route('edit-appointment', ['id'=>$medical->id]) }} " method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Choose the Date</label>
                                <div class="cal-icon">
                                    <input type="date" name="appointment_date" class="form-control" value="{{$medical->appointment_date}}">
                                </div>
                                <div class="form-group">
                                    <label>Select the Medical Type</label>
                                    <select class="select" name="medical_name" value="{{$medical->medical_name}}">
                                        <option value="{{$medical->medical_name}}" selected>{{$medical->medical_name}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center m-b-0">
                                <button class="btn btn-primary account-btn" type="submit">Update Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
