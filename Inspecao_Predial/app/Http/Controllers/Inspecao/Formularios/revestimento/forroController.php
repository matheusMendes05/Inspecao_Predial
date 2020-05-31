<?php

namespace App\Http\Controllers\Inspecao\Formularios\revestimento;

use App\Http\Controllers\Controller;
use App\models\Inspecao\formularios\revestimentos\forro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class forroController extends Controller
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
                $forro = new forro();

                $forro->inspecao_id = $inspecao_id;

                $forro->tipo_revestimento = $request->tipo_revestimento;

                $forro->local_deformacao_excessiva = $request->txtLocalDeformacaoForro;
                // $forro->foto_deformacao_excessiva = $request->txtFotoDeformacaoForro;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoDeformacaoForro'))) {
                    if ($request->file('txtFotoDeformacaoForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeformacaoForro . '.' . $request->txtFotoDeformacaoForro->extension();
                        $forro->foto_deformacao_excessiva = $request->file('txtFotoDeformacaoForro')->storeAs('revestimento/forro/txtFotoDeformacaoForro', $nameEstrutura);
                    } else {
                        $forro->foto_deformacao_excessiva = 'SEM IMAGEM';
                    }
                }
                $forro->obs_deformacao_excessiva = $request->txtObsDeformacaoForro;

                $forro->local_fissura = $request->txtLocalFissuraForro;
                // $forro->foto_fissura = $request->txtFotoFissuraForro;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('txtFotoFissuraForro'))) {
                    if ($request->file('txtFotoFissuraForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalFissuraForro . '.' . $request->txtFotoFissuraForro->extension();
                        $forro->foto_fissura = $request->file('txtFotoFissuraForro')->storeAs('revestimento/forro/txtFotoFissuraForro', $nameEstrutura);
                    } else {
                        $forro->foto_fissura = 'SEM IMAGEM';
                    }
                }
                $forro->obs_fissura = $request->txtObsFissuraForro;

                $forro->local_desencaixe = $request->txtLocalDesencaixeForro;
                // $forro->foto_desencaixe = $request->txtFotoDesencaixeForro;
                if (!empty($request->hasFile('txtFotoDesencaixeForro'))) {
                    if ($request->file('txtFotoDesencaixeForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDesencaixeForro . '.' . $request->txtFotoDesencaixeForro->extension();
                        $forro->foto_desencaixe = $request->file('txtFotoDesencaixeForro')->storeAs('revestimento/forro/txtFotoDesencaixeForro', $nameEstrutura);
                    } else {
                        $forro->foto_desencaixe = 'SEM IMAGEM';
                    }
                }
                $forro->obs_desencaixe = $request->txtObsDesencaixeForro;

                $forro->local_ultilizacao = $request->txtLocalCorrosaoForro;
                // $forro->foto_ultilizacao = $request->txtFotoCorrosaoForro;
                if (!empty($request->hasFile('txtFotoCorrosaoForro'))) {
                    if ($request->file('txtFotoCorrosaoForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalCorrosaoForro . '.' . $request->txtFotoCorrosaoForro->extension();
                        $forro->foto_ultilizacao = $request->file('txtFotoCorrosaoForro')->storeAs('revestimento/forro/txtFotoCorrosaoForro', $nameEstrutura);
                    } else {
                        $forro->foto_ultilizacao = 'SEM IMAGEM';
                    }
                }
                $forro->obs_ultilizacao = $request->txtObsCorrosaoForro;

                $forro->local_deficiencia = $request->txtLocalDeficienciaForro;
                // $forro->foto_deficiencia = $request->txtFotoDeficienciaForro;
                if (!empty($request->hasFile('txtFotoDeficienciaForro'))) {
                    if ($request->file('txtFotoDeficienciaForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalDeficienciaForro . '.' . $request->txtFotoDeficienciaForro->extension();
                        $forro->foto_deficiencia = $request->file('txtFotoDeficienciaForro')->storeAs('revestimento/forro/txtFotoDeficienciaForro', $nameEstrutura);
                    } else {
                        $forro->foto_deficiencia = 'SEM IMAGEM';
                    }
                }
                $forro->obs_deficiencia = $request->txtObsDeficienciaForro;

                $forro->local_outros = $request->txtLocalOutroForro;
                // $forro->foto_outros = $request->txtFotoOutroForro;
                if (!empty($request->hasFile('txtFotoOutroForro'))) {
                    if ($request->file('txtFotoOutroForro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->txtLocalOutroForro . '.' . $request->txtFotoDeficienciaForro->extension();
                        $forro->foto_outros = $request->file('txtFotoOutroForro')->storeAs('revestimento/forro/txtFotoDeficienciaForro', $nameEstrutura);
                    } else {
                        $forro->foto_outros = 'SEM IMAGEM';
                    }
                }
                $forro->obs_outros = $request->txtObsOutroForro;


                return $forro->save();
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
