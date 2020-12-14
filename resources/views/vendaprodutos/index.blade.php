@extends('layouts.default')

@section('content')
	<h1>Venda de Produto</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Data</th>
			<th>preço</th>
            <th>Produto</th>

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($vendaprodutos as $vendaproduto)
				<tr>
					<td>{{ $vendaproduto->data }}</td>
                    <td>{{ $vendaproduto->preco }}</td>
                    <td>{{ $vendaproduto->produto->nome }}</td>

					<td>
						<a href="{{ route('vendaprodutos.edit',    ['id'=>$vendaproduto->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$vendaproduto->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $vendaprodutos->links() }}

	<a href="{{ route('vendaprodutos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"vendaprodutos"
@endsection