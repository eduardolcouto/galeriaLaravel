@extends('template')
@section('title','Novo Registro')
@section('content')
<div class="container">

<h1>Criar Nova Conta</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="form">
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email">
                    </div >

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" >Criar Conta</button>
                    </div>
                </form>     
            </div>
        </div>
    </div>
</div>
   

</div>

@endsection
