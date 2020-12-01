<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'atores', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'atores',         'uses'=>'AtoresController@index'  ]);
    Route::get('create',       ['as'=>'atores.create',  'uses'=>'AtoresController@create' ]);
    Route::get('{id}/destroy', ['as'=>'atores.destroy', 'uses'=>'AtoresController@destroy']);
    Route::get('{id}/edit',    ['as'=>'atores.edit',    'uses'=>'AtoresController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'atores.update',  'uses'=>'AtoresController@update' ]);
    Route::post('store',       ['as'=>'atores.store',   'uses'=>'AtoresController@store'  ]);
});

Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'clientes',         'uses'=>'ClientesController@index'  ]);
    Route::get('create',       ['as'=>'clientes.create',  'uses'=>'ClientesController@create' ]);
    Route::get('{id}/destroy', ['as'=>'clientes.destroy', 'uses'=>'ClientesController@destroy']);
    Route::get('{id}/edit',    ['as'=>'clientes.edit',    'uses'=>'ClientesController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'clientes.update',  'uses'=>'ClientesController@update' ]);
    Route::post('store',       ['as'=>'clientes.store',   'uses'=>'ClientesController@store'  ]);
});


Route::group(['prefix'=>'tiposervicos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'tiposervico',         'uses'=>'TiposervicosController@index'  ]);
    Route::get('create',       ['as'=>'tiposervico.create',  'uses'=>'TiposervicosController@create' ]);
    Route::get('{id}/destroy', ['as'=>'tiposervico.destroy', 'uses'=>'TiposervicosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'tiposervico.edit',    'uses'=>'TiposervicosController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'tiposervico.update',  'uses'=>'TiposervicosController@update' ]);
    Route::post('store',       ['as'=>'tiposervico.store',   'uses'=>'TiposervicosController@store'  ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
