<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendaproduto;
use App\Http\Requests\VendaprodutoRequest;
class VendaprodutosController extends Controller
{
	public function index(Request $filtro) {
		$filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) 
    		$vendaprodutos = Vendaproduto::orderBy('data')->paginate(5);
        else
            $vendaprodutos = Vendaproduto::where('data', 'like', '%'.$filtragem.'%')
        					->orderBy("data")
        					->paginate(5);
        					//->setpath('vendaprodutos?desc_filtro='+$filtragem);

		return view('vendaprodutos.index', ['vendaprodutos'=>$vendaprodutos]);
	}


	public function create() {
		return view('vendaprodutos.create');
	}

	public function store(VendaprodutoRequest $request) {
		$novo_vendaproduto = $request->all();
		Vendaproduto::create($novo_vendaproduto);

		return redirect()->route('vendaprodutos');
	}


	public function destroy($id) {
		try{
		Vendaproduto::find($id)->delete();
		$ret = array('status'=>200, 'msg'=>"null");
		}catch (\Illuminate\Database\QueryException $e){
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}catch (\PDOException $e){
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
	}

	public function edit(Request $request) {
		$vendaproduto = Vendaproduto::find(\Crypt::decrypt($request->get('id')));
		return view('vendaprodutos.edit', compact('vendaproduto'));
	}

	public function update(VendaprodutoRequest $request, $id) {
		Vendaproduto::find($id)->update($request->all());
		return redirect()->route('vendaprodutos');
	}
}
