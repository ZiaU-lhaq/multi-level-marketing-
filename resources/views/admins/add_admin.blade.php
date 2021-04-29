@extends('layouts.admin_layout')
@section('content')
<form method="post" action='addadmin'  class="form-horizontal" enctype="multipart/form-data" style="margin:30px">
    @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add User</h4>
                                        @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Error! There is some problem with your input</strong> 
                                                    <ol>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{$error}}</li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                            @endif
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="fname"
                                                placeholder="user Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Email Adress
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" id="lname"
                                                placeholder="days here">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Admin Or User
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="is_admin" class="form-control" id="lname"
                                                placeholder="1 for admin 0 for user">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Enter Password here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="profile"
                                            class="col-sm-3 text-end control-label col-form-label">Profile</label>
                                        <div class="col-sm-9">
                                            <input type="file" name='profile' class="form-control" id="profile"
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
