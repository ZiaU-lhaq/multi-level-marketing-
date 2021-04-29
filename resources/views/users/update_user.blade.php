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
<form method="post" action="/edit_user/{{$users['id']}}"  enctype="multipart/form-data"  class="form-horizontal" style="margin:30px">
    @csrf
                           <input type="hidden" name='id' id="{{$users['id']}}">
                                <div class="card-body">
                                    <h4 class="card-title">Add User</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$users['name']}}" name="name" class="form-control" id="fname"
                                                placeholder="user Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Email Adress
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$users['email']}}" name="email" class="form-control" id="email"
                                                placeholder="days here">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Admin Or User
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$users['is_admin']}}" name="is_admin" class="form-control" id="is_admin"
                                                placeholder="1 for admin 0 for user">
                                        </div>
                                    </div> -->
                                 <!-- <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" value="{{$users['password']}}"  name="password" class="form-control" id="password"
                                                placeholder="Enter Password here">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="status"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                        <select name="status" class="form-control">
                                                <option value="processing">processing</option>
                                                <option value="pending">pending</option>
                                                <option value="approved">approved</option>
                                                <option value="disapprove">disapprove</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="profile"
                                            class="col-sm-3 text-end control-label col-form-label">Profile</label>
                                        <div class="col-sm-9">
                                            <input type="file" value="{{ asset('uploads/profile/' . $users->profile) }}" name='profile' class="form-control" id="profile"
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
