
@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="">
                <a  class="btn  btn-primary " href="{{ route('user.edit', Auth::user() -> id)}}">Sitting</a>
                <a href="{{route('user.albums', Auth::user() -> id)}}" class="btn btn-primary" >Albums</a>
                <a href="{{route('user.list')}}" class="btn btn-primary" >Users</a>
                <a href="{{route('user.friends')}}" class="btn btn-primary" >Friends</a>
            </div>

        </div>

        <div class="col-md-6 gedf-main" style="max-width: 100%">

            <div class="card gedf-card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{route('user.create.post')}}" method="post" enctype="multipart/form-data" class="p-2 flex-grow-1">
                        @csrf
                        <div class="tab-content" id="myTabContent">
                            <div class="form-group">
                                <label class="sr-only" for="message">post</label>
                                <textarea class="form-control" name="description" id="message" rows="3"  required placeholder="What are you thinking?"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input id="images" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  accept=".jpg, .jpeg, .png" multiple autocomplete="image" autofocus>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Share</button>
                        </div>
                    </form>
                </div>
            </div>

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
                                    <img class="rounded-circle" width="45" src="{{ asset('storage/'.Auth::user() -> avatar)}}" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{'@'.Auth::user() -> username}}</div>
                                    <div class="h7 text-muted">{{Auth::user() -> full_name}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <form action="{{route('user.delete.post', $post->id)}}" data-id="{{$post->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item" type="submit">Delete</button>
                                        </form>
                                        <a class="dropdown-item" href="#">Edit</a>
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
{{--                        <a href="{{route('show.comments', $post->id)}}" class="btn btn-primary comment-btn" data-id="{{$post->id}}" data-target="#exampleModalCenter">Comment</a>--}}
                        <a href="#"  class="card-link btn btn-primary"><i class="fa fa-mail-forward"></i> Share</a>
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
{{--                                            @if($comment -> post_id  == $post -> id) --}}
                                                <div class="bg-white p-2">
                                                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="comment-text">{{$comment ->  body }}</p>
                                                    </div>
                                                </div>
{{--                                            @endif--}}
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
                                                        <textarea name="body" required placeholder="Send Comment.." class="form-control ml-1 shadow-none textarea"></textarea>
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
            @endforeach

{{--    <script>--}}
{{--        $(document).ready(function () {--}}

{{--            $('.comment-btn').click(function(){--}}
{{--                var post_id  = $(this).attr('data-id')--}}
{{--                // var send_comment = $('#send-comment').attr('action', `send/comment/post/${post_id}`)--}}
{{--                alert(post_id)--}}
{{--            })--}}
{{--        })--}}


    </script>

@endsection
