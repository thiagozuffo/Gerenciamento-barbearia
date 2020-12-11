@extends('layouts.default')

@section('content')
	<h1>Tipo de Produtos</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
		<th>Nome</th>
		<th>Preço</th>
			<th>Descricao</th>
		

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($produtos as $produto)
				<tr>
				<td>{{ $produto->nome }}</td>
				<td>{{ $produto->preco }}</td>
					<td>{{ $produto->descricao }}</td>
             

					<td>
						<a href="{{ route('produtos.edit',    ['id'=>$produto->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$produto->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $produtos->links() }}

	<a href="{{ route('produtos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"produtos"
@endsection