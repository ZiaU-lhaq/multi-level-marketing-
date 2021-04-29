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
<form method="post" action="../edit/{{$apps['id']}}" enctype="multipart/form-data" class="form-horizontal" style="margin:30px">
        @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add app</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$apps['name']}}" name="name" class="form-control" id="fname"
                                                placeholder="app Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">app Screenshot</label>
                                        <div class="col-sm-9">
                                            <input type="file" value="{{$apps['app_screenshot']}}" name="app_screenshot" class="form-control" id="fname"
                                                placeholder="app screenshot Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"  class="col-sm-3 text-end control-label col-form-label">Link
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="link" value="{{$apps['link']}}"  class="form-control" id="link"
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
