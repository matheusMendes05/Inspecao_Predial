<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\models\Building\building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class formsController extends Controller
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
    public function create($id, Request $request)
    {
        //checking logged in user
        if (Auth::check() === true) {

            $collection = [];
            $collection['edificio'] = $id;

            if (isset($request->estruturas) && $request->estruturas == "estruturas") {
                $collection['estruturas'] = $request->estruturas;
            }
            if (isset($request->fundacao) && $request->fundacao == "fundacao") {
                $collection['fundacao'] = $request->fundacao;
            }
            if (isset($request->vedacao) && $request->vedacao == "vedacao") {
                $collection['vedacao'] = $request->vedacao;
            }

            return view('Web._forms.formulario', [
                'collection' => $collection,
            ]);
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
