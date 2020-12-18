@extends('layouts.default')

@section('content')
	<h1>Venda de Produto</h1>
		
	{!! Form::open(['name'=>'form_name', 'route'=>'vendaprodutos']) !!}
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
			<th>Data</th>
			<th>preço</th>
            <th>Produto</th>

			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($vendaprodutos as $vendaproduto)
				<tr>
				<td>{{ Carbon\Carbon::parse($vendaproduto->data)->format('d/m/Y') }}</td>
                    <td>{{ $vendaproduto->preco }}</td>
                    <td>{{ $vendaproduto->produto->nome }}</td>

					<td>
					<a href="{{ route('vendaprodutos.edit',    ['id'=>\Crypt::encrypt($vendaproduto->id)]) }}" class="btn-sm btn-success">Editar</a>
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