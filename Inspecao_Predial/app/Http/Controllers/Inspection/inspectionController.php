<?php

namespace App\Http\Controllers\Inspection;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Forms\estruturasController;
use App\models\Building\building;
use App\models\Inspection\inpection;
use App\models\inspection\inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //checking logged in user
        if (Auth::check() === true) {

            // historico de Inspecao
            $inspecao = inspection::where('usuario_id', Auth::user()->id)->get();

            return view('Web.inspection.history', [
                'inspecao' => $inspecao
            ]);
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // id -> building
        //checking logged in user
        if (Auth::check() === true) {

            try {
                //code...
                $inspecao = new inspection();
                $inspecao->usuario_id = Auth::user()->id;

                // cadastrando um edificio
                $inspecao->nome_responsavel = $request->txtNome;
                $inspecao->data = $request->txtData;
                $inspecao->nome_edificio = $request->txtNomeEdificio;
                $inspecao->endereco = $request->txtEndereco;
                $inspecao->bairro = $request->txtBairro;
                $inspecao->complemento = $request->txtComplemento;
                $inspecao->cep = $request->txtCEP;
                $inspecao->cnpj = $request->txtCNPJ;
                $inspecao->tipologia = $request->inlineRadioOptions;
                $inspecao->outros = $request->txtOutro;
                $inspecao->n_pavimentos = $request->txtNpavimentos;
                $inspecao->ano_construcao = $request->txtAnoConstrucao;
                $inspecao->construtora = $request->txtConstrutora;
                $inspecao->administrador = $request->txtAdministrador;
                $inspecao->responsavel_acompanhamento_obra = $request->responsavelObra;
                $inspecao->save();
                return $inspecao->id;
            } catch (\PDOException $th) {

                return redirect()->back()->withInput()->withErrors('[ERRO] ' . $th->getMessage());
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

        if (Auth::check() === true) {

            $inspecao = inspection::where('id', $id)->first();

            if ($inspecao['usuario_id'] == Auth::user()->id) {
                $collect = inspection::collectFun($id);
                return view('Web.inspection.checkInspect', [
                    'collection' => $collect
                ]);

                // dd($collect);
            } else {
                return redirect()->back()->withErrors(["[Erro] AÇÃO INVÁLIDA!"]);
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
        $inspecao = inspection::where('id', $id)->first();

        $inspecao->delete();

        return redirect()->back()->withInput()->withErrors('Registro Deletado com Sucesso');
    }
}
