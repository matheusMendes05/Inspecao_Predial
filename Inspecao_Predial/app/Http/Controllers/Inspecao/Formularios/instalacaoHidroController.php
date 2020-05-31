<?php

namespace App\Http\Controllers\Inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\instalacaoHidro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class instalacaoHidroController extends Controller
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
        //

        if (Auth::check() === true) {
            try {

                $hidro = new instalacaoHidro();
                $hidro->inspecao_id = $inspecao_id;

                $hidro->local_vazamento = $request->txtLocalVazamentoHidro;
                // $hidro->foto_vazamento = $request->txtFotoVazamentoHidro;
                if (!empty($request->hasFile('txtFotoVazamentoHidro'))) {
                    if ($request->file('txtFotoVazamentoHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalVazamentoHidro . '.' . $request->txtFotoVazamentoHidro->extension();
                        $hidro->foto_vazamento = $request->file('txtFotoVazamentoHidro')->storeAs('hidrossanitaria/txtFotoVazamentoHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_vazamento = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_vazamento = $request->txtObsVazamentoHidro;

                $hidro->local_deterioracao = $request->txtLocalDeterioracaoHidro;
                // $hidro->foto_deterioracao = $request->txtFotoDeterioracaoHidro;
                if (!empty($request->hasFile('txtFotoDeterioracaoHidro'))) {
                    if ($request->file('txtFotoDeterioracaoHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeterioracaoHidro . '.' . $request->txtFotoDeterioracaoHidro->extension();
                        $hidro->foto_deterioracao = $request->file('txtFotoDeterioracaoHidro')->storeAs('hidrossanitaria/txtFotoDeterioracaoHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_deterioracao = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_deterioracao = $request->txtObsDeterioracaoHidro;

                $hidro->local_tampas = $request->txtLocalTampasHidro;
                // $hidro->foto_tampas = $request->txtFotoTampasHidro;
                if (!empty($request->hasFile('txtFotoTampasHidro'))) {
                    if ($request->file('txtFotoTampasHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalTampasHidro . '.' . $request->txtFotoTampasHidro->extension();
                        $hidro->foto_tampas = $request->file('txtFotoTampasHidro')->storeAs('hidrossanitaria/txtFotoTampasHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_tampas = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_tampas = $request->txtObsTampasHidro;

                $hidro->local_nConformidade = $request->txtLocalPinturaHidro;
                // $hidro->foto_nConformidade = $request->txtFotoPinturaHidro;
                if (!empty($request->hasFile('txtFotoPinturaHidro'))) {
                    if ($request->file('txtFotoPinturaHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalPinturaHidro . '.' . $request->txtFotoPinturaHidro->extension();
                        $hidro->foto_nConformidade = $request->file('txtFotoPinturaHidro')->storeAs('hidrossanitaria/txtFotoPinturaHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_nConformidade = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_nConformidade = $request->txtObsPinturaHidro;

                $hidro->local_faltaIdent = $request->txtLocalFaltaHidro;
                // $hidro->foto_faltaIdent = $request->txtFotoFaltaHidro;
                if (!empty($request->hasFile('txtFotoFaltaHidro'))) {
                    if ($request->file('txtFotoFaltaHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaHidro . '.' . $request->txtFotoFaltaHidro->extension();
                        $hidro->foto_faltaIdent = $request->file('txtFotoFaltaHidro')->storeAs('hidrossanitaria/txtFotoFaltaHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_faltaIdent = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_faltaIdent = $request->txtObsFaltaHidro;

                $hidro->local_tubulacoes = $request->txtLocalTubulacoesHidro;
                // $hidro->foto_tubulacoes = $request->txtFotoTubulacoesHidro;
                if (!empty($request->hasFile('txtFotoTubulacoesHidro'))) {
                    if ($request->file('txtFotoTubulacoesHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalTubulacoesHidro . '.' . $request->txtFotoTubulacoesHidro->extension();
                        $hidro->foto_tubulacoes = $request->file('txtFotoTubulacoesHidro')->storeAs('hidrossanitaria/txtFotoTubulacoesHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_tubulacoes = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_tubulacoes = $request->txtObsTubulacoesHidro;

                $hidro->local_entupimento = $request->txtLocalEntupimentoHidro;
                // $hidro->foto_entupimento = $request->txtFotoEntupimentoHidro;
                if (!empty($request->hasFile('txtFotoEntupimentoHidro'))) {
                    if ($request->file('txtFotoEntupimentoHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalEntupimentoHidro . '.' . $request->txtFotoEntupimentoHidro->extension();
                        $hidro->foto_entupimento = $request->file('txtFotoEntupimentoHidro')->storeAs('hidrossanitaria/txtFotoEntupimentoHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_entupimento = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_entupimento = $request->txtObsEntupimentoHidro;

                $hidro->local_outro = $request->txtLocalOutroHidro;
                // $hidro->foto_outro = $request->txtFotoOutroHidro;
                if (!empty($request->hasFile('txtFotoOutroHidro'))) {
                    if ($request->file('txtFotoOutroHidro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroHidro . '.' . $request->txtFotoOutroHidro->extension();
                        $hidro->foto_outro = $request->file('txtFotoOutroHidro')->storeAs('hidrossanitaria/txtFotoOutroHidro', $nameEstrutura);
                    } else {
                        $hidro->foto_outro = 'SEM IMAGEM';
                    }
                }
                $hidro->obs_outro = $request->txtObsOutroHidro;

                return $hidro->save();

            } catch (\PDOException $th) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO]' . $th->getMessage());
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
