<?php

namespace App\Http\Controllers\Inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\impermeabilizacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class impermeabilizacaoController extends Controller
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

                $impermeabilizacao = new impermeabilizacao();
                $impermeabilizacao->inspecao_id = $inspecao_id;


                $impermeabilizacao->local_infiltracao = $request->txtLocalInfiltracaoImpermeabilizacao;
                // $impermeabilizacao->foto_infiltracao = $request->txtFotoInfiltracaoImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoInfiltracaoImpermeabilizacao'))) {
                    if ($request->file('txtFotoInfiltracaoImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalInfiltracaoImpermeabilizacao . '.' . $request->txtFotoInfiltracaoImpermeabilizacao->extension();
                        $impermeabilizacao->foto_infiltracao = $request->file('txtFotoInfiltracaoImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoInfiltracaoImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_infiltracao = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_infiltracao = $request->txtObsInfiltracaoImpermeabilizacao;

                $impermeabilizacao->local_deslocamento = $request->txtLocalDescolamentoImpermeabilizacao;
                // $impermeabilizacao->foto_deslocamento = $request->txtFotoDescolamentoImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoDescolamentoImpermeabilizacao'))) {
                    if ($request->file('txtFotoDescolamentoImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDescolamentoImpermeabilizacao . '.' . $request->txtFotoDescolamentoImpermeabilizacao->extension();
                        $impermeabilizacao->foto_deslocamento = $request->file('txtFotoDescolamentoImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoDescolamentoImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_deslocamento = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_deslocamento = $request->txtObsDescolamentoImpermeabilizacao;

                $impermeabilizacao->local_sistema = $request->txtLocalSistemaImpermeabilizacao;
                // $impermeabilizacao->foto_sistema = $request->txtFotoSistemaImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoSistemaImpermeabilizacao'))) {
                    if ($request->file('txtFotoSistemaImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalSistemaImpermeabilizacao . '.' . $request->txtFotoSistemaImpermeabilizacao->extension();
                        $impermeabilizacao->foto_sistema = $request->file('txtFotoSistemaImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoSistemaImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_sistema = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_sistema = $request->txtObsSistemaImpermeabilizacao;

                $impermeabilizacao->local_ressecamento = $request->txtLocalRessecamentoImpermeabilizacao;
                // $impermeabilizacao->foto_ressecamento = $request->txtRessecamentoImpermeabilizacao;
                if (!empty($request->hasFile('txtRessecamentoImpermeabilizacao'))) {
                    if ($request->file('txtRessecamentoImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalRessecamentoImpermeabilizacao . '.' . $request->txtRessecamentoImpermeabilizacao->extension();
                        $impermeabilizacao->foto_ressecamento = $request->file('txtRessecamentoImpermeabilizacao')->storeAs('Impermeabilizacao/txtRessecamentoImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_ressecamento = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_ressecamento = $request->txtObsRessecamentoImpermeabilizacao;

                $impermeabilizacao->local_falta_junta = $request->txtLocalFaltaImpermeabilizacao;
                // $impermeabilizacao->foto_falta_junta = $request->txtFotoFaltaImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoFaltaImpermeabilizacao'))) {
                    if ($request->file('txtFotoFaltaImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaImpermeabilizacao . '.' . $request->txtFotoFaltaImpermeabilizacao->extension();
                        $impermeabilizacao->foto_falta_junta = $request->file('txtFotoFaltaImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoFaltaImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_falta_junta = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_falta_junta = $request->txtObsFaltaImpermeabilizacao;

                $impermeabilizacao->local_falta_caimento = $request->txtLocalCaimentoImpermeabilizacao;
                // $impermeabilizacao->foto_falta_caimento = $request->txtFotoCaimentoImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoCaimentoImpermeabilizacao'))) {
                    if ($request->file('txtFotoCaimentoImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCaimentoImpermeabilizacao . '.' . $request->txtFotoCaimentoImpermeabilizacao->extension();
                        $impermeabilizacao->foto_falta_caimento = $request->file('txtFotoCaimentoImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoCaimentoImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_falta_caimento = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_falta_caimento = $request->txtObsCaimentoImpermeabilizacao;

                $impermeabilizacao->local_falta_imper = $request->txtLocalTetoImpermeabilizacao;
                // $impermeabilizacao->foto_falta_imper = $request->txtFotoTetoImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoTetoImpermeabilizacao'))) {
                    if ($request->file('txtFotoTetoImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalTetoImpermeabilizacao . '.' . $request->txtFotoTetoImpermeabilizacao->extension();
                        $impermeabilizacao->foto_falta_imper = $request->file('txtFotoTetoImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoTetoImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_falta_imper = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_falta_imper = $request->txtObsTetoImpermeabilizacao;

                $impermeabilizacao->local_outro = $request->txtLocalOutroImpermeabilizacao;
                // $impermeabilizacao->foto_outro = $request->txtFotoOutroImpermeabilizacao;
                if (!empty($request->hasFile('txtFotoOutroImpermeabilizacao'))) {
                    if ($request->file('txtFotoOutroImpermeabilizacao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroImpermeabilizacao . '.' . $request->txtFotoOutroImpermeabilizacao->extension();
                        $impermeabilizacao->foto_outro = $request->file('txtFotoOutroImpermeabilizacao')->storeAs('Impermeabilizacao/txtFotoOutroImpermeabilizacao', $nameEstrutura);
                    } else {
                        $impermeabilizacao->foto_outro = 'SEM IMAGEM';
                    }
                }
                $impermeabilizacao->obs_outro = $request->txtObsOutroImpermeabilizacao;

                return $impermeabilizacao->save();
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
