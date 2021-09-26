@extends('adminlte::page')

@section('content')
    <h3>Editando Revenda: {{ $revenda->nome }}</h3>

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
</ul>
@endif
    {!! Form::open(['route'=>["revendas.update",'id'=>$revenda->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome','Nome da Revenda:') !!}
            {!! Form::text('nome', $revenda->nome, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone da Revenda:') !!}
            {!! Form::text('telefone', $revenda->telefone, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dt_fundada','Data de Criação da Revenda:') !!}
            {!! Form::date('dt_fundada', $revenda->dt_fundada , ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco','Endereço da Revenda:') !!}
            {!! Form::text('endereco', $revenda->endereco,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Revenda',['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default' ]) !!}
        </div>


    {!! Form::close() !!}
 @stop
 @section('table-delete')
 "revendas"
 @endsection
