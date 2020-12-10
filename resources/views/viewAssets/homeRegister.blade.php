<div class="main-content account-content">
    <div class="content">
        <div class="container">
            <div class="account-box">
                <form class="form-signin" method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
                @csrf
                    <div class="account-title">
                        <h3>Register</h3>
                    </div>
                    <div class="form-group">
                        <label for="file">Upload new users</label>
                        <input id="file" type="file" class="form-control" autofocus  name="file" required accept=".csv">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit">Register users</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
