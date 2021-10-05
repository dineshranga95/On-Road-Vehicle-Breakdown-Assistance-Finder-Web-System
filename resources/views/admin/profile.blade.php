@extends('layouts.master')


@section('title')
   user profile
@endsection
        


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white"  >
                <img src="/uploads/avatars/{{auth::user()->avatar}} " alt="" style="width:200px; height:200px; float:left;border-radius:50%;margin:20px 40px 0px;" >
               <h2 class="text-warning mtn"  style="margin: 50px 0 0 0;padding: 0 0 0 0;">{{auth::user()->name}}'s profile </h2>

                <div class="card-body" style="font-size:16px;">
                    <form method="POST" action="/adminupdate" enctype="multipart/form-data">
                        @csrf
                        
                        <label for="" class="text-white">Update Profile Image</label>
                        <input type="file" name="avatar" >
                        
                        @if(session('success'))
                        <div class="alert justify-content-center" role="alt" style="color:red;">
                            {{session('success')}}
                        </div>
                        @endif 
                        <div class="pt-xl-5">
                        <div class="form-group row ml-2 mt-5">
                        <label for="name"  class="col-md-4 col-form-label text-white">{{ __('NAME') }}</label>

                            <div class="col-md-7">
                                <input id="name" value="{{Auth::user()->name}}" type="text" class="text-black bg-white form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-2">
                                <label for="location" class="col-md-4 col-form-label  text-white">{{ __('LOCATION') }}</label>
    
                                <div class="col-md-7">
                                    <input id="location" value="{{Auth::user()->location}}" type="text" class="text-black bg-white form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
    
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row ml-2">
                            <label for="email" class="col-md-4 col-form-label  text-white">{{ __('EMAIL ADDRESS') }}</label>

                            <div class="col-md-7">
                                <input id="email" value="{{Auth::user()->email}}" type="email" class="text-black bg-white form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                         
                        <div class="form-group row ml-2">
                                <label for="gender" class="col-md-4 col-form-label  text-white">{{ __('GENDER') }}</label>
    
                                <div class="col-md-7">
                                <select value="{{Auth::user()->gender}}" type="text" class="text-black bg-white form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                    <option value="{{Auth::user()->gender}}" >{{Auth::user()->gender}}</option>
                                    <option value="Male" >Male</option>
                                  <option value="Female" >Female</option>
                                </select>                                  
                                </div>
                            </div>
                            <div class="form-group row ml-2">
                                <label for="" class="col-md-4 col-form-label  text-white">{{ __('REGESTRATION DATE') }}</label>
    
                                <div class="col-md-7">
                                    <input id="" value="{{Auth::user()->created_at}}" type="" class="text-black bg-white form-control">
    
                                   
                                </div>
                            </div>
                           
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('UPDATE') }}
                                </button>
                                <a href="/profile1" class="btn btn-danger">CANCEL</a>
                            </div>
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

    