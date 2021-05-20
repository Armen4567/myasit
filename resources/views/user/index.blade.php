@extends('layouts.app')

@section('content')
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="images">
                        <a href="{{route('user.albums', $user -> id)}}" class="btn btn-primary" >Albums</a>
                    </div>
                </div>
@endsection
