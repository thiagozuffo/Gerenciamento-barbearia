@extends('adminlte::page')

@section('content')
	<h3>Editando Venda da Data: {{ Carbon\Carbon::parse($vendaproduto->data)->format('d/m/Y')  }} </h3>

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open(['route'=> ["vendaprodutos.update", 'id'=>$vendaproduto->id], 'method'=>'put']) !!}
	
	<div class="form-group">
			{!! Form::label('data', 'Data:') !!}
			{!! Form::date('data', $vendaproduto->data, ['class'=>'form-control', 'required']) !!}
		</div>



		<div class="form-group">
			{!! Form::label('preco', 'Preço:') !!}
			{!! Form::text('preco', $vendaproduto->preco, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('produto_id', 'Produto:') !!}
			{!! Form::select('produto_id', 
			\App\Produto::orderBy('nome')->pluck('nome', 'id')->toArray(), $vendaproduto->produto_id, ['class'=>'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Venda de Produto', ['class'=>'btn btn-primary']) !!}
			{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
		</div>

	{!! Form::close() !!}	
@stop
