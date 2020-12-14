@extends('layouts.default')

@section('content')
	<h1>Serviços</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
		<th>Nome</th>
		<th>Preço</th>
			<th>Descricao</th>
		

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($servicos as $servico)
				<tr>
				<td>{{ $servico->nome }}</td>
				<td>{{ $servico->preco }}</td>
					<td>{{ $servico->descricao }}</td>
             

					<td>
						<a href="{{ route('servicos.edit',    ['id'=>$servico->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$servico->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $servicos->links() }}

	<a href="{{ route('servicos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"servicos"
@endsection