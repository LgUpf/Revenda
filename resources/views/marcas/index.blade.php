@extends('layouts.default')

@section('content')
	<h1>Marcas</h1>

    {!! Form::open(['name'=>'form_marca', 'route'=>'marcas']) !!}
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
            <th>Modelos</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($marcas as $marca)
				<tr>
					<td>{{ $marca->descricao }}</td>

                    @if (isset( $marca->modelo->descricao))
                    <td>
                       {{ $marca->modelo->descricao}}
                    </td>
                         @else
                        <td>
                     </td>
                     @endif
					<td>
            <a href="{{ route('marcas.edit',   ['id'=>\Crypt::encrypt($marca->id)])  }}" class="btn-sm btn-success">Editar</a>
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
