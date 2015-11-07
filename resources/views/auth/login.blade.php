@extends('template')
@section('title','Login de Acesso')
@section('content')
<div class="container">

<h1>LOGIN</h1>
<div class="row">
    <div class="col-md-12">
    <div class="form">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

            <div class="form-group">
                <!--<label for="email"> Email  </label> -->
                    <input type="email" placeholder="E-mail" name="email" name="id"  value="{{ old('email') }}" class="form-control floating-label">    
            </div>

            <divclass="form-group">
                <!--<label for="password">Password </label>-->
                    <input type="password" placeholder="Password" name="password" id="password" class="form-control floating-label">                    
            </div>

            <div class="checkbox">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember" > 
                     Remember Me  
                 </label>
                    
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Login</button>
                ou
                <a href="{{ url('auth/register') }}" class="btn btn-warning">Crie uma conta</a>
            </div>
        </form> 
        </div>
    </div>
</div>
   

</div>

@endsection