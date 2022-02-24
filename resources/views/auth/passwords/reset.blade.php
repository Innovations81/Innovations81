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
<section class="forgot-block">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="forgot-subblock">
            <div class="logo-block">
                <a href="index.html">
                    <img src="{{ asset('img/logo.svg') }}" class="img-fluid"/>
                    <span>Your Business tagline goes here</span>
                </a>
            </div>
            <div class="heading-block">
                <h5>Reset Password?</h5>
                <h6>Please provide your Email Address, we'll provide you a link for resetting your password.</h6>
            </div>
            <div class="form-block">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                               autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required autocomplete="new-password">
                    </div>
                    <div class="form-group button-group">
                        <button type="submit" class="btn-red">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <h6>Copyright 2021 @ <a href="javascript:void(0);">Goa247.com</a> | All Rights Reserved</h6>
    </div>
</footer>
<script src="{{ mix('js/admin-index.js') }}"></script>
</body>
</html>
