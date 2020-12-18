@extends('adminlte::page')

@section('content')
    <h3>Editando Item vendas: {{ $itemvenda->cliente }} </h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=> ["itemvendas.update", 'id'=>\Crypt::encrypt($itemvenda->id)], 'method'=>'put']) !!}

    <div class="form-group">
            {!! Form::label('cliente', 'Cliente:') !!}
            {!! Form::text('cliente', $itemvenda->cliente, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', $itemvenda->descricao, ['class'=>'form-control', 'required']) !!}
        </div>


        <h4>Produtos</h4>
        <div class="input_field_wrap">
            @foreach ($itemvenda->produtos as $a)
            <div>
                <div style="width:94%, float:left;" id="produto">
                    {!! Form::select("produtos[]", \App\Produto::orderBy("nome")->pluck("nome", "id")->toArray(), $a->produto_id, ["class"=>"form-control", "required"]) !!}
                </div>
                <button type="button" class="remove_field btn btn-danger btn-circle">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            @endforeach
        </div>
        <br>

        <button type="button" style="float:right;" class="add_field_button btn btn-default">Adicionar Produto</button>
        <br>
        <hr/>

        <div class="form-group">
            {!! Form::submit('Editar ItemVenda', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var wrapper = $(".input_field_wrap");
            var add_button = $(".add_field_button");
            var x = <?php Print(sizeof($itemvenda->produtos)); ?>;
            $(add_button).click(function(e) {
                x++;
                var newField = '<div><div style="width:94%, float:left;" id="produto">{!! Form::select("produto[]", \App\Produto::orderBy("nome")->pluck("nome", "id")->toArray(), null, ["class"=>"form-control", "required"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $(wrapper).append(newField);
            });
            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
    </script>
@stop