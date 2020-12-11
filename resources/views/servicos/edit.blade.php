@extends('adminlte::page')

@section('content')
	<h3>Editando Serviço {{ $servico->nome }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["servicos.update", 'id'=>$servico->id], 'method'=>'put']) !!}


	<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $servico->nome, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', $servico->preco, ['class'=>'form-control', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $servico->descricao, ['class'=>'form-control', 'required']) !!}
		</div>

	

		<div class="form-group">
			{!! Form::submit('Editar Serviço', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
