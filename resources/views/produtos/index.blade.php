@extends('template')

@section('content')

<div class="container">
	<h1>Produtos</h1>

	<a href="{{ url('produtos/create') }}" class="btn btn-success">+ NOVO</a>
		<table class="table">
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>DESCRICAO</th>
				<th>AÇÃO</th>
			</tr>

			@foreach($produtos as $produto)
				<tr>
					<td>{{$produto->id}}</td>
					<td>{{$produto->nome}}</td>
					<td>{{$produto->descricao}}</td>
					<td>
						<a href="{{ url('produtos/'.$produto->id.'/edit') }}" class="btn btn-warning">Editar</a>
						<a href="{{ url('produtos/'.$produto->id.'/destroy') }}" class="btn btn-danger">Excluir</a>
					</td>
				</tr>
			@endforeach
		</table>
</div>

@endsection
