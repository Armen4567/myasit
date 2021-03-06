{{--    @extends('layouts.app')--}}

{{--    @section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endsection--}}



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
{{--<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">--}}
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
{{--                    <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group row">--}}
{{--                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>--}}
{{--                                @error('username')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>--}}
{{--                                @error('full_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">--}}
{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">--}}
{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birthday" value="{{ old('dob') }}" required autocomplete="dob" autofocus>--}}
{{--                            @error('dob')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group ">--}}
{{--                            <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="radio" value="Male" name="gender" id="male"/>--}}
{{--                                <label class="form-check-label" for="flexRadioDefault1">Male </label> <br>--}}
{{--                            </div>--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="radio" value="Female" name="gender" id="female" checked/>--}}
{{--                                <label class="form-check-label" for="flexRadioDefault2">Female</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <input id="avatar" type="file" class="form-control @error('file') is-invalid @enderror" name="avatar" placeholder="" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>--}}
{{--                            @error('avatar')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 offset-md-4">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                <label class="form-check-label" for="remember">--}}
{{--                                    {{ __('Remember Me') }}--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <div class="form-group row">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<script src="js/jquery.min.js"></script>--}}
{{--<script src="js/popper.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}

{{--</body>--}}
{{--</html>--}}


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
<body style="background-image: url(images/body-bg.jpg);">

<div class="main">

    <div class="container">
        <form method="POST" class="appointment-form" action="{{ route('register') }}"  enctype="multipart/form-data">
            @csrf
            <h2>Register</h2>

            <div class="form-group-1">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                @error('full_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">

                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birthday" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div  style="color:#000000" class=" form-check">
                    <label  style="font-size: 17px" id="male" >Male </label>
                    <input  style="margin-bottom: 0 ; width: 10%;font-size: 17px" type="radio" value="Male" name="gender" id="male"/>
                    <label style="font-size: 17px" >Female</label>
                    <input style="margin-bottom: 0 ; width: 10%;font-size: 17px" type="radio" value="Female" name="gender" id="female" checked/>
                </div>
                <input id="avatar" type="file" class="form-control @error('file') is-invalid @enderror" name="avatar" placeholder="" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                @error('avatar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
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
        </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" value="Register" />
            </div>
            <div style="margin-top: 30px" class="form-submit">
                <a class="submit" href="{{ route('login') }}">Sign in</a>
            </div>

        </form>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


