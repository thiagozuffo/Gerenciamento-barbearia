@extends('layouts.default')

@section('content')
	<h1>Profissionais</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Profissão</th>
            <th>Descrição</th>

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($profissionals as $profissional)
				<tr>
					<td>{{ $profissional->nome }}</td>
                    <td>{{ $profissional->profissao }}</td>
                    <td>{{ $profissional->descricao }}</td>

					<td>
						<a href="{{ route('profissionals.edit',    ['id'=>$profissional->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$profissional->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $profissionals->links() }}

	<a href="{{ route('profissionals.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"profissionals"
@endsection