@extends('adminlte::page')

@section('content')
	<h3>Editando Venda da Data: {{ Carbon\Carbon::parse($vendaservico->data)->format('d/m/Y') }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["vendaservicos.update", 'id'=>$vendaservico->id], 'method'=>'put']) !!}
	
	<div class="form-group">
			{!! Form::label('data', 'Data:') !!}
			{!! Form::date('data', $vendaservico->data, ['class'=>'form-control', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', $vendaservico->preco, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('servico_id', 'Serviço:') !!}
			{!! Form::select('servico_id', 
			\App\Servico::orderBy('nome')->pluck('nome', 'id')->toArray(), $vendaservico->servico_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Venda de Serviço', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
