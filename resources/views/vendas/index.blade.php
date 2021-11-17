@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <h1>Vendas</h1>

  <table class="table table-stripe table-bordered table-hover">
    <thead>
        <tr>
            <th>Venda</th>
            <th>Valor</th>
            <th>Carros</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
      @foreach($vendas as $venda)
                <tr>
                    <td>{{ $venda->nome }}</td>
                    <td>{{ $venda->valor }}</td>
                    <td>
                        @foreach($venda->carros as $a)
                            <li>{{ $a->modelo->descricao }}</li>
                        @endforeach
                    </td>

                    <td>
                      {{-- <a href="{{ route('vendas.create', [])  }}" class="btn btn-info">Adicionar</a> --}}
                      <a href="#" onclick="return ConfirmaExclusao({{$venda->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                 </tr>
       @endforeach
    </tbody>
  </table>
  {{ $vendas->links('pagination::bootstrap-4')   }}
  <a href="{{ route('vendas.create', [])  }}" class="btn btn-info">Adicionar</a>

</div>

@stop
