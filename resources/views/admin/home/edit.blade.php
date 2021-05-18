@extends('layouts.admin_plugin')
@extends('layouts.app')

@section('content-dashboard')
    <form action="/post/{{$post['id']}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post -> title}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Text</label>
        <input type="text" name="body" value="{{$post -> body}}" class="form-control" id="exampleInputPassword1" placeholder="Enter text">
    </div>
    <div class="form-group"><label for="exampleInputPassword1">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

