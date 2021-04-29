@extends('layouts.admin_layout')
@section('content')

 <!-- Profile Image -->
 <!-- <div class='jumbotron'> -->
 <div class="card col-md-6 container card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/features-4.png"
                       alt="User profile picture">  -->
                       <img src="{{ asset('uploads/profile/' . Auth::user()->profile ) }}"
                            alt="loading" class="rounded-circle" width="270" height="280" /> 
                </div>

                <h2 class="profile-username text-center"><span>{{ Auth::user()->name }} </span></h2>
           <!-- @if(Auth::user()->is_admin==1) -->
                <p class="text-muted text-center">admin</p>
           <!-- @endif -->
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>id</b> <a class="float-right">{{ Auth::user()->id }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">{{ Auth::user()->status }}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>edit</b></a> -->
              </div>
              <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->

@endsection