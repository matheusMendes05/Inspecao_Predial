<?php

namespace App\models\inspection;

use App\models\Building\building;
use App\models\Inspection\fundacao;
use App\models\Inspection\vedacoes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inspection extends Model
{
    //
    protected $table = 'inspections';

    protected $fillable = [

        'usuario_id',
        'nome_responsavel',
        'data',
        'nome_edificio',
        'endereco',
        'bairro',
        'complemento',
        'cep',
        'cnpj',
        'tipologia',
        'outros',
        'n_pavimentos',
        'ano_construcao',
        'construtora',
        'administrador',
        'responsavel_acompanhamento_obra'

    ];




    public static function historyInspection()
    {

        $inspecao = DB::table('inspections')
            ->join('users', 'users.id', '=', 'inspections.usuario_id')
            ->join('buildings', 'buildings.id', '=', 'inspections.edificio_id')
            ->select('inspections.*', 'users.*', 'buildings.*')
            ->get();

        return $inspecao;
    }



    //relacionamento entre modelos 
    //relacionamento com encontrosAcessos
    public function inspecaoEstruturas()
    {
        return $this->hasOne(estrutura::class, 'inspecao_id', 'id');
    }
    public function inspecaoFundacao()
    {
        return $this->hasOne(fundacao::class, 'inspecao_id', 'id');
    }
    public function inspecaoVedacao()
    {
        return $this->hasOne(vedacoes::class, 'inspecao_id', 'id');
    }



    public static function collectFun($id)
    {

        $collect = [];

        $inspecao = inspection::where('id', $id)->first();

        if ($inspecao) {
            $collect['inspecao'] = $inspecao;
        }

        $estruturas = $inspecao->inspecaoEstruturas()->first();
        if ($estruturas) {
            $collect['estruturas'] = $estruturas;
        }

        $fundacao = $inspecao->inspecaoFundacao()->first();
        if ($fundacao) {
            $collect['fundacao'] = $fundacao;
        }

        $vedacao = $inspecao->inspecaoVedacao()->first();
        if ($vedacao) {
            $collect['vedacao'] = $vedacao;
        }

        return $collect;
    }
}
