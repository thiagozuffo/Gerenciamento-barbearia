@extends('adminlte::page')

@section('content')
	<div class="card">
	    <div class="card-header" style="background: lightgrey">
	        <h3>Novo Item de Venda</h3>
	    </div>

	    <div class="card-body">
	        {!! Form::open(['route' => 'itemvendas.store']) !!}

				<div class="form-group">
					{!! Form::label('cliente', 'Cliente:') !!}
					{!! Form::text('cliente', null, ['class'=>'form-control', 'require']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('descricao', 'Descrição:') !!}
					{!! Form::text('descricao', null, ['class'=>'form-control', 'require']) !!}
				</div>
				<hr />

				<h4>Produtos</h4>
				<div class="input_fields_wrap"></div>
				<br>

				<button style="float:right" class="add_field_button btn btn-default">Adicionar Produto</button>

				<br>
				<hr />
				
				<div class="form-group">
					{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}

	    </div>
	</div>
@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="produto">{!! Form::select("produtos[]", \App\Produto::orderBy("nome")->pluck("nome","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um Produto"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
		});
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});
		})
	</script>

@stop

