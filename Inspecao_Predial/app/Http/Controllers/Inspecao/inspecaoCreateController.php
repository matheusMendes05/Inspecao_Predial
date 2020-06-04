<?php

namespace App\Http\Controllers\inspecao;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Inspecao\Formularios\esquadriaController;
use App\Http\Controllers\Inspecao\Formularios\estruturas;
use App\Http\Controllers\inspecao\Formularios\fundacoesController;
use App\Http\Controllers\Inspecao\Formularios\impermeabilizacaoController;
use App\Http\Controllers\inspecao\Formularios\instalacaoEletricaController;
use App\Http\Controllers\Inspecao\Formularios\instalacaoGasController;
use App\Http\Controllers\Inspecao\Formularios\instalacaoHidroController;
use App\Http\Controllers\inspecao\Formularios\mecanizacao\elevadoresController;
use App\Http\Controllers\Inspecao\Formularios\revestimento\fachadaController;
use App\Http\Controllers\Inspecao\Formularios\revestimento\forroController;
use App\Http\Controllers\Inspecao\Formularios\revestimento\paredeController;
use App\Http\Controllers\Inspecao\Formularios\revestimento\pisoController;
use App\Http\Controllers\Inspecao\Formularios\vedacaoController;
use App\models\Inspecao\formularios\revestimentos\forro;
use App\models\Inspecao\inspecao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inspecaoCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //check all users
        if (Auth::check() === true) {

            $inspecao = new inspecao();

            $inspecao->edificio_id = $id;
            $inspecao->responsavel_acompanhamento_obra = $request->responsavelObra;
            $inspecao->save();

            // dd($request);

            if (isset($request->estruturas) && $request->estruturas == 'estruturas') {
                estruturas::store($request, $inspecao->id);
            }
            if (isset($request->fundacao) && $request->fundacao == 'fundacao') {
                fundacoesController::store($request, $inspecao->id);
            }
            if (isset($request->vedacao) && $request->vedacao == 'vedacao') {
                vedacaoController::store($request, $inspecao->id);
            }
            if (isset($request->forro) && $request->forro == 'forro') {
                forroController::store($request, $inspecao->id);
            }
            if (isset($request->parede) && $request->parede == 'parede') {
                paredeController::store($request, $inspecao->id);
            }
            if (isset($request->piso) && $request->piso == 'piso') {
                pisoController::store($request, $inspecao->id);
            }
            if (isset($request->fachada) && $request->fachada == 'fachada') {
                fachadaController::store($request, $inspecao->id);
            }
            if (isset($request->esquadria) && $request->esquadria == 'esquadria') {
                esquadriaController::store($request, $inspecao->id);
            }
            if (isset($request->impermeabilizacao) && $request->impermeabilizacao == 'impermeabilizacao') {
                impermeabilizacaoController::store($request, $inspecao->id);
            }
            if (isset($request->instalacao_hidro) && $request->instalacao_hidro == 'instalacao_hidro') {
                instalacaoHidroController::store($request, $inspecao->id);
            }
            if (isset($request->instalacao_gas) && $request->instalacao_gas == 'instalacao_gas') {
                instalacaoGasController::store($request, $inspecao->id);
            }
            if (isset($request->instalacao_eletrica) && $request->instalacao_eletrica == 'instalacao_eletrica') {
                instalacaoEletricaController::store($request, $inspecao->id);
            }
            if (isset($request->elevadores) && $request->elevadores == 'elevadores') {
                elevadoresController::store($request, $inspecao->id);
            }


            return redirect()->route('edificio.show', [
                'id' => $id
            ])->withErrors('Inspecão realizada com sucesso!');
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
