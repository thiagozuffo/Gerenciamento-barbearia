@extends('layouts.default')

@section('content')
	<h1>Profissionais</h1>

		
	{!! Form::open(['name'=>'form_name', 'route'=>'profissionals']) !!}
		<div calss="sidebar-form">
			<div class="input-group">
				<input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
				<span class="input-group-btn">
                	<button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
              	</span>
			</div>
		</div>
	{!! Form::close() !!}
	<br>
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
					<a href="{{ route('profissionals.edit',    ['id'=>\Crypt::encrypt($profissional->id)]) }}" class="btn-sm btn-success">Editar</a>
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