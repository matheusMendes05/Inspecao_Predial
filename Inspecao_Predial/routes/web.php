<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// Create Engineers
// Route::get('/registrar', 'Engineer\engineerController@index')->name('register.index');
// Route::post('/registrar/novo', 'Engineer\engineerController@create')->name('register');



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // Edit user
    Route::get('/perfil/usuario/{id}', 'Engineer\engineerController@edit')->name('user.edit');
    Route::put('/perfil/usuario/{id}/editar', 'Engineer\engineerController@update')->name('user.update');


    // // Building
    // Route::get('/edificios',  'Building\buildingController@index')->name('duilding.index');
    // Route::get('/edificios/cadastrar',  'Building\buildingController@indexCreate')->name('duilding.create');
    // // create Building
    // Route::post('/edificios/cadastrar/novo',  'Building\buildingController@create')->name('duilding.new');
    // // delete Building
    // Route::delete('/edificios/excluir/{id}',  'Building\buildingController@destroy')->name('duilding.delete');
    // // check Building
    // Route::get('/edificios/verificar/{id}',  'Building\buildingController@show')->name('duilding.check');


    // Contruct Forms
    Route::get('/inspecao/construtor-formulario', 'Inspection\formsConstruct@index')->name('forms.index');
    Route::post('/inspecao/construtor-formulario/novo', 'Inspection\formsConstruct@create')->name('forms.create');





    /***
     * Criando Edificios
     */

    // formulario de cadastro de edificios
    Route::get('/edificio', 'Edificio\edificioController@index')->name('edificio.index');

    Route::post('/edificio/novo', 'Edificio\edificioController@create')->name('edificio.create');

    //  historico de Edificios
    Route::get('/edificio/historico', 'Edificio\edificioController@historico')->name('edificio.historico');

    // verificando edificios
    Route::get('/edificio/verificar/{id}', 'Edificio\edificioController@show')->name('edificio.show');

    // excluindo edificios
    Route::delete('/edificio/excluir/{id}', 'Edificio\edificioController@destroy')->name('edificio.destroy');

    // editar edificios
    Route::get('/edificio/editar/{id}', 'Edificio\edificioController@edit')->name('edificio.edit');
    Route::put('/edificio/editar/{id}/novo', 'Edificio\edificioController@update')->name('edificio.update');


    /**
     * Insção de edificios
     */
    Route::get('/edificio/{id}/inspecionar', 'Inspecao\inspecaoController@create')->name('inspecao.create');

    // Construtor de Formulario - o usuario seleciona os campos necessarios para a inspecao
    Route::post('/edificio/{id}/inspecionar/construtor-formulario', 'Inspecao\inspecaoController@store')->name('inspecao.store');

    // formularios
    Route::post('/edificio/{id}/inspecionar/novo', 'Inspecao\inspecaoCreateController@store')->name('inspecaoCreate.store');

    // historico inspecoes
    Route::get('/edificio/{id}/inspecao/historico', 'Inspecao\inspecaoController@show')->name('inspecao.show');

    // Verificar Inspecao
    Route::get('/edificio/{id}/inspecao/{inspecao_id}', 'Inspecao\inspecaoController@index')->name('inspecao.index');

    // excluir Inspecao
    Route::delete('/edificio/inspecao/excluir/{inspecao_id}', 'Inspecao\inspecaoController@destroy')->name('inspecao.destroy');




    // Inspection
    // historico inspecao
    Route::get('/inspecao/historico', 'Inspection\inspectionController@index')->name('inspection.history');

    // criar inspecao
    Route::get('/inspecao/formulario/', 'Inspection\inspectionController@')->name('inspection.index');
    Route::post('/inspecao/formulario/novo', 'Inspection\newInspectionController@create')->name('inspection.create');

    // editar inspecao
    Route::get('/inspecao/{id}/editar', 'Inspection\inspectionController@index')->name('inspection.index');
    Route::put('/inspecao/{id}/editar', 'Inspection\inspectionController@index')->name('inspection.index');

    // verificar Inspecao
    Route::get('/inspecao/{id}/verificar', 'Inspection\inspectionController@show')->name('inspection.show');


    // excluir inspecao
    Route::delete('/inspecao/{id}/excluir', 'Inspection\inspectionController@destroy')->name('inspection.delete');

    // Gerar Arquivos PDF
    Route::get('/inspecao/{id}/verificar/gerar-arquivo-PDF', 'Actions\PDFController@show')->name('pdf.show');



    // teste formularios
    Route::get('/teste/formulario', 'Teste\testeController@create')->name('teste.create');
    Route::post('/teste/formulario/novo', 'Teste\testeController@store')->name('teste.store');
});
