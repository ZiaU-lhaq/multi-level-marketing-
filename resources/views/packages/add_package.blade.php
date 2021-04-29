@extends('layouts.admin_layout')
@section('content')
<form method="post" action='addpackage'  class="form-horizontal" style="margin:30px">
    @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add Package</h4>
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
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="package Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Days
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="days" class="form-control" id="days"
                                                placeholder="days here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">price
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="price here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">ROI persentage
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ROI_persentage" class="form-control" id="lname"
                                                placeholder="roi persentage">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Binary Persentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="binary_persentage" class="form-control" id="email1"
                                                placeholder="binary persentage">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select name="status">
                                                <option value="approved">approved</option>
                                                <option value="pending">pending</option>
                                                <option value="processing">processing</option>
                                                <option value="disapprove">disapprove</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
@endsection
