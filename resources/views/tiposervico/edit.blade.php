@extends('adminlte::page')

@section('content')
	<h3>Editando Tipo de Serviço: {{ $tiposervico->descricao }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["tiposervicos.update", 'id'=>$tiposervico->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('tiposervico', $tiposervico->tiposervico, ['class'=>'form-control', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::submit('Editar Tipo de Servico', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
