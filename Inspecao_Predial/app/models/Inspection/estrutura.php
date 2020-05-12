<?php

namespace App\models\inspection;

use Illuminate\Database\Eloquent\Model;

class estrutura extends Model
{
    //

    protected $table = 'estruturas';

    protected $fillable = [
        'inspecao_id',
        // fissuras
        'local_fissuras',
        'foto_fissuras',
        'obs_fissuras',
        // destacamento_DD
        'local_destacamento_DD',
        'foto_destacamento_DD',
        'obs_destacamento_DD',
        // armadura_exposta
        'local_armadura_exposta',
        'foto_armadura_exposta',
        'obs_armadura_exposta',
        // corrosao
        'local_corrosao',
        'foto_corrosao',
        'obs_corrosao',
        // peca_estrutural_deformacao_excessiva
        'local_peca_estrutural_deformacao_excessiva',
        'foto_peca_estrutural_deformacao_excessiva',
        'obs_peca_estrutural_deformacao_excessiva',
        // irregularidades_geometricas
        'local_irregularidades_geometricas',
        'foto_irregularidades_geometricas',
        'obs_irregularidades_geometricas',
        // eflorescencia_lixiviacaoo_infiltracao
        'local_eflorescencia_lixiviacaoo_infiltracao',
        'foto_eflorescencia_lixiviacaoo_infiltracao',
        'obs_eflorescencia_lixiviacaoo_infiltracao',
        // outros
        'local_outros',
        'foto_outros',
        'obs_outros'



    ];

    public $timestamps = false;
}
