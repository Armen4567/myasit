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
<body style="background-image: url(images/body-bg.jpg); height: 100vh;">

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
