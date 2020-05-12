<?php

namespace App\Http\Controllers\Inspection;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Forms\estruturasController;
use App\Http\Controllers\Forms\fundacoesController;
use App\Http\Controllers\inspection\vedacaoController;
use App\models\Building\building;
use App\models\inspection\inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class newInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //checking logged in user
        if (Auth::check() === true) {
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //checking logged in user
        if (Auth::check() === true) {

            try {
                //code...
                // checked insction 
                if (isset($request->inspecao) && $request->inspecao == "inspecao") {
                    // inspectionController::create($edificio_id, $request);
                    $inspecao = new inspectionController();
                    $inspecao_id = $inspecao->create($request);

                    // checked estruturas
                    if (isset($request->estruturas) && $request->estruturas == "estruturas") {
                        estruturasController::create($inspecao_id, $request);
                    }
                    // checked Fundacoes
                    if (isset($request->fundacao) && $request->fundacao == 'fundacao') {
                        fundacoesController::create($inspecao_id, $request);
                    }
                    // checked vedacao
                    if (isset($request->vedacao) && $request->vedacao == 'vedacao') {
                        vedacaoController::create($inspecao_id, $request);
                    }

                    // dd($inspecao_id);

                    return redirect()->route('inspection.history')->withInput()->withErrors('Inspecao realizada com sucesso');
                }
            } catch (\PDOException $th) {
                //throw $th;
                return redirect()->route('home')->withInput()->withErrors('[ERRO]' . $th->getMessage());
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
