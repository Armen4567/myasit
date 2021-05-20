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
                            <th>Category Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>{{$post -> id}}</td>
                            <td>{{$post -> category_id}}</td>
                            <td>{{$post -> title}}</td>
                            <td>{{$post -> description}}</td>
                            <td>{{$post -> image}}</td>
                            <td>{{$post -> created_at}}</td>
                            <td>{{$post -> updated_at}}</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <a href="post/{{$post -> id}}/edit" style="color: #ffffff">
                                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
                                            </button>
                                        </a>
                                </p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete" style="margin:0; ">
                                <form action="post/{{$post -> id}}" method="post">
                                    @csrf
                                        `@method('delete')
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

@endsection
