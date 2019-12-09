@extends('layouts.master')


@section('title')
   Registered Roles |Funda of web IT
@endsection
        


@section('content')
<div class="container">
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Edit Roles For Registered Users</h4>
            </div>
            <div class="card-body">
           <div class="row">
               <div class="col-md-6">
                    <form action="/update-register/{{$user->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-group">
                                    <label>Name</label>
                            <input type="text" class="form-control" name="username" value="{{$user->name}}">
                             </div>
                             <div class="form-group">
                                    <label>Give Role</label>
                                  <select name="usertype" class="form-control" >
                                      <option value="admin">Admin</option>
                                      <option value="customer">Customer</option>
                                      <option value="mechanic">Mechanic</option>
                                  </select>
                             </div>
                             <button type="submit" class="btn btn-success">Update</button>
                             <a href="/reg-role" class="btn btn-danger">Cancel</a>
                      </form> 
               </div>
           </div>
                </div>    
            </div>
          </div>
        </div>
      </div>  

@endsection


@section('scripts')

@endsection

    