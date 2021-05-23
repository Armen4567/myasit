
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light     shadow-sm">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="main-body">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user')}}">Home</a></li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{asset('storage/'.$user -> avatar)}}" alt="Admin"  style="width: 350px; height: 270px;object-fit: cover" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>{{$user -> full_name}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3" style="padding: 13px">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> username}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> full_name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3"  >
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date of Birthday</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> dob}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> gender}}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="">
                                <a href="{{route('user.albums', $user -> id)}}" class="btn btn-primary" >Albums</a>
                                <a href="{{route('user.list')}}" class="btn btn-primary" >Users</a>
                                @if(Auth::user()->hasFriendRequestPending($user) )
                                    <p>{{$user->username }} spasum e </p>
                                @elseif(Auth::user()-> hasFriendRequestReceived($user))
                                    <a href="{{route('user.accept.friend', $user->username)}}" class="btn btn-primary"> Accept</a>
                                @elseif(Auth::user()-> isFriendWith($user))
                                    <p>{{$user -> username}} already is friend</p>
                                @else
                                    <a href="{{route('user.add.friend', $user->username)}}" class="btn btn-primary"> Add Friend</a>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-6 gedf-main" style="max-width: 100%">


                            @if($posts -> count() <  1 )
                                <main role="main" class="container" style="margin-top: 130px;text-align: center">
                                    <div class="starter-template">
                                        <h1>There is no post yet !</h1>
                                    </div>
                                </main>
                            @endif
                            @foreach($posts as $post)
                                <div class="card gedf-card" style="margin-top: 10px">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2">
                                                    <img class="rounded-circle" width="45" src="{{ asset('storage/'.$user -> avatar)}}" alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <div class="h5 m-0">{{'@'.$user -> username}}</div>
                                                    <div class="h7 text-muted">{{$user -> full_name}}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                        <div class="h6 dropdown-header">Configuration</div>

                                                        <a class="dropdown-item" href="#">Report</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$post  -> created_at}}</div>
                                        <p class="card-text">{{$post -> description}}</p>
                                        <img style="width: 200px; object-fit: cover" src="{{ asset('storage/'.$post -> image)}}" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('post.like', $post->id)}}" class="card-link btn btn-primary"><i class="fa fa-gittip"></i> Like  ( {{$post->likes->count()}} {{ Str::plural('', $post->likes->count() ) }} )</a>
                                        <button  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Comment</button>
                                        <a href="#" class="card-link btn btn-primary"><i class="fa fa-mail-forward"></i> Share</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="max-width: 950px" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="container mt-5">
                                        <div class="d-flex justify-content-center row">
                                            <div class="col-md-8">
                                                <div class="d-flex flex-column comment-section">
                                                    @foreach($comments as $comment)
{{--                                                        @if($comment -> post_id  == $post -> id)--}}
                                                    <div class="bg-white p-2">
                                                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                                            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <p class="comment-text">{{$comment -> post_id    }}</p>
                                                        </div>
                                                    </div>
{{--                                                        @endif--}}
                                                    @endforeach
                                                    <div class="bg-white">
                                                        <form action="{{route('send.comment', $post->id)}}" method="post" enctype="multipart/form-data" class="p-2 flex-grow-1">
                                                            @csrf
                                                            <div class="d-flex flex-row fs-12">
                                                                <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                                                                <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                                                                <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                                                            </div>
                                                            <div class="bg-light p-2">
                                                                <div class="d-flex flex-row align-items-start">
                                                                    <img class="rounded-circle" src="{{asset('storage/'.Auth::user() -> avatar)}}" width="40">
                                                                    <textarea name="body" required class="form-control ml-1 shadow-none textarea"></textarea>
                                                                </div>
                                                                <div class="mt-2 text-right">
                                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</main>
</div>
</body>
</html>
