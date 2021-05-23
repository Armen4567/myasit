    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('user')}}">Home</a></li>
        </ol>
    </nav>
            <div class="container">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 140px;">
                                                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                            <img  style="height:140px;width: 140px; object-fit: cover" src="{{asset('storage/'.$user -> avatar)}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user -> full_name}}</h4>
                                                        <p class="mb-0">{{$user -> username}}</p>
                                                        <div class="mt-2">
                                                                <label for="changeProfileAvatar"> <i class="fa fa-fw fa-camera"></i> Change Photo</label>
                                                            <input type="file" class="d-none" id="changeProfileAvatar">

                                                        </div>
                                                    </div>
                                                    <div class="text-center text-sm-right">
                                                        <div class="text-muted"><small>Joined {{$user -> created_at}}</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form method="post" action="{{route('user.update', $user -> id)}}"  enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name"  value="{{ $user -> full_name }}" required autocomplete="full_name" autofocus>
                                                                                @error('full_name')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Username</label>
                                                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"  value="{{ $user -> username }}" required autocomplete="username" autofocus>
                                                                            @error('username')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                 <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $user -> email }}" required autocomplete="email">
                                                                            @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Gender</label>
                                                                            <div class=" text-secondary" style="text-align: end">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" value="Male" name="gender" id="male"/>
                                                                                    <label class="form-check-label" for="flexRadioDefault1">Male </label> <br>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" value="Female" name="gender" id="female" checked/>
                                                                                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Date of Birthday</label>
                                                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birthday"  value="{{ $user -> dob }}" required autocomplete="dob" autofocus>
                                                                                @error('dob')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Avatar</label>
                                                                            <input id="avatar" type="file" class="form-control @error('file') is-invalid @enderror" name="avatar" placeholder="" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>
                                                                                @error('avatar')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6 mb-3">
                                                                <div class="mb-2"><b>Change Password</b></div>
                                                                <div class="row">
{{--                                                                    <div class="col">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label>Current Password</label>--}}
{{--                                                                            <input class="form-control" type="password" placeholder="••••••">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>New Password</label>
                                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                                                                @error('password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

