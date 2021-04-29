@extends('layouts.admin_layout')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
           {{$message}}
        </div>
    @endif
<div class="card">
     <div class="card-body">
       <div class="table-responsive">
         <h5 class="card-title">apps List</h5>
       <a  class='btn btn-info' style='float:;margin-bottom:10px' href="../saveapp">Create New app</a>
            <table id="apptable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>App Thumbnail</th>
                    <th>Links</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($apps as $app)
                        <tr>
                          <td>{{$app['id']}}</td>
                          <td>{{$app['name']}}</td>
                          <td> <img src="{{asset('uploads/apps/' . $app->app_screenshot)}}"
                            alt="loading" width="70" height="80" /> </td>
                          <td>{{$app['link']}}</td>
                          <td><a href ="{{'edit/'.$app['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                          <td><a href="{{'delete/'.$app['id']}}"><i class="fas fa-trash-alt"></i> delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>App Thumbnail</th>
                            <th>Links</th>
                            <th>update</th>
                            <th>delete</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>
@endsection
