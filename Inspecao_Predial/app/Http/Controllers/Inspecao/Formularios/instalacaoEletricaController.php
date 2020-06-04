<?php

namespace App\Http\Controllers\inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\instalacaoEletrica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class instalacaoEletricaController extends Controller
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

                $instalEletrica = new instalacaoEletrica();
                $instalEletrica->inspecao_id = $inspecao_id;

                $instalEletrica->local_LampadaQ = $request->txtLocalLampadasEletrica;
                // $instalEletrica->foto_LampadaQ = $request->txtFotoLampadasEletrica;
                if (!empty($request->hasFile('txtFotoLampadasEletrica'))) {
                    if ($request->file('txtFotoLampadasEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalLampadasEletrica . '.' . $request->txtFotoLampadasEletrica->extension();
                        $instalEletrica->foto_LampadaQ = $request->file('txtFotoLampadasEletrica')->storeAs('InstalacaoEletrica/txtFotoLampadasEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_LampadaQ = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_LampadaQ = $request->txtObsLampadasEletrica;

                $instalEletrica->local_ataqueP = $request->txtLocalAtaqueEletrica;
                // $instalEletrica->foto_ataqueP = $request->txtFotoAtaqueEletrica;
                if (!empty($request->hasFile('txtFotoAtaqueEletrica'))) {
                    if ($request->file('txtFotoAtaqueEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAtaqueEletrica . '.' . $request->txtFotoAtaqueEletrica->extension();
                        $instalEletrica->foto_ataqueP = $request->file('txtFotoAtaqueEletrica')->storeAs('InstalacaoEletrica/txtFotoAtaqueEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_ataqueP = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_ataqueP = $request->txtObsAtaqueEletrica;

                $instalEletrica->local_modificacaoE = $request->txtLocalModificacoesEletrica;
                // $instalEletrica->foto_modificacaoE = $request->txtFotoModificacoesEletrica;
                if (!empty($request->hasFile('txtFotoModificacoesEletrica'))) {
                    if ($request->file('txtFotoModificacoesEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalModificacoesEletrica . '.' . $request->txtFotoModificacoesEletrica->extension();
                        $instalEletrica->foto_modificacaoE = $request->file('txtFotoModificacoesEletrica')->storeAs('InstalacaoEletrica/txtFotoModificacoesEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_modificacaoE = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_modificacaoE = $request->txtObsModificacoesEletrica;

                $instalEletrica->local_superaquecimento = $request->txtLocalSuperaquecimentoEletrica;
                // $instalEletrica->foto_superaquecimento = $request->txtFotoSuperaquecimentoEletrica;
                if (!empty($request->hasFile('txtFotoSuperaquecimentoEletrica'))) {
                    if ($request->file('txtFotoSuperaquecimentoEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalSuperaquecimentoEletrica . '.' . $request->txtFotoSuperaquecimentoEletrica->extension();
                        $instalEletrica->foto_superaquecimento = $request->file('txtFotoSuperaquecimentoEletrica')->storeAs('InstalacaoEletrica/txtFotoSuperaquecimentoEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_superaquecimento = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_superaquecimento = $request->txtObsSuperaquecimentoEletrica;

                $instalEletrica->local_flacoes = $request->txtLocalFiacoesEletrica;
                // $instalEletrica->foto_flacoes = $request->txtFotoFiacoesEletrica;
                if (!empty($request->hasFile('txtFotoFiacoesEletrica'))) {
                    if ($request->file('txtFotoFiacoesEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFiacoesEletrica . '.' . $request->txtFotoFiacoesEletrica->extension();
                        $instalEletrica->foto_flacoes = $request->file('txtFotoFiacoesEletrica')->storeAs('InstalacaoEletrica/txtFotoFiacoesEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_flacoes = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_flacoes = $request->txtObsFiacoesEletrica;

                $instalEletrica->local_curtoC = $request->txtLocalCurtoEletrica;
                // $instalEletrica->foto_curtoC = $request->txtFotoCurtoEletrica;
                if (!empty($request->hasFile('txtFotoCurtoEletrica'))) {
                    if ($request->file('txtFotoCurtoEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCurtoEletrica . '.' . $request->txtFotoCurtoEletrica->extension();
                        $instalEletrica->foto_curtoC = $request->file('txtFotoCurtoEletrica')->storeAs('InstalacaoEletrica/txtFotoCurtoEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_curtoC = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_curtoC = $request->txtObsCurtoEletrica;

                $instalEletrica->local_quadroL = $request->txtLocalQuadroEletrica;
                // $instalEletrica->foto_quadroL = $request->txtFotoQuadroEletrica;
                if (!empty($request->hasFile('txtFotoQuadroEletrica'))) {
                    if ($request->file('txtFotoQuadroEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalQuadroEletrica . '.' . $request->txtFotoQuadroEletrica->extension();
                        $instalEletrica->foto_quadroL = $request->file('txtFotoQuadroEletrica')->storeAs('InstalacaoEletrica/txtFotoQuadroEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_quadroL = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_quadroL = $request->txtObsQuadroEletrica;

                $instalEletrica->local_ausenciaP = $request->txtLocalAusenciaEletrica;
                // $instalEletrica->foto_ausenciaP = $request->txtFotoAusenciaEletrica;
                if (!empty($request->hasFile('txtFotoAusenciaEletrica'))) {
                    if ($request->file('txtFotoAusenciaEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAusenciaEletrica . '.' . $request->txtFotoAusenciaEletrica->extension();
                        $instalEletrica->foto_ausenciaP = $request->file('txtFotoAusenciaEletrica')->storeAs('InstalacaoEletrica/txtFotoAusenciaEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_ausenciaP = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_ausenciaP = $request->txtObsAusenciaEletrica;

                $instalEletrica->local_falhaT = $request->txtLocalFalhaEletrica;
                // $instalEletrica->foto_falhaT = $request->txtFotoFalhaEletrica;
                if (!empty($request->hasFile('txtFotoFalhaEletrica'))) {
                    if ($request->file('txtFotoFalhaEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFalhaEletrica . '.' . $request->txtFotoFalhaEletrica->extension();
                        $instalEletrica->foto_falhaT = $request->file('txtFotoFalhaEletrica')->storeAs('InstalacaoEletrica/txtFotoFalhaEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_falhaT = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_falhaT = $request->txtObsFalhaEletrica;

                $instalEletrica->local_cercaE = $request->txtLocalCercaEletrica;
                // $instalEletrica->foto_cercaE = $request->txtFotoCercaEletrica;
                if (!empty($request->hasFile('txtFotoCercaEletrica'))) {
                    if ($request->file('txtFotoCercaEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCercaEletrica . '.' . $request->txtFotoCercaEletrica->extension();
                        $instalEletrica->foto_cercaE = $request->file('txtFotoCercaEletrica')->storeAs('InstalacaoEletrica/txtFotoCercaEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_cercaE = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_cercaE = $request->txtObsCercaEletrica;

                $instalEletrica->local_outros = $request->txtLocalOutroEletrica;
                // $instalEletrica->foto_outros = $request->txtFotoOutroEletrica;
                if (!empty($request->hasFile('txtFotoOutroEletrica'))) {
                    if ($request->file('txtFotoOutroEletrica')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroEletrica . '.' . $request->txtFotoOutroEletrica->extension();
                        $instalEletrica->foto_outros = $request->file('txtFotoOutroEletrica')->storeAs('InstalacaoEletrica/txtFotoOutroEletrica', $nameEstrutura, 's3');
                    } else {
                        $instalEletrica->foto_outros = 'SEM IMAGEM';
                    }
                }
                $instalEletrica->obs_outros = $request->txtObsOutroEletrica;

                return $instalEletrica->save();
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
