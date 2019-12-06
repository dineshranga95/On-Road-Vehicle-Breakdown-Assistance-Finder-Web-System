@extends('layouts.master')


@section('title')
   Registered Customers
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">
              <h4 class="card-title">Registered Customers</h4>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                      <th >
                        Id
                        </th>
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
                    Usertype
                    </th>
                    <th>
                     Gender 
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

    