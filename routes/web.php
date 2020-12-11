<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'clientes',         'uses'=>'ClientesController@index'  ]);
    Route::get('create',       ['as'=>'clientes.create',  'uses'=>'ClientesController@create' ]);
    Route::get('{id}/destroy', ['as'=>'clientes.destroy', 'uses'=>'ClientesController@destroy']);
    Route::get('{id}/edit',    ['as'=>'clientes.edit',    'uses'=>'ClientesController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'clientes.update',  'uses'=>'ClientesController@update' ]);
    Route::post('store',       ['as'=>'clientes.store',   'uses'=>'ClientesController@store'  ]);
});


Route::group(['prefix'=>'servicos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'servicos',         'uses'=>'ServicosController@index'  ]);
    Route::get('create',       ['as'=>'servicos.create',  'uses'=>'ServicosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'servicos.destroy', 'uses'=>'ServicosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'servicos.edit',    'uses'=>'ServicosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'servicos.update',  'uses'=>'ServicosController@update' ]);
    Route::post('store',       ['as'=>'servicos.store',   'uses'=>'ServicosController@store'  ]);
});


Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'produtos',         'uses'=>'ProdutosController@index'  ]);
    Route::get('create',       ['as'=>'produtos.create',  'uses'=>'ProdutosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'produtos.edit',    'uses'=>'ProdutosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'produtos.update',  'uses'=>'ProdutosController@update' ]);
    Route::post('store',       ['as'=>'produtos.store',   'uses'=>'ProdutosController@store'  ]);
});

Route::group(['prefix'=>'profissionals', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'profissionals',         'uses'=>'ProfissionalsController@index'  ]);
    Route::get('create',       ['as'=>'profissionals.create',  'uses'=>'ProfissionalsController@create' ]);
    Route::get('{id}/destroy', ['as'=>'profissionals.destroy', 'uses'=>'ProfissionalsController@destroy']);
    Route::get('{id}/edit',    ['as'=>'profissionals.edit',    'uses'=>'ProfissionalsController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'profissionals.update',  'uses'=>'ProfissionalsController@update' ]);
    Route::post('store',       ['as'=>'profissionals.store',   'uses'=>'ProfissionalsController@store'  ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
