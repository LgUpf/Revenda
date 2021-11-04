@extends('adminlte::page')

@section('content')

  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <div class="card">
    <div class="card-header" style="background: lightgrey">
        <h3>Novas Vendas</h3>
    </div>

    <div class="card-body">

      {!! Form::open(['route'=>'vendas.store']) !!}

      <div class="form-group">
        {!! Form::label('modelo_id','Modelo:') !!}
        {!! Form::select('modelo_id',
                \App\Models\Modelo::orderBy('descricao')->pluck('descricao','id')->toArray(),
                null, ['class' => 'form-control', 'required']) !!}
    </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}
          </div>
        <hr />

        <h4>Carros</h4>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float:right" class="add_field_button btn btn-default">Adicionar Carro</button>

        <br>
        <hr />

        <div class="form-group">
          {!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
          {!! Form::reset('Limpar', ['class'=>'btn btn-default'])!!}
        </div>

      {!! Form::close() !!}

    </div>
  </div>

@stop

@section('js')
	<script>
		$(document).ready(function(){
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");
			var x=0;
			$(add_button).click(function(e){
			x++;
			var newField = '<div><div style="width:94%; float:left" id="ator">{!! Form::select("carros[]", \App\Models\Carro::orderBy("marca_id", )->pluck("marca_id","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um Carro"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
			$(wrapper).append(newField);
		});
		$(wrapper).on("click",".remove_field", function(e){
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
		});
		})
	</script>

@stop
