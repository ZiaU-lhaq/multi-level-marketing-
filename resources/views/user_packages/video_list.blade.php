@extends('layouts.user_layout')
@section('content')
<div class="card">
     <div class="card-body">
       <div class="table-responsive">
         <h5 class="card-title">videos List</h5>
            <table id="videotable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr>
                          <td>{{$video['id']}}</td>
                          <td>{{$video['name']}}</td>
                          <td>{{$video['description']}}</td>
                          <td>
                               @if(auth()->user()->status=='approved')
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xlg-6">
                                        <div class="card card-hover">
                                            <div class="box bg-info text-center">
                                                    <iframe class="col-sm-12 col-md-12 col-lg-12 col-xlg-9" src="{{$video['link']}}"
                                                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                    </iframe>
                                        </div>
                                        </div>
                                    </div>
                                    @else
                                        <h6 class='alert alert-danger'>
                                            your status is not approve till now you cann't see video
                                            <a href='../packagelistusers'>buy package</a>,see video and
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
                            <th>description</th>
                            <th>Action</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>
@endsection
