@extends('layouts.master1')


@section('title')
   Registered Mechanics
@endsection
        


@section('content')

<div class="row bg-dark">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Profile</h4>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  
                  <tbody>                 
                     
                    <tr>
                      <th>
                         NAME
                     </th>
                      <td>
                        {{ Auth::user()->name }}
                      </td>
                    </tr>
                    <tr>
                      <th>
                        EMAIL
                    </th>
                     <td>
                       {{ Auth::user()->email }}
                     </td>
                    </tr>
                    <tr>
                     <th>
                        LOCATION
                    </th>
                     <td>
                       {{ Auth::user()->location }}
                     </td>
                                           
                    </tr>
                    <tr>
                    <th>
                       GENDER
                    </th>
                    <td>
                    {{ Auth::user()->gender }}
                    </td>                      
                    </tr>
                   <tr> 
                        <td class="text-right">
                        <a href="/regrole-add" class="btn btn-success">add</a>
                      </td>
                      <td class="">
                            <a href="" class="btn btn-success">update</a>
                          </td>
                    </tr>
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

    