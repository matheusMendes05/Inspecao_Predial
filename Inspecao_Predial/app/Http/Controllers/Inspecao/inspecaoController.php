<?php

namespace App\Http\Controllers\Inspecao;

use App\Http\Controllers\Controller;
use App\models\Edificio\edificio;
use App\models\Inspecao\inspecao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;

use Illuminate\Support\Facades\Redirect;

class inspecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $inspecao_id)
    {
        //check all users
        if (Auth::check() === true) {

            try {
                //code...
                $inspecao = inspecao::verificar($inspecao_id);

                // if ($inspecao == null) {
                //     return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
                // }

                return view('Web._inspecao.verificarInspecao', [
                    'inspecao' => $inspecao
                ]);
            } catch (\PDOException $th) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO]' . $th->getMessage());
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // verificando sessao de usuario
        if (Auth::check() === true) {

            // Inspecionar edifio por seu ID
            $edificio = edificio::where('id', $id)->first();

            // verificar se inspecao pertence ao edificio que o usuario cadastrou no sistema
            if ($edificio == null) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] registro nao encontrado na Base de Dados.');
            }
            if (FacadesGate::denies('historico-inspecao', $edificio)) {
                abort(403, 'Não Autorizado');
            }
            return view('Web._inspecao.construtorFormulario', [
                'edificio' => $edificio
            ]);
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
    public function store(Request $request, $id)
    {
        //check all users
        if (Auth::check() === true) {

            $collection = [];

            $collection['edificio_id'] = $id;

            if (isset($request->estruturas) && $request->estruturas == "estruturas") {
                $collection['estruturas'] = $request->estruturas;
            }
            if (isset($request->fundacao) && $request->fundacao == "fundacao") {
                $collection['fundacao'] = $request->fundacao;
            }
            if (isset($request->vedacao) && $request->vedacao == "vedacao") {
                $collection['vedacao'] = $request->vedacao;
            }
            if (isset($request->forro) && $request->forro == "forro") {
                $collection['forro'] = $request->forro;
            }
            if (isset($request->parede) && $request->parede == "parede") {
                $collection['parede'] = $request->parede;
            }
            if (isset($request->piso) && $request->piso == "piso") {
                $collection['piso'] = $request->piso;
            }
            if (isset($request->fachada) && $request->fachada == "fachada") {
                $collection['fachada'] = $request->fachada;
            }
            if (isset($request->esquadria) && $request->esquadria == "esquadria") {
                $collection['esquadria'] = $request->esquadria;
            }
            if (isset($request->impermeabilizacao) && $request->impermeabilizacao == "impermeabilizacao") {
                $collection['impermeabilizacao'] = $request->impermeabilizacao;
            }
            if (isset($request->instalacao_hidro) && $request->instalacao_hidro == "instalacao_hidro") {
                $collection['instalacao_hidro'] = $request->instalacao_hidro;
            }
            if (isset($request->instalacao_gas) && $request->instalacao_gas == "instalacao_gas") {
                $collection['instalacao_gas'] = $request->instalacao_gas;
            }
            if (isset($request->instalacao_eletrica) && $request->instalacao_eletrica == "instalacao_eletrica") {
                $collection['instalacao_eletrica'] = $request->instalacao_eletrica;
            }
            if (isset($request->elevadores) && $request->elevadores == "elevadores") {
                $collection['elevadores'] = $request->elevadores;
            }



            // dd($collection)

            return view('Web._inspecao.formularios', [
                'collection' => $collection,
            ]);
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
        //check all users
        if (Auth::check() === true) {

            $inspecao = inspecao::historico_inspecao_edificios($id);
            // $edificio_id = $id;
            $edificio = edificio::where('id', $id)->first();

            if ($edificio == null) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] registro nao encontrado na Base de Dados.');
            }
            if (FacadesGate::denies('historico-inspecao', $edificio)) {
                abort(403, 'Não Autorizado');
            }

            return view('Web._inspecao.historicoInspecao', [
                'inspecao' => $inspecao,
                'edificio_id' => $id
            ]);
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
    public function destroy($inspecao_id)
    {
        //
        $inspecao = inspecao::where('id', $inspecao_id)->first();
        $inspecao->delete();

        return redirect()->back()->withErrors('Inspecão Excluido Com Sucesso');
        // dd($inspecao);
    }
}
