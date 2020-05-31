<?php

namespace App\models\Inspecao;

use App\models\Edificio\edificio;
use App\models\Inspecao\formularios\esquadria;
use App\models\inspecao\formularios\fundacoes;
use App\models\Inspecao\formularios\impermeabilizacao;
use App\models\Inspecao\formularios\instalacaoGas;
use App\models\Inspecao\formularios\instalacaoHidro;
use App\models\Inspecao\formularios\revestimentos\fachada;
use App\models\Inspecao\formularios\revestimentos\forro;
use App\models\Inspecao\formularios\revestimentos\parede;
use App\models\Inspecao\formularios\revestimentos\piso;
use App\models\Inspecao\formularios\struturas;
use App\models\inspecao\formularios\vedacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inspecao extends Model
{
    //
    protected $table = 'inspecaos';

    protected $fillable = [
        'edificio_id',
        'responsavel_acompanhamento_obra',
    ];


    public static function historico_inspecao_edificios($id)
    {
        // $inspecao = DB::table('inspecaos')
        //     ->leftJoin('edificios', 'edificios.id', '=', 'inspecaos.edificio_id')
        //     ->leftJoin('struturas', 'struturas.inspecao_id', '=', 'inspecaos.id')
        //     ->leftJoin('fundacoes', 'fundacoes.inspecao_id', '=', 'inspecaos.id')
        //     ->where('inspecaos.edificio_id', $id)
        //     ->get();
        $inspecao = DB::table('edificios')
            ->leftJoin('inspecaos', 'inspecaos.edificio_id', '=', 'edificios.id')
            ->where('inspecaos.edificio_id', $id)
            ->get();

        return $inspecao;
    }

    public static function verificar_inspecao_edificios($inspecao_id)
    {
        $inspecao = DB::table('inspecaos')
            ->leftJoin('edificios', 'edificios.id', '=', 'inspecaos.edificio_id')
            ->leftJoin('struturas', 'struturas.inspecao_id', '=', 'inspecaos.id')
            ->leftJoin('fundacoes', 'fundacoes.inspecao_id', '=', 'inspecaos.id')
            ->leftJoin('vedacaos', 'vedacaos.inspecao_id', '=', 'inspecaos.id')
            ->where('inspecaos.id', $inspecao_id)
            ->first();

        return $inspecao;
    }

    // public function edificioInspecao()
    // {
    //     return $this->hasMany(edificio::class, 'edificio_id', 'id');
    // }

    // relacionamento entre tabelas

    public function inspecaoEdificio()
    {
        return $this->hasOne(edificio::class, 'id', 'edificio_id');
    }

    public function inspecaoEstruturas()
    {
        return $this->hasOne(struturas::class, 'inspecao_id', 'id');
    }
    public function inspecaoFundacao()
    {
        return $this->hasOne(fundacoes::class, 'inspecao_id', 'id');
    }
    public function inspecaoVedacao()
    {
        return $this->hasOne(vedacao::class, 'inspecao_id', 'id');
    }
    public function inspecaoForro()
    {
        return $this->hasOne(forro::class, 'inspecao_id', 'id');
    }
    public function inspecaoParede()
    {
        return $this->hasOne(parede::class, 'inspecao_id', 'id');
    }
    public function inspecaoPiso()
    {
        return $this->hasOne(piso::class, 'inspecao_id', 'id');
    }
    public function inspecaoFachada()
    {
        return $this->hasOne(fachada::class, 'inspecao_id', 'id');
    }
    public function inspecaoEsquadria()
    {
        return $this->hasOne(esquadria::class, 'inspecao_id', 'id');
    }
    public function inspecaoImpermeabilizacao()
    {
        return $this->hasOne(impermeabilizacao::class, 'inspecao_id', 'id');
    }
    public function inspecaoHidrossanitaria()
    {
        return $this->hasOne(instalacaoHidro::class, 'inspecao_id', 'id');
    }
    public function inspecaoGas()
    {
        return $this->hasOne(instalacaoGas::class, 'inspecao_id', 'id');
    }

    public static function verificar($inspecao_id)
    {

        $collect = [];

        $inspecao = inspecao::where('id', $inspecao_id)->first();

        if ($inspecao) {
            $collect['inspecao'] = $inspecao;
        }

        //verificar com quais tabelas a identificacao se relaciona e retornar seus respectivos valores

        // edificio
        $edificio = $inspecao->inspecaoEdificio()->first();
        if ($edificio) {
            $collect['edificio'] = $edificio;
        }
        // estruturas
        $estruturas = $inspecao->inspecaoEstruturas()->first();
        if ($estruturas) {
            $collect['estruturas'] = $estruturas;
        }
        //  Fundacao
        $fundacao = $inspecao->inspecaoFundacao()->first();
        if ($fundacao) {
            $collect['fundacao'] = $fundacao;
        }
        // Vedacao
        $vedacao = $inspecao->inspecaoVedacao()->first();
        if ($vedacao) {
            $collect['vedacao'] = $vedacao;
        }
        // Forro
        $forro = $inspecao->inspecaoForro()->first();
        if ($forro) {
            $collect['forro'] = $forro;
        }
        // Parede
        $parede = $inspecao->inspecaoParede()->first();
        if ($parede) {
            $collect['parede'] = $parede;
        }
        // Piso
        $piso = $inspecao->inspecaoPiso()->first();
        if ($piso) {
            $collect['piso'] = $piso;
        }
        // Fachada
        $fachada = $inspecao->inspecaoFachada()->first();
        if ($fachada) {
            $collect['fachada'] = $fachada;
        }
        // Esquadria
        $esquadria = $inspecao->inspecaoEsquadria()->first();
        if ($esquadria) {
            $collect['esquadria'] = $esquadria;
        }
        // Impermeabilizacao
        $impermeabilizacao = $inspecao->inspecaoImpermeabilizacao()->first();
        if ($impermeabilizacao) {
            $collect['impermeabilizacao'] = $impermeabilizacao;
        }
        //Hidrossanitaria
        $hidrossanitaria = $inspecao->inspecaoHidrossanitaria()->first();
        if ($hidrossanitaria) {
            $collect['hidrossanitaria'] = $hidrossanitaria;
        }
        // Gas
        $gas = $inspecao->inspecaoGas()->first();
        if ($gas) {
            $collect['gas'] = $gas;
        }

        return $collect;
    }
}
