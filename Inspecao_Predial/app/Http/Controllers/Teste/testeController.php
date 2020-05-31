<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use App\models\Teste\teste;
use Illuminate\Http\Request;

class testeController extends Controller
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
        return view('Web._teste.formulario');
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

        // for ($i = 0; $i < count($request->all()); $i++) {

        //     $descricao = $request->all()['descricao'][$i];
        //     $local = $request->all()['local'][$i];
        //     $obs = $request->all()['obs'][$i];

        //     $obj = new teste();

        //     $obj->descricao = $descricao;
        //     $obj->local = $local;
        //     $obj->obs = $obs;

        //     return dd($obj);
        // }

        // $obj = new teste();

        //     $obj->descricao = $descricao;
        //     $obj->local = $local;
        //     $obj->obs = $obs;

        // dd(count($request->all()['local']));

        // for ($a = 0; $a <= count($request->all()['descricao']); $a++) {
        //     $descricao = $request->all()['descricao'];
        //     $obj->descricao = $descricao;

        //     for ($b = 0; $b <= count($request->all()['local']); $b++) {
        //         $local = $request->all()['local'];
        //         $obj->local = $local;

        //         for ($c = 0; $c <= count($request->all()['obs']); $c++) {
        //             $observacao = $request['obs'];
        //             $obj->obsevacao = $observacao;

        //             // dd();
        //             for ($o = 0; $o < count($obj->local); $o++) {
        //                 return $obj->save();
        //             }
        //         }
        //     }
        // }





        $dados = $request->all();


        dd($dados);

        // foreach ($dados as $key => $dado) {
        //     $estruturas = new teste();

        //     $estruturas->descricao = $dados['descricao'];
        //     $estruturas->local = $dados['local'];
        //     $estruturas->observacao = $dados['obs'];

        //     $estruturas->create();
        // }

        // for ($i = 0; $i < count($request->all()); $i++) {

        //     $estruturas->descricao = $request['descricao'];
        //     $estruturas->local = $request['local'];
        //     $estruturas->observacao = $request['obs'];

        //     $estruturas->create();

        //     dd($estruturas);
        // }
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
