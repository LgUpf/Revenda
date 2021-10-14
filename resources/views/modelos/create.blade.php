@extends('adminlte::page')

@section('content')
    <h3>Novos Modelos</h3>


@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
</ul>
@endif

    {!! Form::open(['route'=>'modelos.store']) !!}

        <div class="form-group">
            {!! Form::label('descricao','descrição:') !!}
            {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>
        {{-- <div class="form-group">
			{!! Form::label('modelo', 'Modelo:') !!}
			{!! Form::select('modelo',
							 array( 'ONIX'=>'Teste',
							 		'FORD'=>'Americano',
							 		'KIA'=>'Canadense',
							 		'KKKK'=>'LALALA'),
							 'ONIX', ['class'=>'form-control', 'required']) !!}
		</div> --}}
        <div class="form-group">
            {!! Form::submit('Criar Marca',['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default' ]) !!}
        </div>


    {!! Form::close() !!}
 @stop
