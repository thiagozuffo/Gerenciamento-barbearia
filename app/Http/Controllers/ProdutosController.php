<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{
    //

      
	public function index() {
		$produtos = Produto::orderBy('nome')->paginate(5);
		return view('produtos.index', ['produtos'=>$produtos]);
	}

	public function create() {
		return view('produtos.create');
	}

	public function store(ProdutoRequest $request) {
		$novo_produto = $request->all();
		Produto::create($novo_produto);

		return redirect()->route('produtos');
	}

	public function destroy($id) {
		Produto::find($id)->delete();
		return redirect()->route('produtos');
	}

	public function edit($id) {
		$produto = Produto::find($id);
		return view('produtos.edit', compact('produto'));
	}

	public function update(ProdutoRequest $request, $id) {
		Produto::find($id)->update($request->all());
		return redirect()->route('produtos');
	}
}