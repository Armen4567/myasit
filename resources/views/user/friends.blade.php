
@extends('layouts.app')

@section('content')
    <div class=" content-main" style="max-width: 765px">
        <div class="col-lg-6">
            <h3>My Friends</h3>
            @if ( ! $friends->count() )
                <p>Have not Friend yet.</p>
            @else
                @foreach ($friends as $user)
                    <div class="col-sm-6 col-lg-4 mb-4" style="max-width: 60%">
                        <div class="candidate-list candidate-grid">
                            <div class="candidate-list-image">
                                <img class="img-fluid" src="{{asset('storage/'.$user -> avatar)}}" alt="">
                            </div>
                            <div class="candidate-list-details" style="margin-top: 10px">
                                <div class="candidate-list-info">
                                    <div class="candidate-list-title">
                                        <h4>{{$user -> username}}</h4>
                                    </div>
                                    <div class="candidate-list-option">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-map-marker-alt pr-1"></i>Glen Cove, NY 11542</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="candidate-list-favourite-time" style="margin-top: 10px; text-align: center">
                                    <a href="{{route('user.visit', $user -> id )}}"  class="btn btn-primary">See page</a>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
        </div>

        <div class="col-lg-6"  style="max-width: 100%">
            <h3>Friend Request</h3>
            @if ( !$requests->count() )
                <p>There are no requests yet</p>
            @else
                @foreach ($requests as $user)
                    <div class="col-sm-6 col-lg-4 mb-4"  style="max-width: 100%">
                        <div class="candidate-list candidate-grid">
                            <div class="candidate-list-image">
                                <img class="img-fluid" src="{{asset('storage/'.$user -> avatar)}}" alt="">
                            </div>
                            <div class="candidate-list-details" style="margin-top: 10px">
                                <div class="candidate-list-info">
                                    <div class="candidate-list-title">
                                        <h4>{{$user -> username}}</h4>
                                    </div>
                                    <div class="candidate-list-option">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-map-marker-alt pr-1"></i>Glen Cove, NY 11542</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row  candidate-list-favourite-time" style="margin-top: 10px; text-align: center">
                                    <a href="{{route('user.visit', $user -> id )}}"  class="btn btn-primary">See page</a>
                                    <a href="{{route('user.accept.friend', $user -> id )}}"  class="btn btn-primary">Accept</a>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
        </div>

    </div>

@endsection
