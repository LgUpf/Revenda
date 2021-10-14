@extends('layouts.default')

@section('content')
	<h1>Modelos</h1>

    {!! Form::open(['name'=>'form_modelos', 'route'=>'modelos']) !!}
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
			<th>Descrição</th>
            {{-- <th>Modelos</th> --}}
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($modelos as $modelo)
				<tr>
					<td>{{ $modelo->descricao }}</td>
					<td>
						<a href="{{ route('modelos.edit',    ['id'=>$modelo->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$modelo->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
    {{ $modelos->links('pagination::bootstrap-4')   }}
	<a href="{{ route('modelos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"modelos"
@endsection
