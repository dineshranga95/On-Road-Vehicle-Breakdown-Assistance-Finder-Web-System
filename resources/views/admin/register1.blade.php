@extends('layouts.master')


@section('title')
   Registered Mechanics
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-12">
          <div class="card bg-dark text-white">
            <div class="card-header">
              <h4 class="card-title">Registered Mechanics</h4>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table text-center">
                  <thead class=" text-primary">
                      <th>
                          ID
                        </th>
                    <th>
                      NAME
                    </th>
                    <th>
                      LOCATION
                    </th>
                    <th>
                      EMAIL
                    </th>
                    <th>
                    USER TYPE
                    </th>
                    <th>
                     GENDER 
                    </th>
                    <th>
                      PHONE
                     </th>
                     <th>
                      SERVICE TYPE
                     </th>
                   
                  </thead>
                  <tbody>
                      @foreach ($user as $row)
                          
                     
                    <tr>
                      <td>
                         {{ $row->id}}
                     </td>
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
                       {{ $row->usertype}}
                      </td>
                       <td>
                        {{ $row->gender}}
                       </td>
                       <td>
                        {{ $row->phone}}
                       </td>
                       <td >
                        {{ $row->servicetype}}
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

    