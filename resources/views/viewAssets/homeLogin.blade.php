<div class="main-content account-content">
    <div class="content">
        <div class="container">
            <div class="account-box">
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="account-title">
                        <h3>Login</h3>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
