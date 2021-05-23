@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container" style="width: 65%" >
        <div class="col-lg-9">
            <div class="row">
                @foreach($userList as $oneUser)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="candidate-list candidate-grid">
                        <div class="candidate-list-image">
                            <img class="img-fluid" src="{{asset('storage/'.$oneUser -> avatar)}}" alt="">
                        </div>
                        <div class="candidate-list-details" style="margin-top: 10px">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h4>{{$oneUser -> username}}</h4>
                                </div>
                                <div class="candidate-list-option">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Glen Cove, NY 11542</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="candidate-list-favourite-time" style="margin-top: 10px; text-align: center">
                                <a href="{{route('user.visit', $oneUser -> id )}}"  class="btn btn-primary">See page</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            <div class="row">
                <div class="col-12 text-center mt-4 mt-sm-5">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">25</a></li>
                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
