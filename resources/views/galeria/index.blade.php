@extends('template')
@section('title', 'Minha Galeria')

@section('nav')
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header"></div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-user"></span> 		
						{{Auth::user()->name}}
						 <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{url('auth/logout')}}">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div> 	

	</div>
</nav> 	
@endsection

@section('content')
<h1>Minha Galeria</h1>

<div class="row">
	<div class="col-md-8">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>NOME Galeria</th>
				<th>AÇÃO</th>
			</tr>

			@foreach($galerias as $galeria)
				<tr>
					<td>{{$galeria->id}}</td>
					<td>{{$galeria->nome_galeria}}</td>
					<td>
						<a href="{{ url('galeria/'.$galeria->id.'/view') }}" class="btn btn-warning btn-flat">Abrir</a>
						<a href="{{ url('galeria/'.$galeria->id.'/destroy') }}" class="btn btn-danger btn-flat">Excluir</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
	<div class="col-md-4">
		
		<div class="form-inline">
			{!! Form::open(['route' => 'galeria.store']) !!}

				<div class="form-group">
					{!! Form::text('nome_galeria',null,['class' => 'form-control floating-label', 'placeholder' => 'Nome da Galeria']) !!}
					{!! Form::hidden('user_id',Auth::user()->id) !!}
				</div>
				
				<div class="form-group">
					{!! Form::submit('Criar',['class' => 'btn btn-primary btn-flat']) !!}
				</div>
			
			{!! Form::close() !!}
			</div>
	</div>
</div>

@endsection
