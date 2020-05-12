<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\models\inspection\inspection;
// use Barryvdh\DomPDF\PDF as PDF;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
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

                $nameDoc = $collect['inspecao']['nome_edificio'] . ".pdf";
                $pdf = PDF::loadView('Web._actions.pdf', compact('collect'));
                return $pdf->setPaper('a4')->stream($nameDoc);

                // return view('Web.inspection.checkInspect', [
                //     'collection' => $collect
                // ]);

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
    }
}
