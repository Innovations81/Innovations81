<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Goa 247</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
</head>

<body class="custom-bg">
<!-- Login Block -->

<section class="login-block">
    <div class="container">
        <div class="login-subblock">
            <div class="logo-block">
                <a href="javascript:;">
                    <img src="{{ asset('img/logo.svg') }}" class="img-fluid"/>
                    <span>Your Business tagline goes here</span>
                </a>
            </div>
            <div class="heading-block">
                <h5>Login</h5>
                <h6>Please login into your account to continue.</h6>
            </div>
            <div class="form-block">
                @include('elements.flash')
                <form class="login-form admin-login-form" method="post" action="{{ url('/') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Johndoe@gmail.com"
                               class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password"
                               placeholder="Password" name="password"
                               class="form-control @error('password') is-invalid @enderror"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                        @enderror
                    </div>
                    <div class="form-group button-group">
                        <button type="submit" class="btn-red">Login</button>
                    </div>
                </form>
            </div>
            <div class="footer-block">
                <h6>Don't have an account? <a href="javascript:;">Register Now</a></h6>
            </div>
        </div>
    </div>
</section>

<!-- Login Block -->

<footer>
    <div class="container">
        <h6>Copyright 2021 @ <a href="javascript:void(0);">Goa247.com</a> | All Rights Reserved</h6>
    </div>
</footer>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.validate.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/custom/custom-login.js') }}"></script>
</body>
</html>
