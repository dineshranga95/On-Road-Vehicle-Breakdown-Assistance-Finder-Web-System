@extends('layouts.master2')


@section('title')
   
@endsection
        


@section('content')
<div class="container">
<div class="row justify-content-center bg-secondary">

        <div class="col-md-6">
          <div class="card bg-dark text-white" style="height:550px;">
            
            <div class="card-body ">
              <ul class="">
                @foreach ($user as $row)
                @if ($loop->first)
                <div class="row"><div class="col-md-4" style="width:150px; height:50px; top:50"><i class="now-ui-icons icon-double-left" ></i></div>
                <div class="col-md-8" style="float:left"><img src="/uploads/avatars/{{$row->avatar}} " alt="" style="width:50px; height:50px;top:0px;right:90px;border-radius:50%;margin-right:20px; " ><span>{{$row->name}}</span></div></div>
                
               
                <hr style="border: 1px solid #ccc;">
             @endif
               
                <li  style="list-style-type:none;">
                  
                  <div class="mt-3">
                 @if($row->send_by_mechanic_id==NULL)
                    <div class="col-md-10" style="float:right"> <span style="float:right"><button  class="btn btn-secondary">{{$row->description}}</button></div> 
                   @else 
                   <div class="col-md-10" style="float:left">  <img src="/uploads/avatars/{{$row->avatar}} " alt="" style="width:50px; height:50px;top:0px;right:90px;border-radius:50%; margin-right:20px;" ><span><button disabled="disabled">{{$row->description}}</button></div> 
                  @endif
                  </div>
                 
                  </li> 
                  <div class="card-footer text-muted" style="position:fixed;bottom:40px;">
                    @if ($loop->last)
                    <form action="/messagesave/{{$row->request_id}}" method="POST">
                      @csrf
                      <table class="$table" style="margin-left:100px;">
                        <tr ><td  ><textarea name="body"style="width:250px;" ></textarea></td><td><input type="submit" value="send" ></td></tr>
                      </table>
                     
                      </form>
                     
                      @endif
                  </div>
                 
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
