@extends('layouts.default')

@section('content')
	<div class="container-fluid">
	    <h3>Itens de Venda</h3>

		{!! Form::open(['name'=>'form_name', 'route'=>'itemvendas']) !!}
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

	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	    		<tr>
	    			<th>Cliente</th>
	    			<th>Descricao</th>
	    			<th>Produtos</th>
                    <th>Ações</th>
	    		</tr>
	    	</thead>

	    	<tbody>
		    	@foreach($itemvendas as $itemvenda)
		    		<tr>
		    			<td>{{$itemvenda->cliente}}</td>
				        <td>{{$itemvenda->descricao}}</td>
				        <td>
				        	@foreach($itemvenda->produtos as $a)
				        		<li>{{ $a->produto->nome}}</li>
				        	@endforeach
				        </td>

						<td>
						<a href="{{ route('itemvendas.edit', ['id'=>\Crypt::encrypt($itemvenda->id)]) }}" class="btn-sm btn-success">Editar</a>	
						<a href="#" onclick="return ConfirmaExclusao({{$itemvenda->id}})"  class="btn-sm btn-danger">Remover</a>
							</td>
     
				    </tr>
			    @endforeach
			</tbody>
		</table>
		<a href="{{ route('itemvendas.create', []) }}" class="btn btn-info">Adicionar</a>
	</div>
@stop

@section('table-delete')
"itemvendas"
@endsection