@extends('layouts.default')

@section('content')
	<h1>Descrição</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Descrição</th>
		

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($tiposervicos as $tiposervico)
				<tr>
					<td>{{ $tiposervico->descricao }}</td>
                  

					<td>
						<a href="{{ route('tiposervicos.edit',    ['id'=>$tiposervico->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$tiposervico->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $tiposervicos->links() }}

	<a href="{{ route('tiposervicos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"tiposervicos"
@endsection