<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\ItemvendaProduto;
use App\Itemvenda;

class ItemvendasController extends Controller
{
    public function create() {
		$produtos = Produto::all();
		return view('itemvendas.create', compact('produtos'));
	}
    public function store(Request $request){
        $itemvenda = Itemvenda::create([
                            'cliente' => $request->get('cliente'),
                            'descricao' => $request->get('descricao')
                        ]);

        $produtos = $request->produtos;
        foreach($produtos as $a => $value) {
            ItemvendaProduto::create([
                            'itemvenda_id' => $itemvenda->id,
                            'produto_id' => $produtos[$a]
                        ]);
        }

        return redirect()->route('itemvendas');
    }

    public function index(){
        $itemvendas = Itemvenda::all();

        return view('itemvendas.index', ['itemvendas'=>$itemvendas]);
    }
}



