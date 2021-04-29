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
         <h5 class="card-title">Packages List</h5>
       <a  class='btn btn-info' style='float:;margin-bottom:10px' href="../savepackage">Create New Package</a>
            <table id="packagetable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Days</th>
                    <th>Price</th>
                    <th>ROI Persentage</th>
                    <th>Binary Persentage</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($packages as $package)
                        <tr>
                          <td>{{$package['id']}}</td>
                          <td>{{$package['name']}}</td>
                          <td>{{$package['days']}}</td>
                          <td>{{$package['price']}}</td>
                          <td>{{$package['ROI_persentage']}}</td>
                          <td>{{$package['binary_persentage']}}</td>
                          <td><a href ={{'edit/'.$package['id']}}><i class="fas fa-edit"></i> Edit</a></td>
                          <td><a href={{'delete/'.$package['id']}}><i class="fas fa-trash-alt"></i> delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Days</th>
                            <th>price</th>
                            <th>ROI Persentage</th>
                            <th>Binary Persentage</th>
                            <th>update</th>
                            <th>delete</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>
@endsection
