@extends('layouts.user_layout')
@section('content')
<div class="container">
   <h3 class='jambotron col-md-4'>Your Videos Link goes here</h3>
   <div class="row">

         <div class="col-md-6 col-lg-5 col-xlg-4">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                   <iframe width="415" height="275" src="https://www.youtube.com/embed/gC0R0Zhj8ls"
                     title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                     clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
         </div>  
         <div class="col-md-6 col-lg-5 col-xlg-4">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                <iframe width="415" height="275" src="https://www.youtube.com/embed/s0vnDSwdVuE"
                   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                   clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                 </iframe>
                </div>
            </div>
         </div>  
         <div class="col-md-6 col-lg-5 col-xlg-4">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                <iframe width="415" height="275" src="https://www.youtube.com/embed/s0vnDSwdVuE"
                   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                   clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                 </iframe>
                </div>
            </div>
         </div>  
   </div>
</div>
@endsection