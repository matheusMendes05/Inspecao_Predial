<?php

namespace App\Http\Controllers\Inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\esquadria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class esquadriaController extends Controller
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

                $esquadria = new esquadria();

                $esquadria->inspecao_id = $inspecao_id;

                $esquadria->estado_esquadria = $request->estado_esquadria;

                $esquadria->local_deficiencia_pintura = $request->txtLocalDeficienciaEsquadria;
                // $esquadria->foto_deficiencia_pintura = $request->txtFotoDeficienciaEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDeficienciaEsquadria'))) {
                    if ($request->file('txtFotoDeficienciaEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeficienciaEsquadria . '.' . $request->txtFotoDeficienciaEsquadria->extension();
                        $esquadria->foto_deficiencia_pintura = $request->file('txtFotoDeficienciaEsquadria')->storeAs('revestimento/esquadria/DeficienciaEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_deficiencia_pintura = 'SEM IMAGEM';
                    }
                }, 's3'
                $esquadria->obs_deficiencia_pintura = $request->txtObsDeficienciaEsquadria;

                $esquadria->local_pragas = $request->txtLocalAtaqueEsquadria;
                // $esquadria->foto_pragas = $request->txtFotoAtaqueEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoAtaqueEsquadria'))) {
                    if ($request->file('txtFotoAtaqueEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAtaqueEsquadria . '.' . $request->txtFotoAtaqueEsquadria->extension();
                        $esquadria->foto_pragas = $request->file('txtFotoAtaqueEsquadria')->storeAs('revestimento/esquadria/AtaqueEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_pragas = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_pragas = $request->txtObsAtaqueEsquadria;

                $esquadria->local_perda_mobilidade = $request->txtLocalPerdaEsquadria;
                // $esquadria->foto_perda_mobilidade = $request->txtFotoPerdaEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoPerdaEsquadria'))) {
                    if ($request->file('txtFotoPerdaEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalPerdaEsquadria . '.' . $request->txtFotoPerdaEsquadria->extension();
                        $esquadria->foto_perda_mobilidade = $request->file('txtFotoPerdaEsquadria')->storeAs('revestimento/esquadria/PerdaEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_perda_mobilidade = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_perda_mobilidade = $request->txtObsPerdaEsquadria;

                $esquadria->local_folga = $request->txtLocalFolgaEsquadria;
                // $esquadria->foto_folga = $request->txtFotoFolgaEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFolgaEsquadria'))) {
                    if ($request->file('txtFotoFolgaEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFolgaEsquadria . '.' . $request->txtFotoFolgaEsquadria->extension();
                        $esquadria->foto_folga = $request->file('txtFotoFolgaEsquadria')->storeAs('revestimento/esquadria/FotoFolgaEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_folga = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_folga = $request->txtObsFolgaEsquadria;

                $esquadria->local_rompimento = $request->txtLocalRompimentoEsquadria;
                // $esquadria->foto_rompimento = $request->txtFotoRompimentoEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoRompimentoEsquadria'))) {
                    if ($request->file('txtFotoRompimentoEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalRompimentoEsquadria . '.' . $request->txtFotoRompimentoEsquadria->extension();
                        $esquadria->foto_rompimento = $request->file('txtFotoRompimentoEsquadria')->storeAs('revestimento/esquadria/RompimentoEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_rompimento = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_rompimento = $request->txtObsRompimentoEsquadria;

                $esquadria->local_componentes = $request->txtLocalComponentesEsquadria;
                // $esquadria->foto_componentes = $request->txtFotoComponentesEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoComponentesEsquadria'))) {
                    if ($request->file('txtFotoComponentesEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalComponentesEsquadria . '.' . $request->txtFotoComponentesEsquadria->extension();
                        $esquadria->foto_componentes = $request->file('txtFotoComponentesEsquadria')->storeAs('revestimento/esquadria/ComponentesEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_componentes = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_componentes = $request->txtObsComponentesEsquadria;

                $esquadria->local_outro = $request->txtLocalOutroEsquadria;
                // $esquadria-> = $request->txtFotoOutroEsquadria;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoOutroEsquadria'))) {
                    if ($request->file('txtFotoOutroEsquadria')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroEsquadria . '.' . $request->txtFotoOutroEsquadria->extension();
                        $esquadria->foto_outro = $request->file('txtFotoOutroEsquadria')->storeAs('revestimento/esquadria/OutroEsquadria', $nameEstrutura, 's3');
                    } else {
                        $esquadria->foto_outro = 'SEM IMAGEM';
                    }
                }
                $esquadria->obs_outro = $request->txtObsOutroEsquadria;

                return $esquadria->save();
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
