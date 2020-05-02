@extends('layouts.master1')


@section('title')
   
@endsection
        


@section('content')
<div class="container">
<div class="row justify-content-center bg-secondary">

        <div class="col-md-8">
          <div class="card ">
            <div class="card-header mb-5">
              <div style="float:left;"><h4 class="card-title"> </h4></div>
              
            </div>
            <div class="card-body" >
              <table class="$table">
                @foreach ($user as $row)
                <tr >
                  <td rowspan="2" style="padding-top:20px;padding-left:30px;">
                    <img src="/storage/avatars/{{$row->avatar}} " alt="" style="width:80px; height:80px;top:0px;right:90px;border-radius:50%; margin-right:50px;" >
                  </td>
                  <td style="font-size:25px;padding-right:180px; vertical-align:bottom"><a href="/usermessage/{{$row->user_id}}" style="text-decoration:none">{{$row->name}}</a></td>
                  <td rowspan="2" >{{$row->updated_at}}</td>
                </tr>
                <tr >
                  <td style=";">{{$row->description}}</td>
                </tr>
                @endforeach
              </table>
               
            </div>
          </div>
        </div>
             
             
      </div>  

    </div>   

@endsection


@section('scripts')

@endsection
