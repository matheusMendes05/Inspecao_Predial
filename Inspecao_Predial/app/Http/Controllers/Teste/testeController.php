<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use App\models\Inspecao\inspecao;
use App\models\inspection\estrutura;
use App\models\Teste\structures;
use App\models\Teste\teste;
use Illuminate\Http\Request;

class testeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $estrutura = structures::all();

        // dd($estrutura);

        return view('Web._teste.historico', [
            'estruturas' => $estrutura
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Web._teste.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inspecao = new inspecao();
        $inspecao->edificio_id = 1;
        $inspecao->responsavel_acompanhamento_obra = $request->responsavelObra;
        $inspecao->save();

        if (isset($request->txt_sistema_edificio) && $request->txt_sistema_edificio == "Estruturas") {
            return structureController::store($request, $inspecao->id);
        }

        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($elemento_id)
    {
        //
        $elemento = structures::where('id', $elemento_id)->first();

        // dd($elemento);
        return view('Web._teste.analiseElemento', [
            'elemento' => $elemento
        ]);
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
