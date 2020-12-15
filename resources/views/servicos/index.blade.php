@extends('layouts.default')

@section('content')
	<h1>Serviços</h1>
		
	{!! Form::open(['name'=>'form_name', 'route'=>'servicos']) !!}
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
					<a href="{{ route('servicos.edit',    ['id'=>\Crypt::encrypt($servico->id)]) }}" class="btn-sm btn-success">Editar</a>
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