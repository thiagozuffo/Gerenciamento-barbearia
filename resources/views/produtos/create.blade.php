@extends('adminlte::page')

@section('content')
	<h3>Novo Produto</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=>'produtos.store']) !!}
	<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', null, ['class'=>'form-control', 'required']) !!}
		</div>


	

		<div class="form-group">
			{!! Form::label('descricao', 'Descricao:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
		</div>

	

		<div class="form-group">
			{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>
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
	{!! Form::close() !!}	
@stop

