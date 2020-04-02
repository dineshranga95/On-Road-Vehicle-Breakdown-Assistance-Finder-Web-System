@extends('layouts.master2')


@section('title')
   user profile
@endsection
        


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white"  >
                <div class="card-header text-warning mt-3" style="font-size:25px;">{{ __('UPDATE PROFILE') }}</div>

                <div class="card-body mt-4" style="font-size:16px;">
                    <form method="POST" action="/update">
                        @csrf
                        @if(session('success'))
                        <div class="alert " role="alert" style="color:red;">
                            {{session('success')}}
                        </div>
                        @endif
                        <div class="form-group row ml-2">
                        <label for="name"  class="col-md-4 col-form-label  text-white">{{ __('NAME') }}</label>

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
                                <a href="/profile2" class="btn btn-danger">CANCEL</a>
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

    