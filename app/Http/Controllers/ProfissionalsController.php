<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Http\Requests\ProfissionalRequest;
class ProfissionalsController extends Controller
{
	public function index(Request $filtro) {
		$filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null) 
    		$profissionals = Profissional::orderBy('nome')->paginate(5);
        else
            $profissionals = Profissional::where('nome', 'like', '%'.$filtragem.'%')
        					->orderBy("nome")
        					->paginate(5)
        					->setpath('profissionals?desc_filtro='+$filtragem);

		return view('profissionals.index', ['profissionals'=>$profissionals]);
	}


	public function create() {
		return view('profissionals.create');
	}

	public function store(ProfissionalRequest $request) {
		$novo_profissional = $request->all();
		Profissional::create($novo_profissional);

		return redirect()->route('profissionals');
	}


	public function destroy($id) {
		try{
		Profissional::find($id)->delete();
		$ret = array('status'=>200, 'msg'=>"null");
		}catch (\Illuminate\Database\QueryException $e){
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}catch (\PDOException $e){
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
	}


	public function edit(Request $request) {
		$profissional = Profissional::find(\Crypt::decrypt($request->get('id')));
		return view('profissionals.edit', compact('profissional'));
	}

	public function update(ProfissionalRequest $request, $id) {
		Profissional::find($id)->update($request->all());
		return redirect()->route('profissionals');
	}
}
