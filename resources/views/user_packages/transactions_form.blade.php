@extends('layouts.user_layout')
@section('content')
<div class="container">

<h3>EasyPaisa Account Number</h3>
<h3>bank Account Number</h3>
<pre>after Secussfull Payment take screenshort and Whatsupp Us
         0123 1112223
         0123 1112223
</pre>
<!-- <button id='easypisa' class='btn btn-primary'>pay via easypisa</button>
<button id='bankaccount' class='btn btn-primary'>pay via bank account</button> -->
<form id='easypaisa_form' class="form-horizontal" method='post'  enctype="multipart/form-data" action='addtransection'>
    @csrf

                                <div class="card-body">
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
                                            
                                    <h4 class="card-title">Payment Info</h4>
                                    <div class="form-group row">
                                        <label for="name" 
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                                <input type="textbox" value="{{ Auth::user()->name }}" class="form-control" name='name' readonly="readonly"/>
                                                <!-- <select class="form-control" name="name" id="">
                                                    <option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>
                                                </select> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" 
                                            class="col-sm-3 text-end control-label col-form-label">email</label>
                                        <div class="col-sm-9">
                                                <input type="textbox" value="{{ Auth::user()->email }}" class="form-control" name='email' readonly="readonly"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" 
                                            class="col-sm-3 text-end control-label col-form-label">User Id</label>
                                        <div class="col-sm-9">
                                                <input type="textbox" value="{{ Auth::user()->id }}" class="form-control" name='user_id' readonly="readonly"/>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="account_number"  class="col-sm-3 text-end control-label col-form-label">Price
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name='price' class="form-control" id="price"
                                                placeholder="price Here"  readonly="readonly">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="account_number"  class="col-sm-3 text-end control-label col-form-label">easypaisa_number
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name='account_number' class="form-control" id="account_number"
                                                placeholder="account_number Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" 
                                            class="col-sm-3 text-end control-label col-form-label">trx-id</label>
                                        <div class="col-sm-9">
                                            <input type="text" name='trx_id' class="form-control" id="trx_id"
                                                placeholder="trx_id Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="screenshot"
                                            class="col-sm-3 text-end control-label col-form-label">screenshot</label>
                                        <div class="col-sm-9">
                                            <input type="file" name='screenshot' class="form-control" id="screenshot"
                                                placeholder="Screenshort Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name='contact'  class="form-control" id="cono1"
                                                placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name='message' ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// $(document).ready(function{

// $("#easypaisa").click(function(){
//   $("#easypaisa_form").hide();
// });

// $("#bankaccount").click(function(){
//   $("#easypaisa_form").show();
// });
// });
</script>
@endsection
