<?php

namespace App\Http\Controllers\Inspecao\Formularios\revestimento;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\revestimentos\fachada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fachadaController extends Controller
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
        //check all users
        if (Auth::check() === true) {

            try {

                //code...
                $fachada = new fachada();

                $fachada->inspecao_id = $inspecao_id;

                $fachada->estado_fachada = $request->tipo_fachada;

                $fachada->local_fissura = $request->txtLocalFissuraFachada;
                // $fachada->foto_fissura = $request->txtFotoFissuraFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFissuraFachada'))) {
                    if ($request->file('txtFotoFissuraFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFissuraFachada . '.' . $request->txtFotoFissuraFachada->extension();
                        $fachada->foto_fissura = $request->file('txtFotoFissuraFachada')->storeAs('revestimento/fachadas/txtFotoFissuraFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_fissura = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_fissura = $request->txtObsFissuraFachada;

                $fachada->local_destacamento = $request->txtLocalDestacamentoFachada;
                // $fachada->foto_destacamento = $request->txtFotoDestacamentoFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDestacamentoFachada'))) {
                    if ($request->file('txtFotoDestacamentoFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDestacamentoFachada . '.' . $request->txtFotoDestacamentoFachada->extension();
                        $fachada->foto_destacamento = $request->file('txtFotoDestacamentoFachada')->storeAs('revestimento/fachadas/txtFotoDestacamentoFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_destacamento = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_destacamento = $request->txtObsDestacamentoFachada;

                $fachada->local_descascamento = $request->txtLocalDescascamentoFachada;
                // $fachada->foto_descascamento = $request->txtFotoDescascamentoFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDescascamentoFachada'))) {
                    if ($request->file('txtFotoDescascamentoFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDescascamentoFachada . '.' . $request->txtFotoDescascamentoFachada->extension();
                        $fachada->foto_descascamento = $request->file('txtFotoDescascamentoFachada')->storeAs('revestimento/fachadas/txtFotoDescascamentoFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_descascamento = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_descascamento = $request->txtObsDescascamentoFachada;

                $fachada->local_eflorecencia = $request->txtLocalEflorescenciaFachada;
                // $fachada->foto_eflorecencia = $request->txtFotoEflorescenciaFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoEflorescenciaFachada'))) {
                    if ($request->file('txtFotoEflorescenciaFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalEflorescenciaFachada . '.' . $request->txtFotoEflorescenciaFachada->extension();
                        $fachada->foto_eflorecencia = $request->file('txtFotoEflorescenciaFachada')->storeAs('revestimento/fachadas/txtFotoEflorescenciaFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_eflorecencia = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_eflorecencia = $request->txtObsEflorescenciaFachada;

                $fachada->local_falta_deficiencia = $request->txtLocalFaltaFachada;
                // $fachada->foto_falta_deficiencia = $request->txtFotoFaltaFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFaltaFachada'))) {
                    if ($request->file('txtFotoFaltaFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaFachada . '.' . $request->txtFotoFaltaFachada->extension();
                        $fachada->foto_falta_deficiencia = $request->file('txtFotoFaltaFachada')->storeAs('revestimento/fachadas/txtFotoFaltaFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_falta_deficiencia = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_falta_deficiencia = $request->txtObsFaltaFachada;

                $fachada->local_falta_pintura = $request->txtLocalDeficienciaFachada;
                // $fachada->foto_falta_pintura = $request->txtFotoDeficienciaFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDeficienciaFachada'))) {
                    if ($request->file('txtFotoDeficienciaFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeficienciaFachada . '.' . $request->txtFotoDeficienciaFachada->extension();
                        $fachada->foto_falta_pintura = $request->file('txtFotoDeficienciaFachada')->storeAs('revestimento/fachadas/txtFotoDeficienciaFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_falta_pintura = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_falta_pintura = $request->txtObsDeficienciaFachada;

                $fachada->local_desgaste = $request->txtLocalDesgasteFachada;
                // $fachada->foto_desgaste = $request->txtFotoDesgasteFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDesgasteFachada'))) {
                    if ($request->file('txtFotoDesgasteFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDesgasteFachada . '.' . $request->txtFotoDesgasteFachada->extension();
                        $fachada->foto_desgaste = $request->file('txtFotoDesgasteFachada')->storeAs('revestimento/fachadas/txtFotoDesgasteFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_desgaste = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_desgaste = $request->txtObsDesgasteFachada;

                $fachada->local_praga = $request->txtLocalAtaqueFachada;
                // $fachada->foto_praga = $request->txtFotoAtaqueFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoAtaqueFachada'))) {
                    if ($request->file('txtFotoAtaqueFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAtaqueFachada . '.' . $request->txtFotoAtaqueFachada->extension();
                        $fachada->foto_praga = $request->file('txtFotoAtaqueFachada')->storeAs('revestimento/fachadas/txtFotoAtaqueFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_praga = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_praga = $request->txtObsAtaqueFachada;

                $fachada->local_vidros = $request->txtLocalVidrosFachada;
                // $fachada->foto_vidros = $request->txtFotoVidrosFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoVidrosFachada'))) {
                    if ($request->file('txtFotoVidrosFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalVidrosFachada . '.' . $request->txtFotoVidrosFachada->extension();
                        $fachada->foto_vidros = $request->file('txtFotoVidrosFachada')->storeAs('revestimento/fachadas/txtFotoVidrosFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_vidros = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_vidros = $request->txtObsVidrosFachada;

                $fachada->local_rompimento = $request->txtLocalRompimentoFachada;
                // $fachada->foto_rompimento = $request->txtFotoRompimentoFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoRompimentoFachada'))) {
                    if ($request->file('txtFotoRompimentoFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalRompimentoFachada . '.' . $request->txtFotoRompimentoFachada->extension();
                        $fachada->foto_rompimento = $request->file('txtFotoRompimentoFachada')->storeAs('revestimento/fachadas/txtFotoRompimentoFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_rompimento = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_rompimento = $request->txtObsRompimentoFachada;

                $fachada->local_caixa = $request->txtLocalCaixaFachada;
                // $fachada->foto_caixa = $request->txtFotoCaixaFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoCaixaFachada'))) {
                    if ($request->file('txtFotoCaixaFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCaixaFachada . '.' . $request->txtFotoCaixaFachada->extension();
                        $fachada->foto_caixa = $request->file('txtFotoCaixaFachada')->storeAs('revestimento/fachadas/txtFotoCaixaFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_caixa = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_caixa = $request->txtObsCaixaFachada;

                $fachada->local_outro = $request->txtLocalOutroFachada;
                // $fachada->foto_outro = $request->txtFotoOutroFachada;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoOutroFachada'))) {
                    if ($request->file('txtFotoOutroFachada')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroFachada . '.' . $request->txtFotoOutroFachada->extension();
                        $fachada->foto_outro = $request->file('txtFotoOutroFachada')->storeAs('revestimento/fachadas/txtFotoOutroFachada', $nameEstrutura, 's3');
                    } else {
                        $fachada->foto_outro = 'SEM IMAGEM';
                    }
                }
                $fachada->obs_outro = $request->txtObsOutroFachada;

                return $fachada->save();
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
