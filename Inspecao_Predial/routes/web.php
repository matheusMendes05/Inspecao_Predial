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




Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

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
});
