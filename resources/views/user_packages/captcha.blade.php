@extends('layouts.user_layout')
@section('content')
<form method="post" action="{{url('captcha-validation')}}"  class="form-horizontal" style="margin:30px">
    @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Captcha</h4>
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
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                {{$message}}
                                                </div>
                                            @endif
                                    
                                     @if(auth()->user()->status=='approved')
                                        <div class="form-group row ">
                                            <div class="captcha">
                                                    <span>
                                                            {!! captcha_img() !!}
                                                    </span>
                                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                     Reload &#x21bb;
                                                    </button>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                        </div>
                                         @else
                                            <h6 class='alert alert-danger'>
                                                    your status is not approve till now you can't see
                                                    Captcha <a href='../packagelistusers'>buy package</a>
                                                    ,see Captcha and earn lot of money
                                             </h6>
                                     @endif
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                            </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
    

</script>
@endsection