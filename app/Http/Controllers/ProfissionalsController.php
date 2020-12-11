<?php

namespace App\Http\Controllers;
use App\Profissional;
use Illuminate\Http\Request;
use App\Http\Requests\ProfissionalRequest;

class ProfissionalsController extends Controller
{
        
	public function index() {
		$profissionals = Profissional::orderBy('nome')->paginate(5);
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
		Profissional::find($id)->delete();
		return redirect()->route('profissionals');
	}

	public function edit($id) {
		$profissional = Profissional::find($id);
		return view('profissionals.edit', compact(''));
	}

	public function update(ProfissionalRequest $request, $id) {
		Profissional::find($id)->update($request->all());
		return redirect()->route('profissionals');
	}
}
