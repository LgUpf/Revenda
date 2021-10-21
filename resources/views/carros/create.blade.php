@extends('adminlte::page')

@section('content')
    <h3>Cadastro de Carros</h3>


@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
</ul>
@endif

    {!! Form::open(['route'=>'carros.store']) !!}


    <div class="form-group">
        {!! Form::label('modelo_id','Modelo:') !!}
        {!! Form::select('modelo_id',
                \App\Models\Modelo::orderBy('descricao')->pluck('descricao','id')->toArray(),
                null, ['class' => 'form-control', 'required']) !!}
    </div>
        {{-- <div class="form-group">
            {!! Form::label('modelo','Modelo:') !!}
            {!! Form::text('modelo', null, ['class' => 'form-control', 'required']) !!}
        </div> --}}
{{--
        <div class="form-group">
            {!! Form::label('modelo_id','Modelo:') !!}
            {!! Form::select('modelo_id',
                    \App\Models\Modelo::orderBy('descricao')->pluck('descricao','id')->toArray(),
                    null, ['class' => 'form-control']) !!}
        </div> --}}
        <div class="form-group">
            {!! Form::label('marca_id','Marca:') !!}
            {!! Form::select('marca_id',
                    \App\Models\Marca::orderBy('descricao')->pluck('descricao','id')->toArray(),
                    null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ano','Ano do Veiculo:') !!}
            {!! Form::date('ano', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('km','KM do Veiculo:') !!}
            {!! Form::number('km', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cambio','Câmbio:') !!}
            {!! Form::text('cambio', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('carroceria','Carroceria:') !!}
            {!! Form::text('carroceria', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cor','Cor:') !!}
            {!! Form::text('cor', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('itens','Itens do Veiculo:') !!}
            {!! Form::text('itens', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Criar Revenda',['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default' ]) !!}
        </div>


    {!! Form::close() !!}
 @stop
