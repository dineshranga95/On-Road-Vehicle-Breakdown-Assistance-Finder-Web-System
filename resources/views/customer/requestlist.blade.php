@extends('layouts.master2')


@section('title')
   
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-12">
          <div class="card bg-dark text-white">
            <div class="card-header">
              <div style="float:left;"><h4 class="card-title">Requested Mechanics </h4></div>
              
            </div>
            <div class="card-body ">
              
              <div class="table-responsive">
               
                <table class="table text-center">
                  <thead class="text-primary">
                      
                    <th>
                     MECHANIC NAME
                    </th>
                   
                    <th>
                        MECHANIC EMAIL
                    </th>
                    <th>
                      REQUESTED TIME
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
                          {{ $row->mechanic_email}}
                       </td> 
                       <td>
                        {{ $row->updated_at}}
                     </td> 
                      
                      <td>
                        @if( $row->Is_requested)
                       <button class="btn btn-success">Requested</button>
                      @else
                      <button class="btn btn-warning">Not Requested</button>
                     @endif
                     </td>
                     <td>
                       @if( $row->Is_requested)
                     <a href="/markasnotrequested/{{$row->id}}" class="btn btn-danger">Mark As Not Requested </a>
                     @else
                     <a href="/markasrequested/{{$row->id}}" class="btn btn-primary">Mark As Requested </a>
                      @endif
                   </td>
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
