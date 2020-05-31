<?php

namespace App\Http\Controllers\Inspecao\Formularios;

use App\Http\Controllers\Controller;
use App\models\inspecao\formularios\vedacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vedacaoController extends Controller
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
        //checking logged in user
        if (Auth::check() === true) {
            try {

                $vedacao = new vedacao();
                $vedacao->inspecao_id = $inspecao_id;

                $vedacao->local_fissura_trinca = $request->localFissura;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoFissura'))) {
                    if ($request->file('fotoFissura')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localFissura . '.' . $request->fotoFissura->extension();
                        $vedacao->foto_fissura_trinca = $request->file('fotoFissura')->storeAs('vedacao/fotoFissura', $nameEstrutura);
                    } else {
                        $vedacao->foto_fissura_trinca = 'SEM IMAGEM';
                    }
                }
                // $vedacao->foto_fissura_trinca = $request->fotoFissura;
                $vedacao->obs_fissura_trinca = $request->obsFissura;

                $vedacao->local_eflorescencia = $request->localEflorescencia;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoEflorescencia'))) {
                    if ($request->file('fotoEflorescencia')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localEflorescencia . '.' . $request->fotoEflorescencia->extension();
                        $vedacao->foto_eflorescencia = $request->file('fotoEflorescencia')->storeAs('vedacao/fotoEflorescencia', $nameEstrutura);
                    } else {
                        $vedacao->foto_eflorescencia = 'SEM IMAGEM';
                    }
                }
                // $vedacao->foto_eflorescencia = $request->fotoEflorescencia;
                $vedacao->obs_eflorescencia = $request->obsEflorescencia;

                $vedacao->local_infiltracao = $request->localInfiltracao;
                // armazenando foto na base de dados
                if (!empty($request->hasFile('fotoInfiltracao'))) {
                    if ($request->file('fotoInfiltracao')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localInfiltracao . '.' . $request->fotoInfiltracao->extension();
                        $vedacao->foto_infiltracao = $request->file('fotoInfiltracao')->storeAs('vedacao/fotoInfiltracao', $nameEstrutura);
                    } else {
                        $vedacao->foto_infiltracao = 'SEM IMAGEM';
                    }
                }
                // $vedacao->foto_infiltracao = $request->fotoInfiltracao;
                $vedacao->obs_infiltracao = $request->obsInfiltracao;

                $vedacao->local_irregularidades_geometricas = $request->localIrregularidades;
                if (!empty($request->hasFile('fotoIrregularidades'))) {
                    if ($request->file('fotoIrregularidades')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->localIrregularidades . '.' . $request->fotoIrregularidades->extension();
                        $vedacao->foto_irregularidades_geometricas = $request->file('fotoIrregularidades')->storeAs('vedacao/fotoIrregularidades', $nameEstrutura);
                    } else {
                        $vedacao->foto_irregularidades_geometricas = 'SEM IMAGEM';
                    }
                }
                // $vedacao->foto_irregularidades_geometricas = $request->fotoIrregularidades;
                $vedacao->obs_irregularidades_geometricas = $request->obsIrregularidades;

                $vedacao->local_outro = $request->localOutro;
                if (!empty($request->hasFile('fotoOutro'))) {
                    if ($request->file('fotoOutro')->isValid()) {
                        // nomeando arquivo
                        $nameEstrutura = $request->obsIrregularidades . '.' . $request->fotoOutro->extension();
                        $vedacao->foto_outro = $request->file('fotoOutro')->storeAs('vedacao/fotoOutro', $nameEstrutura);
                    } else {
                        $vedacao->foto_outro = 'SEM IMAGEM';
                    }
                }
                // $vedacao->foto_outro = $request->fotoOutro;
                $vedacao->obs_outro = $request->obsOutro;

                return $vedacao->save();
                // return dd($request);

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
