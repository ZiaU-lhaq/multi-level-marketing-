@extends('layouts.admin_layout')
@section('content')
<form method="post" action='addapp' enctype="multipart/form-data"  class="form-horizontal" style="margin:30px">
    @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add app</h4>
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
                                        <label for="name"  class="col-sm-3 text-end control-label col-form-label">Name
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="name here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name"  class="col-sm-3 text-end control-label col-form-label">App Screenshot
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="app_screenshot" class="form-control" id="app_screenshot"
                                                placeholder="app thumbnail here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link"  class="col-sm-3 text-end control-label col-form-label">Link
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="link" class="form-control" id="link"
                                                placeholder="link here">
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
