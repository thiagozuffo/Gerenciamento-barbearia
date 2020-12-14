<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendaservico;
use App\Http\Requests\VendaservicoRequest;

class VendaservicosController extends Controller
{
    public function index() {
		$vendaservicos = Vendaservico::orderBy('data')->paginate(5);
		return view('vendaservicos.index', ['vendaservicos'=>$vendaservicos]);
	}

	public function create() {
		return view('vendaservicos.create');
	}

	public function store(VendaservicoRequest $request) {
		$novo_vendaservico = $request->all();
		Vendaservico::create($novo_vendaservico);

		return redirect()->route('vendaservicos');
	}

	public function destroy($id) {
	Vendaservico::find($id)->delete();
		return redirect()->route('vendaservicos');
	}

	public function edit($id) {
		$vendaservico = Vendaservico::find($id);
		return view('vendaservicos.edit', compact('vendaservico'));
	}

	public function update(VendaservicoRequest $request, $id) {
		Vendaservico::find($id)->update($request->all());
		return redirect()->route('vendaservicos');
	}
}

