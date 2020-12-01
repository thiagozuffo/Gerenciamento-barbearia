<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiposervico;


class TiposervicosController extends Controller
{
   
	public function index() {
		$tiposervicos = Tiposervico::orderBy('descricao')->paginate(5);
		return view('tiposervicos.index', ['tiposervicos'=>$tiposervicos]);
	}

	public function create() {
		return view('tiposervicos.create');
	}

	public function store(TipoServicoRequest $request) {
		$novo_tiposervico = $request->all();
		Tiposervico::create($novo_tiposervico);

		return redirect()->route('tiposervicos');
	}

	public function destroy($id) {
		Tiposervico::find($id)->delete();
		return redirect()->route('tiposervicos');
	}

	public function edit($id) {
		$tiposervico = Tiposervico::find($id);
		return view('tiposervicos.edit', compact('tiposervico'));
	}

	public function update(TiposervicoRequest $request, $id) {
		Tiposervico::find($id)->update($request->all());
		return redirect()->route('tiposervicos');
	}}
