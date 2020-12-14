@extends('layouts.default')

@section('content')
	<h1>Venda de Serviço</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Data</th>
			<th>preço</th>
            <th>Produto</th>

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($vendaservicos as $vendaservico)
				<tr>
					<td>{{ $vendaservico->data }}</td>
                    <td>{{ $vendaservico->preco }}</td>
                    <td>{{ $vendaservico->servico->nome }}</td>

					<td>
						<a href="{{ route('vendaservicos.edit',    ['id'=>$vendaservico->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$vendaservico->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $vendaservicos->links() }}

	<a href="{{ route('vendaservicos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"vendaservicos"
@endsection