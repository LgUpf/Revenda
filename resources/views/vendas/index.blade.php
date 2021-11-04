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
        </tr>
    </thead>

    <tbody>
      @foreach($vendas as $vendas)
                <tr>
                    <td>{{ $venda->modelo }}</td>
                    <td>{{ $venda->valor }}</td>
                    <td>-</td>
                </tr>
       @endforeach
    </tbody>
  </table>
  <a href="{{ route('vendas.create', [])  }}" class="btn btn-info">Adicionar</a>
</div>
@stop
