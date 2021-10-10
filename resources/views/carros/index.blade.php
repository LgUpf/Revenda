@extends('layouts.default')

@section('content')
	<h1>Carros</h1>

    {!! Form::open(['name'=>'form_marca', 'route'=>'carros']) !!}
    <div class="sidebar-form">
      <div class="input-group">
        <input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </div>
  {!! Form::close() !!}


	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Modelo</th>
            <th>Ano</th>
            <th>Marca</th>
            <th>KM</th>
            <th>Câmbio</th>
            <th>Carroceria</th>
            <th>Cor</th>
            <th>Ações</th>
		</thead>

		<tbody>
			@foreach($carros as $carro)
				<tr>
					<td>{{ $carro->modelo }}</td>
                    <td>{{ Carbon\Carbon::parse($carro->ano)->format('m/Y') }}</td>
                    {{-- <td>{{ $carro->marca->descricao }}</td> --}}
                    <td>{{ $carro->km }}</td>
                    <td>{{ $carro->cambio }}</td>
                    <td>{{ $carro->carroceria}}</td>
                    <td>{{ $carro->cor }}</td>

					<td>
						<a href="{{ route('carros.edit',    ['id'=>$carro->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$carro->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
    {{ $carros->links('pagination::bootstrap-4')   }}
	<a href="{{ route('carros.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"carros"
@endsection
