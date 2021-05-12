
@extends('loyouts.app')
@section('content')
@foreach($posts as $post)
<div style="border: 1px solid">
{{--    <h2>{{$post -> title}}</h2>--}}
{{--    <p>{{$post -> body}}</p>--}}
</div>
@endforeach
@endsection
