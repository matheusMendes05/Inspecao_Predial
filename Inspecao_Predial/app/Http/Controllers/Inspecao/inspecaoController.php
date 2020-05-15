<?php

namespace App\Http\Controllers\Inspecao;

use App\Http\Controllers\Controller;
use App\models\Edificio\edificio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inspecaoController extends Controller
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
    public function create($id)
    {
        // verificando sessao de usuario
        if (Auth::check() === true) {



            // Inspecionar edifio por seu ID
            $edificio = edificio::where('id', $id)->first();

            // verificar se inspecao pertence ao edificio que o usuario cadastrou no sistema
            $verificar_edificio = edificio::where('usuario_id', $edificio->usuario_id)->first();
            if ($verificar_edificio->usuario_id != Auth::user()->id) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
            } else {
                return view('Web._inspecao.construtorFormulario', [
                    'edificio' => $edificio
                ]);
            }

            // dd($edificio);

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

            if (isset($request->estruturas) && $request->estruturas == "estruturas") {
                $collection['estruturas'] = $request->estruturas;
            }
            if (isset($request->fundacao) && $request->fundacao == "fundacao") {
                $collection['fundacao'] = $request->fundacao;
            }
            if (isset($request->vedacao) && $request->vedacao == "vedacao") {
                $collection['vedacao'] = $request->vedacao;
            }

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
