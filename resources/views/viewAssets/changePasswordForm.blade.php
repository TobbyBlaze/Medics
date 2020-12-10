<div class="content">
    <div class="row">
        <div class="card col-lg-12 col-sm-12">
            <div class="card-body">
                <div class="col-md-6 offset-md-3">
                    <h4 class="page-title">Change Password</h4>
                    <form action=" {{ route('pwUpdate') }} " method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control" name="old_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center m-t-20">
                                <button class="btn btn-primary submit-btn" type="submit">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
