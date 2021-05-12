@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> User {{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in') }} as User
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
        <div style="border: 1px solid">
            <h2>{{$post -> title}}</h2>
            <p>{{$post -> body}}</p>

        </div>

    @endforeach
@endsection
