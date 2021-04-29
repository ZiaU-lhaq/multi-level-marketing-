@extends('layouts.admin_layout')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>all fields are require</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post" action="/edit_admin/{{$admins['id']}}"  class="form-horizontal" enctype="multipart/form-data" style="margin:30px">
    @csrf
                           <input type="hidden" name='id' id="{{$admins['id']}}">
                                <div class="card-body">
                                    <h4 class="card-title">Add Admin</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$admins['name']}}" name="name" class="form-control" id="fname"
                                                placeholder="user Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Email Adress
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$admins['email']}}" name="email" class="form-control" id="email"
                                                placeholder="days here">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Admin Or User
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$admins['is_admin']}}" name="is_admin" class="form-control" id="is_admin"
                                                placeholder="1 for admin 0 for user">
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" value="{{$admins['password']}}"  name="password" class="form-control" id="password"
                                                placeholder="Enter Password here">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="profile"
                                            class="col-sm-3 text-end control-label col-form-label">Profile</label>
                                        <div class="col-sm-9">
                                            <input type="file" value="{{$admins['profile']}}" name='profile' class="form-control" id="profile"
                                                placeholder="profile Pic Here">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
@endsection
