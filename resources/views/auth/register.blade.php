@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:80px;">
        <div class="col-md-6">
            <div class="card">
                
                <center> 
                    <img src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="Laravel 9 CMS" class="brand-image  elevation-3" style="border-radius:3px; margin-top:30px; height:120px;">
                </center>
               
                <div class="card-header card-info text-center">
                    
                    <hr>
                
                    <h3 style="font-family: Helvetica, Arial, sans-serif;">
                        {{ env('APP_NAME') }}
                    </h3>
                    
                </div>
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <input id="role" type="hidden" name="role" value="1">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 card-footer">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                
                            </div>
                            
                            <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('login') }}" style="float:right;">
                                    {{ __('Alreary have an Account?') }}
                                </a>
                            </div>
                            
                        </div>
                            
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
