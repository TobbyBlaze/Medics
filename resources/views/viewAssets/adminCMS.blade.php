@foreach($opost as $post)
<form action=" {{ route('post') }} " method="POST">
@csrf
<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            
                <div class="card-body">
                    <div class="chart-title">
                        <h4 class="title is-3">General Notice</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Title:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="noticeTitle" value="{{$post->noticeTitle}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Message:</label>
                                <div class="col-lg-9">
                                    <textarea rows="5" cols="5" name="notice" value="{{$post->notice}}" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary account-btn pl-5 pr-5 pt-2 pb-2">Submit</button>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                </div>
               
            
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card">
           
                <div class="card-body">
                    <div class="chart-title">
                        <h4 class="title is-3">About Us</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="form-group">
                                <label class="">Select the Type Of Message</label>
                                <select class="select" name="medical_name">
                                    <option value="">Select </option>
                                    <option onclick="document.getElementById('message').name='mission'" value="Mission">Mission</option>
                                
                                    <option onclick="document.getElementById('message').name='vision'" value="Vision">Vision</option>
                                
                                    <option onclick="document.getElementById('message').name='plan'" value="Plan">Plan</option>
                                
                                </select>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">About:</label>
                                <div class="col-lg-9">
                                    <textarea rows="2" id="message" cols="5" class="form-control" name="about" value="{{$post->about}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Mission:</label>
                                <div class="col-lg-9">
                                    <textarea rows="2" id="message" cols="5" value="{{$post->mission}}" class="form-control" name="mission"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Vision:</label>
                                <div class="col-lg-9">
                                    <textarea rows="2" id="message" cols="5" class="form-control" name="vision" value="{{$post->vision}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Plan:</label>
                                <div class="col-lg-9">
                                    <textarea rows="2" id="message" cols="5" class="form-control" name="plan" value="{{$post->plan}}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary account-btn pl-5 pr-5 pt-2 pb-2">Submit</button>
                            </div>
                        </div>
                       
                      
                    </div>
                </div>
          
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-inline-block">General Notice</h4>
            </div>
            <div class="card-body p-0">
                
                @include('viewAssets.notice')
                
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card member-panel">
            <div class="card-header bg-white">
                <h4 class="card-title m-b-0">Contact</h4>
            </div>
            <div class="card-body">
                <ul class="contact-list">
                    <li>
                        <div class="contact-cont">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Phone:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="phone" value="{{$post->phone}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-cont">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email" value="{{$post->email}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="contact-cont ">
                            <div class="form-group row text-center">
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary account-btn pl-5 pr-5 pt-2 pb-2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center bg-white">
                <a href="doctors.html" class="text-muted"></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-inline-block">About Us</h4>
            </div>
            <div class="card-body p-0">
               
               @include('viewAssets.about')
               
            </div>
        </div>
    </div>

</div>
</form>
@endforeach