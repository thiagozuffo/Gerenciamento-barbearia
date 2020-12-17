@extends('layouts.default')

@section('content')
	<div class="container-fluid">
	    <h3>Itens de Venda</h3>

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
						<a href="#" onclick="return ConfirmaExclusao('{{ \Crypt::encrypt($itemvenda->id) }}')" class="btn-sm btn-danger">Remover</a>					</td>
                    <td>
                  
                    </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
		<a href="{{ route('itemvendas.create', []) }}" class="btn btn-info">Adicionar</a>
	</div>
@stop

