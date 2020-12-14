@extends('adminlte::page')

@section('content')
	<h3>Editando Cliente: {{ $profissional->nome  }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["profissionals.update", 'id'=>$profissional->id], 'method'=>'put']) !!}
	
	<div class="form-group">
			{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $profissional->nome, ['class'=>'form-control', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::label('profissao', 'Profissao:') !!}
			{!! Form::text('profissao', $profissional->profissao, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descricao', 'Descrição:') !!}
			{!! Form::text('descricao', $profissional->descricao, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Profissional', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
