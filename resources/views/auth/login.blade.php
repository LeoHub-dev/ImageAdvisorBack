@extends('layouts.app')

@section('content')
<div class="col-md-4 ml-auto mr-auto">
    
        <div class="card card-login card-plain">
            <div class="card-header ">
                Login
            </div>

            <div class="social text-center" style="clear:both">
                    <h5 class="card-description">
                        Conectate con las redes
                    </h5>
                    <a href="{{ url('login/google') }}">
                    <button class="btn btn-google">
                        <i class="fab fa-google-plus-g">
                        </i> Conectar con Google
                    </button>
                    </a>
                    <a href="{{ url('login/facebook') }}">
                    <button class="btn btn-facebook">
                        <i class="fab fa-facebook-square">
                        </i> Conectar con Facebook
                    </button>
                    </a>
                    
                </div>

            <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="input-group no-border form-control-lg">
                    <span class="input-group-prepend">
                        <div class="input-group-text">
                            Email
                        </div>
                    </span>
                    <input id="email" type="email" placeholder="Email ..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    
                </div>
                <div class="input-group no-border form-control-lg">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Password
                        </div>
                    </div>
                    <input id="password" type="password" placeholder="Password ..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                </div>

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                      <span>{{ $error }}</span>
                    </div>
                @endforeach
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">
                    {{ __('Login') }}
                </button>

 
                <a href="{{ route('register') }}">
                    Crear Cuenta
                </a>
       
 
            </div>
            </form>
            
            
        </div>
    
</div>
@endsection
