@extends('layouts.master2')


@section('title')
   Dashboard || Customer
@endsection



@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row justify-content-center mb-3 mt-3" >
        <div class="col-10"style="font-size:60px; text-align:center;">
            ON ROAD VEHICLE REPAIR
        </div>                   
        </div>    
      <div class="card-header">
        <h4 class="card-title"> Welcome To The  Quality, Functionality And Guaranteed Web System</h4>
      </div>
      <div class="card-body">
                             
        <div class="row justify-content-center" >
          <div class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="11.jpg" alt="" width="100%" height="90%" class="d-block" >  
              </div>
              <div class="carousel-item active">
                <img src="10.jpg" alt="" width="100%" height="90%" class="d-block" >  
              </div>
                     
       </div>  
         <a href="#exampleController" class="carousel-control-prev" data-slide="prev">
           <span class="carousel-control-prev-icon"></span>
        </a>  
        <a href="#exampleController" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
       </a>              
      </div>
    </div>
  </div>
</div>  


@endsection


@section('scripts')

@endsection

    
 