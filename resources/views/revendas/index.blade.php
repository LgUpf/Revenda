@extends('layouts.default')

@section('content')
	<h1>Revendas</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Data de Criação da Revenda</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($revendas as $revenda)
				<tr>
					<td>{{ $revenda->nome }}</td>
					<td>{{ Carbon\Carbon::parse($revenda->dt_fundada)->format('d/m/Y') }}</td>

					<td>
						<a href="{{ route('revendas.edit',    ['id'=>$revenda->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$revenda->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
    {{ $revendas->links('pagination::bootstrap-4')   }}
	<a href="{{ route('revendas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"revendas"
@endsection
