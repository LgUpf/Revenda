@extends('adminlte::page')

@section('content')
    <h3>Editando Marca: {{ $marca->nome }}</h3>

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
</ul>
@endif
    {!! Form::open(['route'=>["marcas.update",'id'=>$marca->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('descricao','descrição:') !!}
        {!! Form::text('descricao',$marca->descricao, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('modelo_id','Modelo:') !!}
        {!! Form::select('modelo_id',
                         \App\Models\Modelo::orderBy('descricao')->pluck('descricao','id')->toArray(),
                        $marca->modelo_id, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editando Marca',['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default' ]) !!}
    </div>



    {!! Form::close() !!}
 @stop
 @section('table-delete')
 "marcas"
 @endsection
