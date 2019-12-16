@extends('layouts.master1')


@section('title')
   Update profile
@endsection
        


@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary text-white"  style="margin:10px">
                <div class="card-header">{{ __('Update profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="/reg-update">
                        @csrf
                        @if(session('success'))
                        <div class="alert" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                        <div class="form-group row">
                        <label for="name"  class="col-md-4 col-form-label text-md-right text-white">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$user['name']}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right text-white">{{ __('Location') }}</label>
    
                                <div class="col-md-6">
                                    <input id="location" value="{{$user['location']}}" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
    
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" value="{{$user['email']}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                         
                        <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right text-white">{{ __('Gender') }}</label>
    
                                <div class="col-md-6">
                                <select class="form-control" name="gender">
                                  <option value="Male" >Male</option>
                                  <option value="Female" >Female</option>
                                </select>                                  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right text-white">{{ __('PHONE') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone" value="{{$user['phone']}}" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="servicetype" class="col-md-4 col-form-label text-md-right text-white">{{ __('SERVICE TYPE') }}</label>
    
                                <div class="col-md-6">
                                <select class="form-control" name="servicetype">
                                  <option value="2 wheeler" >2 wheeler</option>
                                  <option value="3 wheeler" >3 wheeler</option>
                                  <option value="4 wheeler" >4 wheeler</option>
                                  <option value="all" >all</option>
                                </select>                                  
                                </div>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                                <a href="/regrole" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
