@extends('loyouts.app')
@section('content')
    <form action="/posts/{{$post['id']}}" method="post">
        @csrf
        @method("PUT")
        <label for="fname">Title</label>
        <input type="text" id="fname" name="title"  value="{{$post['title'] }}" placeholder="Enter Title..">
        <label for="subject">Body</label>
        <textarea id="subject" name="body"  value="{{$post['body'] }}"   style="height:200px"> {{$post['body'] }}</textarea>
        <input type="submit" value="Submit">
    </form>
@endsection
