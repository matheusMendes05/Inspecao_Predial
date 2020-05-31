<?php

namespace App\Http\Controllers\Inspecao\Formularios\revestimento;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\revestimentos\parede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paredeController extends Controller
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

                $parede = new parede();

                $parede->inspecao_id = $inspecao_id;

                $parede->local_fissura = $request->txtLocalFissuraParede;
                // $parede->foto_fissura = $request->txtFotoFissuraParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFissuraParede'))) {
                    if ($request->file('txtFotoFissuraParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFissuraParede . '.' . $request->txtFotoFissuraParede->extension();
                        $parede->foto_fissura = $request->file('txtFotoFissuraParede')->storeAs('revestimento/parede/txtFotoFissuraParede', $nameEstrutura);
                    } else {
                        $parede->foto_fissura = 'SEM IMAGEM';
                    }
                }
                $parede->obs_fissura = $request->txtObsFissuraParede;

                $parede->local_destacamento = $request->txtLocalDestacamentoParede;
                // $parede->foto_destacamento = $request->txtFotoDestacamentoParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDestacamentoParede'))) {
                    if ($request->file('txtFotoDestacamentoParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDestacamentoParede . '.' . $request->txtFotoDestacamentoParede->extension();
                        $parede->foto_destacamento = $request->file('txtFotoDestacamentoParede')->storeAs('revestimento/parede/txtFotoDestacamentoParede', $nameEstrutura);
                    } else {
                        $parede->foto_destacamento = 'SEM IMAGEM';
                    }
                }
                $parede->obs_destacamento = $request->txtObsDestacamentoParede;

                $parede->local_infiltracao = $request->txtLocalInfiltracaoParede;
                // $parede->foto_infiltracao = $request->txtFotoInfiltracaoParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoInfiltracaoParede'))) {
                    if ($request->file('txtFotoInfiltracaoParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalInfiltracaoParede . '.' . $request->txtFotoInfiltracaoParede->extension();
                        $parede->foto_infiltracao = $request->file('txtFotoInfiltracaoParede')->storeAs('revestimento/parede/txtFotoInfiltracaoParede', $nameEstrutura);
                    } else {
                        $parede->foto_infiltracao = 'SEM IMAGEM';
                    }
                }
                $parede->obs_infiltracao = $request->txtObsInfiltracaoParede;

                $parede->local_eflorecencia = $request->txtLocalEflorescenciaParede;
                // $parede->foto_eflorecencia = $request->txtFotoEflorescenciaParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoEflorescenciaParede'))) {
                    if ($request->file('txtFotoEflorescenciaParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalEflorescenciaParede . '.' . $request->txtFotoEflorescenciaParede->extension();
                        $parede->foto_eflorecencia = $request->file('txtFotoEflorescenciaParede')->storeAs('revestimento/parede/txtFotoEflorescenciaParede', $nameEstrutura);
                    } else {
                        $parede->foto_eflorecencia = 'SEM IMAGEM';
                    }
                }
                $parede->obs_eflorecencia = $request->txtObsEflorescenciaParede;

                $parede->local_deficiencia = $request->txtLocalFaltaParede;
                // $parede->foto_deficiencia = $request->txtFotoFaltaParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFaltaParede'))) {
                    if ($request->file('txtFotoEflorescenciaParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaParede . '.' . $request->txtFotoFaltaParede->extension();
                        $parede->foto_deficiencia = $request->file('txtFotoFaltaParede')->storeAs('revestimento/parede/txtFotoFaltaParede', $nameEstrutura);
                    } else {
                        $parede->foto_deficiencia = 'SEM IMAGEM';
                    }
                }
                $parede->obs_deficiencia = $request->txtObsFaltaParede;

                $parede->local_bolhas = $request->txtLocalDescascamentoParede;
                // $parede->foto_bolhas = $request->txtFotoDescascamentoParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDescascamentoParede'))) {
                    if ($request->file('txtFotoDescascamentoParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDescascamentoParede . '.' . $request->txtFotoDescascamentoParede->extension();
                        $parede->foto_bolhas = $request->file('txtFotoDescascamentoParede')->storeAs('revestimento/parede/txtFotoDescascamentoParede', $nameEstrutura);
                    } else {
                        $parede->foto_bolhas = 'SEM IMAGEM';
                    }
                }
                $parede->obs_bolhas = $request->txtObsDescascamentoParede;

                $parede->local_falha = $request->txtLocalFalhaParede;
                // $parede->foto_falha = $request->txtFotoFalhaParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFalhaParede'))) {
                    if ($request->file('txtFotoFalhaParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFalhaParede . '.' . $request->txtFotoFalhaParede->extension();
                        $parede->foto_falha = $request->file('txtFotoFalhaParede')->storeAs('revestimento/parede/txtFotoFalhaParede', $nameEstrutura);
                    } else {
                        $parede->foto_falha = 'SEM IMAGEM';
                    }
                }
                $parede->obs_falha = $request->txtObsFalhaParede;

                $parede->local_abertura = $request->txtLocalAberturaParede;
                // $parede->foto_abertura = $request->txtFotoAberturaParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoAberturaParede'))) {
                    if ($request->file('txtFotoAberturaParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAberturaParede . '.' . $request->txtFotoAberturaParede->extension();
                        $parede->foto_abertura = $request->file('txtFotoAberturaParede')->storeAs('revestimento/parede/txtFotoAberturaParede', $nameEstrutura);
                    } else {
                        $parede->foto_abertura = 'SEM IMAGEM';
                    }
                }
                $parede->obs_abertura = $request->txtObsAberturaParede;

                $parede->local_som = $request->txtLocalSomParede;
                // $parede->foto_som = $request->txtFotoSomParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoSomParede'))) {
                    if ($request->file('txtFotoSomParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalSomParede . '.' . $request->txtFotoSomParede->extension();
                        $parede->foto_som = $request->file('txtFotoSomParede')->storeAs('revestimento/parede/txtFotoSomParede', $nameEstrutura);
                    } else {
                        $parede->foto_som = 'SEM IMAGEM';
                    }
                }
                $parede->obs_som = $request->txtObsSomParede;

                $parede->local_outro = $request->txtLocalOutroParede;
                // $parede->foto_outro = $request->txtFotoOutroParede;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoOutroParede'))) {
                    if ($request->file('txtFotoOutroParede')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroParede . '.' . $request->txtFotoOutroParede->extension();
                        $parede->foto_outro = $request->file('txtFotoOutroParede')->storeAs('revestimento/parede/txtFotoOutroParede', $nameEstrutura);
                    } else {
                        $parede->foto_outro = 'SEM IMAGEM';
                    }
                }
                $parede->obs_outro = $request->txtObsOutroParede;


                return $parede->save();
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
