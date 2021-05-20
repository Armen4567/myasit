
@extends('layouts.admin_plugin')
@extends('layouts.app')

@section('content-dashboard')
    <form method="post" action="create-post" enctype="multipart/form-data" style="width: 700px;margin: 0 auto;padding-top: 100px">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         <p style="color: red; font-weight:700">@error('title') {{$message}} @enderror </p>
         </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category Id</label>
            <input type="text" name="category_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Id">
            <p style="color: red; font-weight:700">@error('category_id') {{$message}} @enderror </p>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Text</label>
            <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter text">
            <p style="color: red; font-weight:700">@error('body') {{$message}} @enderror </p>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            <p style="color: red; font-weight:700">@error('image') {{$message}} @enderror </p>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
