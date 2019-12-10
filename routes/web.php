<?php
/*
 * Rotas de Diagnostico
 */
Route::post('/diagnostico', 'Diagnostico\DiagnosticoController@store')->name('diagnostico.store')->middleware('auth');
Route::get('/diagnostico', 'Diagnostico\DiagnosticoController@index')->name('diagnostico.index')->middleware('auth');
Route::resource('diagnostico', 'Diagnostico\DiagnosticoController')->middleware('auth');

/*
 * Rotas da Alice
 */
route::post('/alice/sintomas', 'Sintomas\SintomasController@store')->name('sintomas.store')->middleware('auth');
route::get('/alice/sintomas', 'Sintomas\SintomasController@index')->name('sintomas.index')->middleware('auth');
route::post('/alice/doencas', 'Doencas\DoencasController@store')->name('doencas.store')->middleware('auth');
route::get('/alice/doencas', 'Doencas\DoencasController@index')->name('doencas.index')->middleware('auth');
route::get('/alice', 'Alice\AliceController@index')->name('alice.index')->middleware('auth');
Route::resource('Alice', 'Alice\AliceController')->middleware('auth');

//Rota de Triagem
Route::get('/triagem', 'Triagem\TriagemController@index')->name('triagem.index')->middleware('auth');
//Rota de Cadastro de Pacientes
Route::post('/pacientes/cadastrar', 'Paciente\PacienteController@store')->name('paciente.store')->middleware('auth');
Route::get('/pacientes/cadastrar', 'Paciente\PacienteController@create')->name('paciente.create')->middleware('auth');
Route::get('/pacientes', 'Paciente\PacienteController@index')->name('paciente.index')->middleware('auth');
Route::resource('paciente', 'Paciente\PacienteController')->middleware('auth');

Auth::routes();

Route::get('/', 'Dashboard\DashboardController@index')->name('home.index')->middleware('auth');
