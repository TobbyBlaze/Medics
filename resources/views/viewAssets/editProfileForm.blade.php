<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Profile</h4>
            </div>
        </div>
        <form action=" {{ route('edit-profile', ['id'=>$user->id]) }} " method="POST">
                            @csrf
                            @method('patch')
            <div class="card-box">
                <h3 class="card-title">Basic Information</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">First Name</label>
                                        <input type="text" name="name" class="form-control floating" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control floating" value="{{$user->lname}}">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group form-focus select-focus">
                                        <label class="focus-label">Gender</label>
                                        <select name="gender" class="select form-control floating">
                                            <option value="male selected">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Programme</label>
                                        <input name="program" type="text" class="form-control floating" value="{{$user->program}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Identification Number</label>
                                        <input name="id_number" type="text" class="form-control floating" value="{{$user->id_number}}">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <h3 class="card-title">Contact Information</h3>
                <div class="row">
                <input name="status" type="hidden" class="form-control floating" value="{{$user->status}}">
                    <div class="col-md-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Hall of residence</label>
                            <input name="hall" type="text" class="form-control floating" value="{{$user->hall}}">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="email" name="email" class="form-control floating" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus">
                            <label class="focus-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control floating" value="{{$user->phone}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-20">
                <button class="btn btn-primary submit-btn" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
</div>
