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
<form method="post" action="../edit/{{$packages['id']}}"  class="form-horizontal" style="margin:30px">
        @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add Package</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$packages['name']}}" name="name" class="form-control" id="fname"
                                                placeholder="package Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Days
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="days" value="{{$packages['days']}}"  class="form-control" id="lname"
                                                placeholder="days here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Price
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="price" value="{{$packages['price']}}"  class="form-control" id="lname"
                                                placeholder="price here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">ROI persentage
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ROI_persentage" value="{{$packages['ROI_persentage']}}"  class="form-control" id="lname"
                                                placeholder="roi persentage">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Binary Persentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="binary_persentage"  value="{{$packages['binary_persentage']}}" class="form-control" id="email1"
                                                placeholder="binary persentage">
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
