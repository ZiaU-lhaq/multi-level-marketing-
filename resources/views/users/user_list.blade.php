@extends('layouts.admin_layout')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>seccussfully done</p>
        </div>
    @endif
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
         <h5 class="card-title">users List</h5>
         <a  class='btn btn-info' style='float:right;margin-bottom:10px' href="../saveuser">Create New</a>
            <table id="packagetable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>password</th>
                    <th>Status</th>
                    <th>Profile</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($users as $user)
                        @if($user['is_admin']==0)
                        <tr>
                          <td>{{$user['id']}}</td>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>{{$user['is_admin']='user'}}</td>
                          <td>{{$user['password']}}</td>
                          <td>{{$user['status']}}</td>
                          <td> <img src="{{ asset('uploads/profile/' . $user->profile) }}"
                            alt="loading" width="70" height="80" /> </td>
                          <td><a href ="{{'edit_user/'.$user['id']}}"><i class="fa fa-edit"></i>Edit</a></td>
                          <td><a href="{{'delete_user/'.$user['id']}}"><i class="fas fa-user-times"></i> Delete</a></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>email</th>
                          <th>Role</th>
                          <th>password</th>
                          <th>Status</th>
                          <th>Profile</th>
                          <th>update</th>
                          <th>delete</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>
@endsection
