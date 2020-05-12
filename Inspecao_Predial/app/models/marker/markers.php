<?php

namespace App\models\marker;

use App\models\inspection\inspection;
use Illuminate\Database\Eloquent\Model;

class markers extends Model
{
    //
    protected $table = 'markers';

    protected $filable = [
        'inspecao_id',
        'tittle',
        'lat',
        'lng',
    ];

    public $timestamps = false;

    // Gerar XML

    public function identificacaoMarker()
    {
        return $this->hasOne(inspection::class, 'inspecao_id', 'id');
    }
}
