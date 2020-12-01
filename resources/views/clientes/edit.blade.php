@extends('adminlte::page')

@section('content')
	<h3>Editando Cliente: {{ $cliente->nome }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["clientes.update", 'id'=>$cliente->id], 'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $cliente->nome, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('endereco', 'Endereço:') !!}
			{!! Form::text('endereco', $cliente->endereco, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('telefone', 'Telefone:') !!}
			{!! Form::text('telefone', $cliente->telefone, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Cliente', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop

