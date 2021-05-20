@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="storage/{{$user -> avatar}}" alt="Admin"  style="width: 350px; height: 270px" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{$user -> full_name}}</h4>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3" style="padding: 30px">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="text-align: end">
                                {{$user -> username}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="text-align: end">
                                {{$user -> full_name}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3"  >
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="text-align: end">
                                {{$user -> email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date of Birthday</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="text-align: end">
                                {{$user -> dob}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" style="text-align: end">
                                {{$user -> gender}}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> username}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> full_name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date of Birthday</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> dob}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-align: end">
                                    {{$user -> gender}}
                                </div>
                            </div>
                            <hr>
                            {{--                        <div class="row">--}}
                            {{--                            <div class="col-sm-3">--}}
                            {{--                                <h6 class="mb-0">Address</h6>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-sm-9 text-secondary">--}}
                            {{--                                Bay Area, San Francisco, CA--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<?php
