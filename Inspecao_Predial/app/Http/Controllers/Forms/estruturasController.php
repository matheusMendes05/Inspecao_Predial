<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\models\inspection\estrutura;
use App\models\Inspection\estruturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class estruturasController extends Controller
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
    public static function create($inspecao_id, Request $request)
    {
        //checking logged in user
        if (Auth::check() === true) {

            try {
                //code...
                $estruturas = new estrutura();

                $estruturas->inspecao_id = $inspecao_id;

                $estruturas->local_fissuras = $request->localFissura;

                if (!empty($request->hasFile('fotoFissura'))) {
                    // armazenando foto na base de dados
                    if ($request->file('fotoFissura')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localFissura . '.' . $request->fotoFissura->extension();
                        $estruturas->foto_fissuras = $request->file('fotoFissura')->storeAs('estruturas/fotoFissuras', $nameEstrutura);
                        // $estruturas->foto_fissuras = $request->fotoFissura;
                    } else {
                        $estruturas->foto_fissuras = 'SEM IMAGEM';
                    }
                }
                $estruturas->obs_fissuras = $request->obsFissura;

                $estruturas->local_destacamento_DD = $request->localDestacamento;
                if (!empty($request->hasFile('fotoDestacamento'))) {
                    // armazenando foto na base de dados
                    if ($request->file('fotoDestacamento')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localDestacamento . '.' . $request->fotoDestacamento->extension();
                        $estruturas->foto_destacamento_DD = $request->file('fotoDestacamento')->storeAs('estruturas/fotoDestacamento', $nameEstrutura);
                    } else {
                        $estruturas->foto_destacamento_DD = 'SEM IMAGEM';
                    }
                }
                $estruturas->obs_destacamento_DD = $request->obsDestacamento;

                $estruturas->local_armadura_exposta = $request->localArmadura;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoArmadura'))) {
                    if ($request->file('fotoArmadura')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localArmadura . '.' . $request->fotoArmadura->extension();
                        $estruturas->foto_armadura_exposta = $request->file('fotoArmadura')->storeAs('estruturas/fotoArmadura', $nameEstrutura);
                    } else {
                        $estruturas->foto_armadura_exposta = 'SEM IMAGEM';
                    }
                }
                $estruturas->obs_armadura_exposta = $request->obsArmadura;

                $estruturas->local_corrosao = $request->localCorrosao;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoCorrosao'))) {
                    if ($request->file('fotoCorrosao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localCorrosao . '.' . $request->fotoCorrosao->extension();
                        $estruturas->foto_corrosao = $request->file('fotoCorrosao')->storeAs('estruturas/fotoCorrosao', $nameEstrutura);
                    } else {
                        $estruturas->foto_corrosao = 'SEM IMAGEM';
                    }
                }
                $estruturas->obs_corrosao = $request->obsCorrosao;

                $estruturas->local_peca_estrutural_deformacao_excessiva = $request->localPeca;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoPeca'))) {
                    if ($request->file('fotoPeca')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localPeca . '.' . $request->fotoCorrosao->extension();
                        $estruturas->foto_peca_estrutural_deformacao_excessiva = $request->file('fotoPeca')->storeAs('estruturas/fotoPeca', $nameEstrutura);
                    } else {
                        $estruturas->foto_peca_estrutural_deformacao_excessiva = 'SEM IMAGEM';
                    }
                }
                // $estruturas->foto_peca_estrutural_deformacao_excessiva = $request->fotoPeca;
                $estruturas->obs_peca_estrutural_deformacao_excessiva = $request->obsPeca;

                $estruturas->local_irregularidades_geometricas = $request->localIrregularidades;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoIrregularidades'))) {
                    if ($request->file('fotoIrregularidades')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localIrregularidades . '.' . $request->fotoIrregularidades->extension();
                        $estruturas->foto_irregularidades_geometricas = $request->file('fotoIrregularidades')->storeAs('estruturas/fotoIrregularidades', $nameEstrutura);
                    } else {
                        $estruturas->foto_irregularidades_geometricas = 'SEM IMAGEM';
                    }
                }
                // $estruturas->foto_irregularidades_geometricas = $request->fotoIrregularidades;
                $estruturas->obs_irregularidades_geometricas = $request->obsIrregularidades;

                $estruturas->local_eflorescencia_lixiviacaoo_infiltracao = $request->localEflorescencia;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoEflorescencia'))) {
                    if ($request->file('fotoEflorescencia')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localEflorescencia . '.' . $request->fotoEflorescencia->extension();
                        $estruturas->foto_eflorescencia_lixiviacaoo_infiltracao = $request->file('fotoEflorescencia')->storeAs('estruturas/fotoEflorescencia', $nameEstrutura);
                    } else {
                        $estruturas->foto_eflorescencia_lixiviacaoo_infiltracao = 'SEM IMAGEM';
                    }
                }
                // $estruturas->foto_eflorescencia_lixiviacaoo_infiltracao = $request->fotoEflorescencia;
                $estruturas->obs_eflorescencia_lixiviacaoo_infiltracao = $request->obsEflorescencia;


                $estruturas->local_outros = $request->localOutro;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoOutro'))) {
                    if ($request->file('fotoOutro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localOutro . '.' . $request->fotoOutro->extension();
                        $estruturas->foto_outros = $request->file('fotoOutro')->storeAs('estruturas/fotoOutro', $nameEstrutura);
                    } else {
                        $estruturas->foto_outros = 'SEM IMAGEM';
                    }
                }
                // $estruturas->foto_outros = $request->fotoOutro;
                $estruturas->obs_outros = $request->obsOutro;

                return $estruturas->save();


                // verificar arquivo valido ->isValid()
                // if ($request->file('fotoFissura')->isValid()) {
                //     // verificando extensao do arquivo : png, jpg, etc...
                //     // dd($request->fotoFissura->extension());
                //     // escolhendo local para armazenar img
                //     $nameEstrutura = $request->localFissura . '.' . $request->fotoFissura->extension();
                //     dd($request->file('fotoFissura')->storeAs('estruturas/fotoFissuras', $nameEstrutura));
                // }

                // dd($request->file('fotoFissura')->isValid());

            } catch (\PDOException $th) {
                return redirect()->back()->withInput()->withErrors('[ERRO]' . $th->getMessage());
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
