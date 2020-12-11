@extends('adminlte::page')

@section('content')
	<h3>Novo Serviço</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=>'servicos.store']) !!}
	<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', null, ['class'=>'form-control', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('descricao', 'Descricão:') !!}
			{!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
		</div>

	

		<div class="form-group">
			{!! Form::submit('Criar Servico', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop


