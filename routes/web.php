<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function(){
Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function() {
    Route::any('',             ['as'=>'clientes',         'uses'=>'ClientesController@index'  ]);
    Route::get('',             ['as'=>'clientes',         'uses'=>'ClientesController@index'  ]);
    Route::get('create',       ['as'=>'clientes.create',  'uses'=>'ClientesController@create' ]);
    Route::get('{id}/destroy', ['as'=>'clientes.destroy', 'uses'=>'ClientesController@destroy']);
    Route::get('edit',    ['as'=>'clientes.edit',    'uses'=>'ClientesController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'clientes.update',  'uses'=>'ClientesController@update' ]);
    Route::post('store',       ['as'=>'clientes.store',   'uses'=>'ClientesController@store'  ]);
});


Route::group(['prefix'=>'servicos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'servicos',         'uses'=>'ServicosController@index'  ]);
    Route::get('create',       ['as'=>'servicos.create',  'uses'=>'ServicosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'servicos.destroy', 'uses'=>'ServicosController@destroy']);
    Route::get('edit',    ['as'=>'servicos.edit',    'uses'=>'ServicosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'servicos.update',  'uses'=>'ServicosController@update' ]);
    Route::post('store',       ['as'=>'servicos.store',   'uses'=>'ServicosController@store'  ]);
});


Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'produtos',         'uses'=>'ProdutosController@index'  ]);
    Route::get('create',       ['as'=>'produtos.create',  'uses'=>'ProdutosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
    Route::get('edit',    ['as'=>'produtos.edit',    'uses'=>'ProdutosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'produtos.update',  'uses'=>'ProdutosController@update' ]);
    Route::post('store',       ['as'=>'produtos.store',   'uses'=>'ProdutosController@store'  ]);
});

Route::group(['prefix'=>'profissionals', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'profissionals',         'uses'=>'ProfissionalsController@index'  ]);
    Route::get('create',       ['as'=>'profissionals.create',  'uses'=>'ProfissionalsController@create' ]);
    Route::get('{id}/destroy', ['as'=>'profissionals.destroy', 'uses'=>'ProfissionalsController@destroy']);
    Route::get('edit',    ['as'=>'profissionals.edit',    'uses'=>'ProfissionalsController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'profissionals.update',  'uses'=>'ProfissionalsController@update' ]);
    Route::post('store',       ['as'=>'profissionals.store',   'uses'=>'ProfissionalsController@store'  ]);
});

Route::group(['prefix'=>'vendaprodutos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'vendaprodutos',         'uses'=>'VendaprodutosController@index'  ]);
    Route::get('create',       ['as'=>'vendaprodutos.create',  'uses'=>'VendaprodutosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'vendaprodutos.destroy', 'uses'=>'VendaprodutosController@destroy']);
    Route::get('edit',    ['as'=>'vendaprodutos.edit',    'uses'=>'VendaprodutosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'vendaprodutos.update',  'uses'=>'VendaprodutosController@update' ]);
    Route::post('store',       ['as'=>'vendaprodutos.store',   'uses'=>'VendaprodutosController@store'  ]);
});

Route::group(['prefix'=>'vendaservicos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'vendaservicos',         'uses'=>'VendaservicosController@index'  ]);
    Route::get('create',       ['as'=>'vendaservicos.create',  'uses'=>'VendaservicosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'vendaservicos.destroy', 'uses'=>'VendaservicosController@destroy']);
    Route::get('edit',    ['as'=>'vendaservicos.edit',    'uses'=>'VendaservicosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'vendaservicos.update',  'uses'=>'VendaservicosController@update' ]);
    Route::post('store',       ['as'=>'vendaservicos.store',   'uses'=>'VendaservicosController@store'  ]);
});
});

Route::group(['prefix'=>'itemvendas', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'itemvendas',         'uses'=>'ItemvendasController@index'  ]);
    Route::get('create',       ['as'=>'itemvendas.create',  'uses'=>'ItemvendasController@create' ]);
    Route::post('store',       ['as'=>'itemvendas.store',   'uses'=>'ItemvendasController@store'  ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
