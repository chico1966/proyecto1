<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('api/users/{user}', function (Proyecto1\Modelos\User $user) {
    return $user->email;
});


Route::group(['namespace' => 'Backend'], function (){

    Route::resource('users', 'UsersController');

    Route::get('lista_ciudades', 'CiudadesController@getIndex')->name('lista.ciudades');
	Route::get('crear_ciudad', 'CiudadesController@getCreate')->name('crear.ciudad');
    Route::get('mostrar_ciudad/{id}', 'CiudadesController@getShow')->name('mostrar.ciudad');
    Route::get('mostrar_ciudad_nom/{ciudad}', 'CiudadesController@getShowCiudad')->name('mostrar.ciudad_nom');
    Route::get('editar_ciudad/{id}', 'CiudadesController@getEdit')->name('editar.ciudad');
    Route::get('eliminar_ciudad/{id}', 'CiudadesController@getDestroy')->name('eliminar.ciudad');
	Route::post('agregar_ciudad', 'CiudadesController@postStorage')->name('agregar.ciudad');
    Route::post('actualizar_ciudad', 'CiudadesController@postUpdate')->name('actualizar.ciudad');

    Route::get('lista_esculturas/{ciudad}', 'EsculturasController@getIndex')->name('lista.esculturas');
    Route::get('crear_escultura/{ciudad}', 'EsculturasController@getCreate')->name('crear.escultura');
    Route::get('mostrar_escultura/{id}', 'EsculturasController@getShow')->name('mostrar.escultura');
    Route::get('editar_escultura/{id}', 'EsculturasController@getEdit')->name('editar.escultura');
    Route::get('eliminar_escultura/{id}', 'EsculturasController@getDestroy')->name('eliminar.escultura');
    Route::post('agregar_escultura', 'EsculturasController@postStorage')->name('agregar.escultura');
    Route::post('actualizar_escultura', 'EsculturasController@postUpdate')->name('actualizar.escultura');

    Route::get('lista_bibliografias/{idElemento}', 'BibliografiasController@getIndex')->name('lista.bibliografias');
    Route::get('crear_bibliografia/{idElemento}', 'BibliografiasController@getCreate')->name('crear.bibliografia');
    Route::get('mostrar_bibliografia/{id}', 'BibliografiasController@getShow')->name('mostrar.bibliografia');
    Route::get('editar_bibliografia/{id}', 'BibliografiasController@getEdit')->name('editar.bibliografia');
    Route::get('eliminar_bibliografia/{id}', 'BibliografiasController@getDestroy')->name('eliminar.bibliografia');
    Route::post('agregar_bibliografia', 'BibliografiasController@postStorage')->name('agregar.bibliografia');
    Route::post('actualizar_bibliografia', 'BibliografiasController@postUpdate')->name('actualizar.bibliografia');

});

