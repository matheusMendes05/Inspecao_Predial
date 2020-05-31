<?php

namespace App\Http\Controllers\Inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\instalacaoGas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class instalacaoGasController extends Controller
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
        //
        if (Auth::check() === true) {
            try {

                $instal_gas = new instalacaoGas();
                $instal_gas->inspecao_id = $inspecao_id;


                $instal_gas->local_vazamentos = $request->txtLocalVazamentoGas;
                // $instal_gas->foto_vazamentos = $request->txtFotoVazamentoGas;
                if (!empty($request->hasFile('txtFotoVazamentoGas'))) {
                    if ($request->file('txtFotoVazamentoGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalVazamentoGas . '.' . $request->txtFotoVazamentoGas->extension();
                        $instal_gas->foto_vazamentos = $request->file('txtFotoVazamentoGas')->storeAs('InstalacaoGas/txtFotoVazamentoGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_vazamentos = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_vazamentos = $request->txtObsVazamentoGas;

                $instal_gas->local_deterioracao = $request->txtLocalDeterioracaoGas;
                // $instal_gas->foto_deterioracao = $request->txtFotoDeterioracaoGas;
                if (!empty($request->hasFile('txtFotoDeterioracaoGas'))) {
                    if ($request->file('txtFotoDeterioracaoGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeterioracaoGas . '.' . $request->txtFotoDeterioracaoGas->extension();
                        $instal_gas->foto_deterioracao = $request->file('txtFotoDeterioracaoGas')->storeAs('InstalacaoGas/txtFotoDeterioracaoGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_deterioracao = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_deterioracao = $request->txtObsDeterioracaoGas;

                $instal_gas->local_nConformidadeP = $request->txtLocalPinturaGas;
                // $instal_gas->foto_nConformidadeP = $request->txtFotoPinturaGas;
                if (!empty($request->hasFile('txtFotoPinturaGas'))) {
                    if ($request->file('txtFotoPinturaGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalPinturaGas . '.' . $request->txtFotoPinturaGas->extension();
                        $instal_gas->foto_nConformidadeP = $request->file('txtFotoPinturaGas')->storeAs('InstalacaoGas/txtFotoPinturaGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_nConformidadeP = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_nConformidadeP = $request->txtObsPinturaGas;

                $instal_gas->local_nConformidadeD = $request->txtLocalDimensoesGas;
                // $instal_gas->foto_nConformidadeD = $request->txtFotoDimensoesGas;
                if (!empty($request->hasFile('txtFotoDimensoesGas'))) {
                    if ($request->file('txtFotoDimensoesGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDimensoesGas . '.' . $request->txtFotoDimensoesGas->extension();
                        $instal_gas->foto_nConformidadeD = $request->file('txtFotoDimensoesGas')->storeAs('InstalacaoGas/txtFotoDimensoesGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_nConformidadeD = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_nConformidadeD = $request->txtObsDimensoesGas;

                $instal_gas->local_fAbertura = $request->txtLocalFaltaGas;
                // $instal_gas->foto_fAbertura = $request->txtFotoFaltaGas;
                if (!empty($request->hasFile('txtFotoFaltaGas'))) {
                    if ($request->file('txtFotoFaltaGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaGas . '.' . $request->txtFotoFaltaGas->extension();
                        $instal_gas->foto_fAbertura = $request->file('txtFotoFaltaGas')->storeAs('InstalacaoGas/txtFotoFaltaGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_fAbertura = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_fAbertura = $request->txtObsFaltaGas;

                $instal_gas->local_abertura = $request->txtLocalAberturaGas;
                // $instal_gas->foto_abertura = $request->txtFotoAberturaGas;
                if (!empty($request->hasFile('txtFotoAberturaGas'))) {
                    if ($request->file('txtFotoAberturaGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAberturaGas . '.' . $request->txtFotoAberturaGas->extension();
                        $instal_gas->foto_abertura = $request->file('txtFotoAberturaGas')->storeAs('InstalacaoGas/txtFotoAberturaGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_abertura = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_abertura = $request->txtObsAberturaGas;

                $instal_gas->local_faltaS = $request->txtLocalSinalizacaoGas;
                // $instal_gas->foto_faltaS = $request->txtFotoSinalizacaoGas;
                if (!empty($request->hasFile('txtFotoSinalizacaoGas'))) {
                    if ($request->file('txtFotoSinalizacaoGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalSinalizacaoGas . '.' . $request->txtFotoSinalizacaoGas->extension();
                        $instal_gas->foto_faltaS = $request->file('txtFotoSinalizacaoGas')->storeAs('InstalacaoGas/txtFotoSinalizacaoGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_faltaS = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_faltaS = $request->txtObsSinalizacaoGas;

                $instal_gas->local_outro = $request->txtLocalOutroGas;
                // $instal_gas->foto_outro = $request->txtFotoOutroGas;
                if (!empty($request->hasFile('txtFotoOutroGas'))) {
                    if ($request->file('txtFotoOutroGas')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroGas . '.' . $request->txtFotoOutroGas->extension();
                        $instal_gas->foto_outro = $request->file('txtFotoOutroGas')->storeAs('InstalacaoGas/txtFotoOutroGas', $nameEstrutura);
                    } else {
                        $instal_gas->foto_outro = 'SEM IMAGEM';
                    }
                }
                $instal_gas->obs_outro = $request->txtObsOutroGas;

                return $instal_gas->save();

                
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
