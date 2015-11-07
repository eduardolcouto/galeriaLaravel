
@extends('template')
@section('content')
<div class="container">
	<h1>Alteração do Produto {{$produto->nome}}</h1>

	@if($errors->any())
			<ul class="alert alert-warning">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
	@endif

	{!! Form::open(['route' => ['produtos.update',$produto->id], 'method' => 'put']) !!}

	<div class="form-group">
		{!! Form::label('nome','Nome') !!}
		{!! Form::text('nome',$produto->nome,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descricao','Descricao') !!}
		{!! Form::textarea('descricao',$produto->descricao,['class' => 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::submit('Salvar Alterações',['class' => 'btn btn-warning']) !!}
	</div>

	{!! Form::close() !!}

	<div class="form-group">
		<form action="{{ route('produtos.upload')}}" class="dropzone">
			{!! csrf_field() !!}
			<input type="hidden" name="produto_id" value="{{ $produto->id }}">
		</form>
	</div>


</div>

@endsection
