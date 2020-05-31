<?php

namespace App\Http\Controllers\inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\inspecao\formularios\fundacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fundacoesController extends Controller
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

        if (Auth::check() === true) {

            try {

                $fundacao = new fundacoes();

                $fundacao->inspecao_id = $inspecao_id;

                $fundacao->local_erosao_solo = $request->localErosao;
                if (!empty($request->hasFile('fotoErosao'))) {
                    if ($request->file('fotoErosao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localErosao . '.' . $request->fotoErosao->extension();
                        $fundacao->foto_erosao_solo = $request->file('fotoErosao')->storeAs('fundacao/fotoErosao', $nameEstrutura);
                    } else {
                        $fundacao->foto_erosao_solo = 'SEM IMAGEM';
                    }
                }
                // $fundacao->foto_erosao_solo = $request->fotoErosao;
                $fundacao->obs_erosao_solo = $request->obsErosao;

                $fundacao->local_recalque_diferencial = $request->localRecalque;
                if (!empty($request->hasFile('fotoRecalque'))) {
                    if ($request->file('fotoRecalque')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localRecalque . '.' . $request->fotoRecalque->extension();
                        $fundacao->foto_recalque_diferencial = $request->file('fotoRecalque')->storeAs('fundacao/fotoRecalque', $nameEstrutura);
                    } else {
                        $fundacao->foto_recalque_diferencial = 'SEM IMAGEM';
                    }
                }
                // $fundacao->foto_recalque_diferencial = $request->fotoRecalque;
                $fundacao->obs_recalque_diferencial = $request->obsRecalque;

                $fundacao->local_outro = $request->localOutro;
                if (!empty($request->hasFile('fotoOutro'))) {
                    if ($request->file('fotoOutro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localRecalque . '.' . $request->fotoOutro->extension();
                        $fundacao->foto_outro = $request->file('fotoOutro')->storeAs('fundacao/fotoOutro', $nameEstrutura);
                    } else {
                        $fundacao->foto_outro = 'SEM IMAGEM';
                    }
                }
                // $fundacao->foto_outro = $request->fotoOutro;
                $fundacao->obs_outro = $request->obsOutro;

                return $fundacao->save();
            } catch (\PDOException $th) {

                return redirect()->back()->withInput()->withErrors('[ERRO] ' . $th->getMessage());
            }
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
