

@extends('layouts.admin_plugin')
@extends('layouts.app')

@section('content-dashboard')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Bootstrap Snipp for Datatable</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($categories   as $category)
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>{{$category -> id}}</td>
                                <td>{{$category -> name}}</td>
                                <td>{{$category -> description}}</td>
                                <td>{{$category -> image}}</td>
                                <td>{{$category -> created_at}}</td>
                                <td>{{$category -> updated_at}}</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <a href="post/{{$post -> id}}/edit" style="color: #ffffff">
                                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                        </a>
                                    </p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete" style="margin:0; ">
                                    <form action="post/{{$post -> id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-xs" data-title="Delete"  type="submit" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                            </tr>
                            </p></td>

                        @endforeach
                        </tbody>
                    </table>

                    <div class="clearfix"></div>
                    <ul class="pagination pull-right">
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <div class="create-category">

    <form method="post" action="create-category" enctype="multipart/form-data" style="width: 700px;margin: 0 auto;padding-top: 100px">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <p style="color: red; font-weight:700">@error('title') {{$message}} @enderror </p>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            <p style="color: red; font-weight:700">@error('category_id') {{$message}} @enderror </p>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            <p style="color: red; font-weight:700">@error('image') {{$message}} @enderror </p>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
