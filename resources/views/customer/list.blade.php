@extends('layouts.master2')


@section('title')
   Registered Mechanics
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-12">
          <div class="card bg-dark text-white">
            <div class="card-header">
              <div style="float:left;"><h4 class="card-title">Registered Mechanics </h4></div>
              <div class="col-md-6  " style="float:right;">
                <form action="/search" method="get" role="search">
                  {{csrf_field()}}
                  
                  <div class="input-group" >
                   <div style="float:left ;" class="col-md-8 mt-2"> <input type="search" class="form-control" name="search" placeholder="choose your location......"></div>
                    <span class="input-group-prepend " style="float:right;" >
                      <button type="submit" class="btn btn-primary ">SEARCH</button>
                    </span>
                   </div>
                  
                  </div>
                  @if(session('success'))
                  <div class="alert " role="alert" style="color:red; float:left">
                      {{session('success')}}
                      
                      @endif
                </form>
              </div>     
             
         
            </div>
            <div class="card-body ">
              
              <div class="table-responsive">
               
                <table class="table text-center">
                  <thead class="text-primary">
                      
                    <th>
                        Name
                    </th>
                    <th>
                      Location
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                   Service Type
                    </th>
                    <th>
                     Phone
                    </th>
                    <th>
                      Gender 
                     </th>
                     <th>
                      REQUESTED
                      </th>
                     <th>
                     ACTION
                 
                     </th>
                    
                  </thead>
                  <tbody class="text-white">
                      @foreach ($user as $row)
                    <tr>
                     
                      <td>
                     {{ $row->name}}
                      </td>
                      <td>
                        {{ $row->location}}
                         </td>
                      <td>
                          {{ $row->email}}
                       </td>
                      <td>
                       {{ $row->servicetype}}
                      </td>
                       <td>
                        {{ $row->phone}}
                       </td>
                       <td>
                        {{ $row->gender}}
                       </td>
                      
                       <td>
                        @if($row->Is_requested )
                       <button class="btn btn-success">Requested</button>
                      @else
                      <button class="btn btn-warning">Not Requested</button>
                     @endif
                     </td>
                     <td>
                       @if($row->Is_requested)
                     <a href="/markasnotrequested/{{$row->id}}" class="btn btn-danger">Mark As Not Requested </a>
                     @else
                     <a href="/markasrequested/{{$row->id}}" class="btn btn-primary">Mark As Requested </a>
                      @endif
                   </td>
                       </div>
                    </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>  

@endsection


@section('scripts')

@endsection

    