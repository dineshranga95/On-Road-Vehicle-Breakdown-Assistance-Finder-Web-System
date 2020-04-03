@extends('layouts.master2')


@section('title')
   
@endsection
        


@section('content')
<div class="container">
<div class="row justify-content-center bg-secondary">

        <div class="col-md-8">
          <div class="card bg-dark text-white">
            <div class="card-header mb-5">
              <div style="float:left;"><h4 class="card-title"> </h4></div>
              
            </div>
            <div class="card-body ">
              <ul class="">
                @foreach ($user as $row)
                <li class="{{'' ==request()->path() ?'active' :''}}" style="list-style-type:none;">
                  
                  <div class="mt-3">
                 
                    <div class="col-md-12"> {{$row->name}} </div>  
                    <div class="col-md-10">{{$row->description}}</div> 
                    
                 
                  </div>
                 
                  </li>
                  @endforeach
                </ul>
            </div>
          </div>
        </div>
             
             
      </div>  

    </div>   

@endsection


@section('scripts')

@endsection
