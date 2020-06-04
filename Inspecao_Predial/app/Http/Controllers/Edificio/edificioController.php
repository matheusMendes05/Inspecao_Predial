<?php

namespace App\Http\Controllers\Edificio;

use App\Http\Controllers\Controller;
use App\models\Edificio\edificio;
use App\models\Inspecao\inspecao;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate as FacadesGate;

class edificioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // verificando sessao de usuario
        if (Auth::check() === true) {
            return view('Web._edificio.cadastroEdificio');
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
    }

    /**
     * historico
     */
    public function historico()
    {
        // verificando sessao de usuario
        if (Auth::check() === true) {

            // pesquisando todos os registros de edificios do usuario logado no sistema
            $edificios = edificio::where('usuario_id', Auth::user()->id)->get();

            return view('Web._edificio.historicoEdificio', [
                'edificios' => $edificios
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
        // verificando sessao de usuario
        if (Auth::check() === true) {

            try {
                $edificio = new edificio();
                $edificio->usuario_id = Auth::user()->id;

                // cadastrando um edificio
                $edificio->responsavel_inspecao = $request->txtNome;
                $edificio->data = $request->txtData;
                $edificio->nome_edificio = $request->txtNomeEdificio;
                $edificio->endereco = $request->txtEndereco;
                $edificio->bairro = $request->txtBairro;
                $edificio->complemento = $request->txtComplemento;
                $edificio->cep = $request->txtCEP;
                $edificio->cnpj = $request->txtCNPJ;
                $edificio->tipologia = $request->inlineRadioOptions;

                $edificio->responsavel_edificio = $request->txtResponsavel;
                $edificio->responsavel_telefone = $request->txtTelefone;
                $edificio->responsavel_email = $request->txtEmail;

                $edificio->outros = $request->txtOutro;
                $edificio->n_pavimentos = $request->txtNpavimentos;
                $edificio->ano_construcao = $request->txtAnoConstrucao;
                $edificio->construtora = $request->txtConstrutora;
                $edificio->administrador = $request->txtAdministrador;
                // $edificio->responsavel_acompanhamento_obra = $request->responsavelObra;
                $edificio->save();

                // retornar para historico de edificios
                return redirect()->route('edificio.historico')->withErrors('Registro cadastrado com Sucesso!');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //code...
            // verificando sessao de usuario
            if (Auth::check() === true) {

                // $edificio = edificio::where('id', $id)->first();

                // objeto que verifica numero de inspecoes
                $verificar_Inspecoes = inspecao::where('edificio_id', $id)->get();

                $edificio = edificio::find($id);

                if ($edificio == null) {
                    return redirect()->route('home')->withInput()->withErrors('[ERRO] registro nao encontrado em Banco de Dados');
                }
                // $this->authorize('verificar-edificio', $edificio);
                if (FacadesGate::denies('verificar-edificio', $edificio)) {
                    abort(403, 'Não Autorizado');
                }
                return view('Web._edificio.verificarEdificio', [
                    'edificio' => $edificio,
                    'inspecoes' => $verificar_Inspecoes
                ]);
            } else {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
            }
        } catch (\PDOException $th) {
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
        // verificando sessao de usuario
        if (Auth::check() === true) {

            $edificio = edificio::where('id', $id)->first();

            if ($edificio == null) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] registro nao encontrado em Banco de Dados');
            }

            if (FacadesGate::denies('update-edificio', $edificio)) {
                abort(403, 'Não Autorizado');
            }

            return view('Web._edificio.editarEdificio', [
                'edificio' => $edificio
            ]);
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] Registro não encontrado.');
        }
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
        // verificando sessao de usuario
        if (Auth::check() === true) {

            try {
                //code...
                $edificio = edificio::where('id', $id)->first();


                if ($edificio == null) {
                    return redirect()->route('home')->withInput()->withErrors('[ERRO] registro nao encontrado em Banco de Dados');
                }
                if (FacadesGate::denies('update-edificio', $edificio)) {
                    abort(403, 'Não Autorizado');
                }

                // editando um edificio
                $edificio->responsavel_inspecao = $request->txtNome;
                $edificio->data = $request->txtData;
                $edificio->nome_edificio = $request->txtNomeEdificio;
                $edificio->endereco = $request->txtEndereco;
                $edificio->bairro = $request->txtBairro;
                $edificio->complemento = $request->txtComplemento;
                $edificio->cep = $request->txtCEP;
                $edificio->cnpj = $request->txtCNPJ;
                $edificio->tipologia = $request->inlineRadioOptions;

                $edificio->responsavel_edificio = $request->txtResponsavel;
                $edificio->responsavel_telefone = $request->txtTelefone;
                $edificio->responsavel_email = $request->txtEmail;

                $edificio->outros = $request->txtOutro;
                $edificio->n_pavimentos = $request->txtNpavimentos;
                $edificio->ano_construcao = $request->txtAnoConstrucao;
                $edificio->construtora = $request->txtConstrutora;
                $edificio->administrador = $request->txtAdministrador;
                $edificio->save();

                return redirect()->back()->withErrors('Registros alterados com sucesso');
            } catch (\PDOException $th) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO]:' . $th->getMessage());
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
        $edificio = edificio::where('id', $id)->first();
        $edificio->delete();
        return redirect()->route('edificio.historico')->withErrors('Registro excluido com Sucesso!');
    }
}
