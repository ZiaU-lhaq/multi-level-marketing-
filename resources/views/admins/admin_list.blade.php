@extends('layouts.admin_layout')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
         <h5 class="card-title">Admins List</h5>
         <a  class='btn btn-info' style='float:right;margin-bottom:10px' href="../saveadmin">Create New</a>
            <table id="packagetable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>password</th>
                    <th>Profile</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($admins as $admin)
                        @if($admin['is_admin']==1)
                        <tr>
                          <td>{{$admin['id']}}</td>
                          <td>{{$admin['name']}}</td>
                          <td>{{$admin['email']}}</td>
                          <td>{{$admin['is_admin']='admin'}}</td>
                          <td>{{$admin['password']}}</td>
                          <td> <img src="{{ asset('uploads/profile/' . $admin->profile) }}"
                            alt="loading" width="70" height="80" /> </td>
                          <td><a href ="{{'edit_admin/'.$admin['id']}}"><i class="fa fa-edit"></i>Edit</a></td>
                          <td><a href="{{'delete_admin/'.$admin['id']}}"><i class="fas fa-user-times"></i> Delete</a></td>
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
