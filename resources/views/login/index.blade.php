<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <h3 class="text-center text-info">Login</h3>
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        </div>
                        @endif
                        @if (session()->has('logoutSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('logoutSuccess') }}
                        </div>
                        @endif
                        <form id="login-form" class="form" action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="text-info">Email</label><br>
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
