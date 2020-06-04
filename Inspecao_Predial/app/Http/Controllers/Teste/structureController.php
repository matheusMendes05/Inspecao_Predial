<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use App\models\Teste\structures;
use Illuminate\Http\Request;

class structureController extends Controller
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
    public static function store(Request $request, $inspecao_id)
    {
        try {
            //code...

            $estruturas = new structures();
            $estruturas->inspecao_id = $inspecao_id;

            $estruturas->sistema_edificio = $request->txt_sistema_edificio;
            $estruturas->elemento_formulario = $request->txt_elemento_formulario;
            $estruturas->local = $request->txt_local;
            $estruturas->foto = $request->txt_foto;

            if (!empty($request->hasFile('txt_foto'))) {
                // armazenando foto na base de dados
                if ($request->file('txt_foto')->isValid()) {
                    // nomeando arquivo
                    $nameEstrutura = $request->txt_local . '.' . $request->txt_foto->extension();
                    $estruturas->foto = $request->file('txt_foto')->storeAs('estruturas/txt_foto', $nameEstrutura, 's3');
                } else {
                    $estruturas->foto = 'SEM IMAGEM';
                }
            }


            $estruturas->obs = $request->txt_obs;

            if ($estruturas->save()) {
                return redirect()->back()->withInput()->withErrors($estruturas->sistema_edificio . 'Salvo com Sucesso!');
            } else {
                return redirect()->back()->withInput()->withErrors('Ocorreu algum ERRO... Porfavor, Tente novamente');
            }
        } catch (\PDOException $th) {
            return "ERRO" . $th->getMessage();
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
