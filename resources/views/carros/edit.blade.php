@extends('adminlte::page')

@section('content')
    <h3>Editando Carros: {{ $carro->nome }}</h3>

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
</ul>
@endif
    {!! Form::open(['route'=>["carros.update",'id'=>$carro->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('modelo','Modelo:') !!}
            {!! Form::text('modelo', $carro->modelo, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('marca_id','Marca:') !!}
            {!! Form::select('marca_id',
                             \App\Models\Marca::orderBy('descricao')->pluck('descricao','id')->toArray(),
                            $carro->marca_id, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano','Ano do Veiculo:') !!}
            {!! Form::date('ano', $carro->ano , ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('km','KM do Veiculo:') !!}
            {!! Form::number('km', $carro->km, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cambio','Câmbio:') !!}
            {!! Form::text('cambio', $carro->cambio, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('carroceria','Carroceria:') !!}
            {!! Form::text('carroceria',$carro->carroceria, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cor','Cor:') !!}
            {!! Form::text('cor', $carro->cor, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('itens','Itens do Veiculo:') !!}
            {!! Form::text('itens', $carro->itens, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Carro',['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default' ]) !!}
        </div>


    {!! Form::close() !!}
 @stop
 @section('table-delete')
 "carros"
 @endsection
