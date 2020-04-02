@extends('layouts.master2')


@section('title')
  request
@endsection
        


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  >
                <div class="card-header text-success mt-2" style="font-size:28px;"><b>{{ __('REQUESTING') }}  " {{$user->name}}"</b> </div>

                <div class="card-body mt-4" style="font-size:20px;">
            <form action="/saverequest" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label for="" class="col-form-label" style="color:black;">MECHANIC ID:</label>
                <input type="text" name="id" class="form-control" id="" value="{{$user->id}} ">
              </div>
                <div class="form-group">
                  <label for="" class="col-form-label" style="color:black;">MECHANIC NAME:</label>
                  <input type="text" name="name" class="form-control" id="" value="{{$user->name}} ">
                </div>
                <div class="form-group">
                    <label for="" class="col-form-label" style="color:black;">MECHANIC EMAIL ADDRESS:</label>
                    <input type="text" class="form-control" id="" value="{{$user->email}} " name="email">
                  </div>
                  <div class="form-group">
                    <label for="" class="col-form-label" style="color:black;">REQUIRED SERVICE : </label>
                    
                        <select value="" type="text" class="text-black bg-white form-control @error('servicetype') is-invalid @enderror" name="servicetype" value="{{ old('servicetype') }}" required autocomplete="servicetype" >                          
                          <option value="{{$user->servicetype}}" >{{$user->servicetype}}</option>
                          <option value="2 Wheeler" >2 Wheeler</option>
                          <option value="3 Wheeler" >3 Wheeler</option>
                          <option value="4 Wheeler" >4 Wheeler</option>
                          <option value="All" >All</option>
                        </select>                                  
                        
                  </div>
                  <div class="form-group">
                    <label for="" class="col-form-label" style="color:black;">USER ADDRESS:</label>
                    <input type="text" class="form-control" id="recipient-name " name="address" required>
                  </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label " style="color:black;"> DESCRIPTION ABOUT REQUIRED SERVICE</label>
                  <textarea class="form-control" id="message-text" name="description" required></textarea>
                </div>
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('REQUEST') }}
                      </button>
                      <a href="/melist" class="btn btn-danger">CANCEL</a>
                  </div>
              </div>
              </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection

    