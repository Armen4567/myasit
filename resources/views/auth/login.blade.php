
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Login 10</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}

{{--    <link rel="stylesheet" href="css/style.css">--}}

{{--</head>--}}
{{--<body class="img js-fullheight" style="background-image: url(images/body-bg.jpg);">--}}
{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6 text-center mb-5 ">--}}
{{--                <h2 class="heading-section">Sign in</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-6 col-lg-4">--}}
{{--                <div class="login-wrap p-0">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                            @error('email')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>--}}
{{--                        </div>--}}
{{--                        <div class="form-group d-md-flex">--}}
{{--                            <div class="w-50">--}}
{{--                                <label class="checkbox-wrap checkbox-primary">Remember Me--}}
{{--                                    <input type="checkbox" checked>--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="w-50 text-md-right">--}}
{{--                                <a href="#" style="color: #fff">Forgot Password</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <div class="form-group row">--}}
{{--                        <div class="col-md-6 offset-md-4">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                <label class="form-check-label" for="remember">--}}
{{--                                    {{ __('Remember Me') }}--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row mb-0">--}}
{{--                        <div class="col-md-8 offset-md-4">--}}
{{--                            <button type="submit" class="btn btn-primary">--}}
{{--                                {{ __('Login') }}--}}
{{--                            </button>--}}

{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot Your Password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<script src="js/jquery.min.js"></script>--}}
{{--<script src="js/popper.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}

{{--</body>--}}
{{--</html>--}}
{{--@endsection--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link href="{{ asset('css/mainstyle.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/body-bg.jpg);height: 100vh">

<div class="main">

    <div class="container">
            <form method="POST" class="appointment-form" action="{{ route('login') }}">
            @csrf
            <h2>Sign in</h2>
            <div class="form-group-1">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
            </div>
{{--            <div class="form-group-2">--}}
{{--                <h3>How would you like to bo located ?</h3>--}}
{{--                <div class="select-list">--}}
{{--                    <label class="checkbox-wrap checkbox-primary">Remember Me--}}
{{--                        <input type="checkbox" checked>--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="select-list">--}}
{{--                    <select name="hour_appointment" id="hour_appointment">--}}
{{--                        <option seleected value="">Hours : 8am 10pm</option>--}}
{{--                        <option value="9h-11h">Hours : 9am 11pm</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" value="Sign in " />
            </div>
                <div class="form-submit">
                    <a class="submit" href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
