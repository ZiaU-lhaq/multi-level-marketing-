@extends('layouts.admin_layout')
@section('content')
<div class="card">
     <div class="card-body">
       <div class="table-responsive">
         <h5 class="card-title">videos List</h5>
       <a  class='btn btn-info' style='float:;margin-bottom:10px' href="../savevideo">Create New video</a>
            @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      {{$message}}
                    </div>
                @endif
            <table id="videotable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>video description</th>
                    <th>Links</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr>
                          <td>{{$video['id']}}</td>
                          <td>{{$video['name']}}</td>
                          <td>{{$video['description']}}</td>
                          <td>{{$video['link']}}</td>
                          <td><a href ="{{'edit/'.$video['id']}}"><i class="fas fa-edit"></i> Edit</a></td>
                          <td><a href="{{'delete/'.$video['id']}}"><i class="fas fa-trash-alt"></i> delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>video description</th>
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
