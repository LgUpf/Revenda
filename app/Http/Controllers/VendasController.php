<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\VendaCarro;

class VendasController extends Controller
{
    public function create() {
        return view('vendas.create');
    }

    public function store(Request $request){
        $venda = Venda::create([
                            'nome' => $request->get('nome'),
                            'valor' => $request->get('valor')
                        ]);

        $carros = $request->carros;

        //  dd($carros);
        foreach($carros as $a => $value) {
            VendaCarro::create([
                            'venda_id' => $venda->id,
                            'carro_id' => $carros[$a]
                        ]);
        }

        return redirect()->route('vendas');
    }

    public function index(){
        $vendas = Venda::orderBy('nome')->paginate(4);
        return view('vendas.index',['vendas'=>$vendas]);
    }


}
