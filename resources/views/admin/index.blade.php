@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin {{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }} as Admin
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/create"  id="create-post" style="padding: 10px; " >Create</a>

    @foreach($posts as $post)
        <div style="border: 1px solid">
            <h2>{{$post -> title}}</h2>
            <p>{{$post -> body}}</p>
            <a href="/posts/{{$post -> id}}/edit"  id="delete-post" style="padding: 10px;">Edit</a>

            <form action="/posts/{{$post['id']}}/destroy" method="post">
                @csrf
                @method("delete")
                <input type="submit" value="Delete" name="delete">
            </form>
        </div>
    @endforeach

@endsection
