<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\CidController;
use App\Http\Controllers\EstadiamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	 Route::get('/formularios', [FormController::class, 'forms'] )->name('formularios');
	 Route::post('/formulariosadicionar', [FormController::class, 'store'] );
	 Route::get('/formularios/adicionar', [FormController::class, 'adicionar'] )->name('formulariosadicionar');;
	 Route::delete('/formulariosdeletar/{id}', [FormController::class, 'destroy']);
	 Route::get('/formularioseditar/{id}', [FormController::class, 'edit']);
	 Route::put('/formularios/update/{id}', [FormController::class, 'update']);
	 Route::get('/formulariosduplicar/{id}', [FormController::class, 'duplicar']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	
	Route::get('/pessoa', [PessoaController::class, 'pessoa'])->name('pessoa');
	Route::get('/pessoa/adicionar', [PessoaController::class, 'adicionar'])->name('adicionarpessoas');;
	Route::post('/pessoaadicionarmedico', [PessoaController::class, 'adicionarmedico'] );
	Route::post('/pessoaadicionar', [PessoaController::class, 'store'] );

	Route::get('/recurso', [RecursoController::class, 'recurso'])->name('recurso');
	Route::get('/recurso/adicionar', [RecursoController::class, 'adicionar'])->name('adicionarrecurso');;
	Route::post('/recursoadicionar', [RecursoController::class, 'store'] );

	Route::get('/agendar', [ConsultaController::class, 'agendar'])->name('agendar');
	Route::get('/remarcar/{id}', [ConsultaController::class, 'remarcar']);
	Route::put('/remarcar/update/{id}', [ConsultaController::class, 'remarcarUpdate']);
	Route::get('/consultas', [ConsultaController::class, 'listarconsultas'])->name('listarconsultas');
	Route::get('/consultas/nova', [ConsultaController::class, 'adicionarconsulta'])->name('adicionarconsulta');
	Route::post('/buscarpaciente/{id}', [ConsultaController::class, 'buscarpaciente'] );
	Route::post('/anamnese', [ConsultaController::class, 'anamnese']);
	Route::post('/consultasAgendar', [ConsultaController::class, 'agendarconsulta']);
	Route::put('/formEstadiamento/{id}', [ConsultaController::class, 'estadiamento']);
	
	Route::get('/listacid10', [CidController::class, 'listacid10'])->name('listacid10');
	Route::get('/adicionarplano', [CidController::class, 'adicionarplano'])->name('adicionarplano');
	Route::post('/cadastrarCID', [CidController::class, 'cadastrarCID']);
	Route::post('/cadastrarPlano', [CidController::class, 'cadastrarPlano']);
	Route::post('/cadastrarPresc', [CidController::class, 'cadastrarPresc']);
	
});

