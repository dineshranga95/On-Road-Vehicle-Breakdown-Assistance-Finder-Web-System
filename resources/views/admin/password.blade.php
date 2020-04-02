@extends('layouts.master')


@section('title')
   change password
@endsection
        


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white"  >
                <div class="card-header text-warning mt-3" style="font-size:25px;">{{ __('CHANGE PASSWORD') }}</div>

                <div class="card-body mt-4" style="font-size:16px;">
                    <form method="POST" action="/pwdadmin">
                        @csrf
                        @if(session('success'))
                        <div class="alert " role="alert" style="color:red;">
                            {{session('success')}}
                        </div>
                        @endif
                        <div class="form-group row ml-2">
                        <label   class="col-md-4 col-form-label  text-white">{{ __('CURRENT PASSWORD') }}</label>

                            <div class="col-md-7">
                                <input id="password" value="" type="password" class="text-black bg-white form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror  
                            </div>
                        </div>
                        <div class="form-group row ml-2 pt-2">
                            <label   class="col-md-4 col-form-label  text-white">{{ __('NEW PASSWORD') }}</label>
    
                                <div class="col-md-7">
                                    <input id="new" value="{{Auth::user()->new}}" type="password" class="text-black bg-white form-control @error('new') is-invalid @enderror" name="new" value="{{ old('new') }}" required autocomplete="new">
                                    @error('new')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-2 pt-2">
                                <label   class="col-md-4 col-form-label  text-white">{{ __('CONFIRM PASSWORD') }}</label>
        
                                    <div class="col-md-7">
                                        <input id="confirm" value="{{Auth::user()->confirm}}" type="password" class="text-black bg-white form-control @error('confirm') is-invalid @enderror" name="confirm" value="{{ old('confirm') }}" required autocomplete="confirm">
                                        @error('confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                    
                           
                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('CHANGE') }}
                                </button>
                                <a href="/changepwdadmin" class="btn btn-danger">CANCEL</a>
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

    