
@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        @if($user -> id == Auth::user()->id)
        <div class="card mb-3">
            <div class="images" style="padding: 10px;">
                <form method="post" action="{{route('user.create.albums', $user -> id)}}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Create Album</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Create Album</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <div class="row">

            @foreach($albums as $album)
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <h5 class="card-title">{{  $album -> name}}</h5>
                            <div class="row justify-content-around">
                                <a href="{{route('user.show.albums', $album -> id)}}" class="btn btn-primary">Open</a>
                                @if($album->user_id == Auth::User()-> id )
                                    <form action="{{route('user.destroy.albums', $album -> id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn bg-danger text-white" > Delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
