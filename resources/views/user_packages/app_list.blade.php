@extends('layouts.user_layout')
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
                    <th>Thumbnail</th>
                    <!-- <th>Links</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($apps as $app)
                        <tr>
                          <td>{{$app['id']}}</td>
                          <td>{{$app['name']}}</td>
                          <td> <img src="{{asset('uploads/apps/' . $app->app_screenshot)}}"
                            alt="loading" width="70" height="80" /> </td>
                          <!-- <td>{{$app['link']}}</td> -->
                           <td>
                              @if(auth()->user()->status=='approved')
                                <a href ="{{$app['link']}}" ><i class="fas fa-download"></i> Download</a>
                                @else
                                          <h6 class='alert alert-danger'>
                                              your status is not approve till now you can't Download Apps
                                              <a href='../packagelistusers'>buy package</a>, Download Apps and
                                              earn lot of money
                                          </h6>
                              @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Action</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>
@endsection
