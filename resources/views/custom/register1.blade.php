@extends('layouts.master2')


@section('title')
   Registered Mechanics
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-12">
          <div class="card">
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
                <table class="table">
                  <thead class=" text-primary">
                      
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
                   
                  </thead>
                  <tbody>
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

    