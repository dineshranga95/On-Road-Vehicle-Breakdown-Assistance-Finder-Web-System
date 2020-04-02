@extends('layouts.master1')


@section('title')
  
@endsection
        


@section('content')

<div class="row bg-dark">
    <div class="col-md-12">
      <div class="card bg-dark text-white">
        <div class="card-header text-warning">
          <div style="float:left;"><h4 class="card-title">REQUESTED USERS </h4></div>
          
        </div>
        <div class="card-body ">
          
          <div class="table-responsive">
           
            <table class="table text-center">
              <thead class="text-primary">
                  
                <th>
                   USER NAME
                </th>
                <th>
                  USER EMAIL
                </th>
               
                <th>
                  REQUESTED TIME/   <br>
                  APPROVED TIME
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
                      {{ $row->email}}
                   </td>
                 
                   <td>
                    {{ $row->updated_at}}
                   </td>
                  
                 <td>
                 <a href="/approve/{{$row->id}}" class="btn btn-danger" >Approve </a>
                
               </td>
               <td>
               
                     
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

    