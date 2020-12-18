@extends('adminlte::page')

@section('content')
	<h3>Nova Venda de Serviço</h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=>'vendaservicos.store']) !!}

6+62		<div class="form-group">
			{!! Form::label('data', 'Data:') !!}
			{!! Form::date('data', null, ['class'=>'form-control', 'required']) !!}
		</div>

	
		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', null, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('servico_id', 'Serviço:') !!}
			{!! Form::select('servico_id', 
			\App\Servico::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Criar Venda de Serviço', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
