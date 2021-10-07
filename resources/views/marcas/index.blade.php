@extends('layouts.default')

@section('content')
	<h1>Marcas</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Descrição</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($marcas as $marca)
				<tr>
					<td>{{ $marca->descricao }}</td>
					<td>
						<a href="{{ route('marcas.edit',    ['id'=>$marca->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$marca->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
    {{ $marcas->links('pagination::bootstrap-4')   }}
	<a href="{{ route('marcas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"marcas"
@endsection
