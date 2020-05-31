<?php

namespace App\Http\Controllers\Inspecao\Formularios\revestimento;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\revestimentos\piso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pisoController extends Controller
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

                $piso = new piso();

                $piso->inspecao_id = $inspecao_id;

                $piso->estado_piso = $request->estado;

                $piso->local_fissura = $request->txtLocalFissuraPiso;
                // $piso->foto_fissura = $request->txtFotoFissuraPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFissuraPiso'))) {
                    if ($request->file('txtFotoFissuraPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFissuraPiso . '.' . $request->txtFotoFissuraPiso->extension();
                        $piso->foto_fissura = $request->file('txtFotoFissuraPiso')->storeAs('revestimento/piso/txtFotoFissuraPiso', $nameEstrutura);
                    } else {
                        $piso->foto_fissura = 'SEM IMAGEM';
                    }
                }
                $piso->obs_fissura = $request->txtObsFissuraPiso;

                $piso->local_deficiencia_juntas = $request->txtLocalFaltaPiso;
                // $piso-> = $request->txtFotoFaltaPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFaltaPiso'))) {
                    if ($request->file('txtFotoFaltaPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFaltaPiso . '.' . $request->txtFotoFaltaPiso->extension();
                        $piso->foto_deficiencia_juntas = $request->file('txtFotoFissuraPiso')->storeAs('revestimento/piso/txtFotoFaltaPiso', $nameEstrutura);
                    } else {
                        $piso->foto_deficiencia_juntas = 'SEM IMAGEM';
                    }
                }
                $piso->obs_deficiencia_juntas = $request->txtObsFaltaPiso;

                $piso->local_destacamento = $request->txtLocalDestacamentoPiso;
                // $piso->foto_destacamento = $request->txtFotoDestacamentoPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDestacamentoPiso'))) {
                    if ($request->file('txtFotoDestacamentoPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->local_destacamento . '.' . $request->txtFotoDestacamentoPiso->extension();
                        $piso->foto_destacamento = $request->file('txtFotoDestacamentoPiso')->storeAs('revestimento/piso/txtFotoDestacamentoPiso', $nameEstrutura);
                    } else {
                        $piso->foto_destacamento = 'SEM IMAGEM';
                    }
                }
                $piso->obs_destacamento = $request->txtObsDestacamentoPiso;

                $piso->local_caimento = $request->txtLocalCaimentoPiso;
                // $piso->foto_caimento = $request->txtFotoCaimentoPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoCaimentoPiso'))) {
                    if ($request->file('txtFotoCaimentoPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCaimentoPiso . '.' . $request->txtFotoCaimentoPiso->extension();
                        $piso->foto_caimento = $request->file('txtFotoCaimentoPiso')->storeAs('revestimento/piso/txtFotoCaimentoPiso', $nameEstrutura);
                    } else {
                        $piso->foto_caimento = 'SEM IMAGEM';
                    }
                }
                $piso->obs_caimento = $request->txtObsCaimentoPiso;

                $piso->local_escadas_sem_protecao = $request->txtLocalEscadasPiso;
                // $piso->foto_escadas_sem_protecao = $request->txtFotoEscadasPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoEscadasPiso'))) {
                    if ($request->file('txtFotoEscadasPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalEscadasPiso . '.' . $request->txtFotoCaimentoPiso->extension();
                        $piso->foto_escadas_sem_protecao = $request->file('txtFotoEscadasPiso')->storeAs('revestimento/piso/txtFotoEscadasPiso', $nameEstrutura);
                    } else {
                        $piso->foto_escadas_sem_protecao = 'SEM IMAGEM';
                    }
                }
                $piso->obs_escadas_sem_protecao = $request->txtObsEscadasPiso;

                $piso->local_manchas = $request->txtLocalManchasPiso;
                // $piso->foto_manchas = $request->txtFotoManchasPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoManchasPiso'))) {
                    if ($request->file('txtFotoManchasPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalManchasPiso . '.' . $request->txtFotoManchasPiso->extension();
                        $piso->foto_manchas = $request->file('txtFotoManchasPiso')->storeAs('revestimento/piso/txtFotoManchasPiso', $nameEstrutura);
                    } else {
                        $piso->foto_manchas = 'SEM IMAGEM';
                    }
                }
                $piso->obs_manchas = $request->txtObsManchasPiso;

                $piso->local_abatimento = $request->txtLocalAbatimentoPiso;
                // $piso->foto_abatimento = $request->txtFotoAbatimentoPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoAbatimentoPiso'))) {
                    if ($request->file('txtFotoAbatimentoPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalAbatimentoPiso . '.' . $request->txtFotoAbatimentoPiso->extension();
                        $piso->foto_abatimento = $request->file('txtFotoAbatimentoPiso')->storeAs('revestimento/piso/txtFotoAbatimentoPiso', $nameEstrutura);
                    } else {
                        $piso->foto_abatimento = 'SEM IMAGEM';
                    }
                }
                $piso->obs_abatimanto = $request->txtObsAbatimentoPiso;

                $piso->local_som = $request->txtLocalSomPiso;
                // $piso->foto_som = $request->txtFotoSomPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoSomPiso'))) {
                    if ($request->file('txtFotoSomPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalSomPiso . '.' . $request->txtFotoSomPiso->extension();
                        $piso->foto_som = $request->file('txtFotoSomPiso')->storeAs('revestimento/piso/txtFotoSomPiso', $nameEstrutura);
                    } else {
                        $piso->foto_som = 'SEM IMAGEM';
                    }
                }
                $piso->obs_som = $request->txtObsSomPiso;

                $piso->local_outros = $request->txtLocalOutroPiso;
                // $piso->foto_outros = $request->txtFotoOutroPiso;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoOutroPiso'))) {
                    if ($request->file('txtFotoOutroPiso')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroPiso . '.' . $request->txtFotoSomPiso->extension();
                        $piso->foto_outros = $request->file('txtFotoOutroPiso')->storeAs('revestimento/piso/txtFotoOutroPiso', $nameEstrutura);
                    } else {
                        $piso->foto_outros = 'SEM IMAGEM';
                    }
                }
                $piso->obs_outros = $request->txtObsOutroPiso;

                return $piso->save();
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
