<?php

namespace App\models\Edificio;

use App\User;
use Illuminate\Database\Eloquent\Model;

class edificio extends Model
{
    //
    protected $table = 'edificios';

    protected $fillable = [
        'usuario_id',
        'responsavel_inspecao',
        'data',
        'nome_edificio',
        'endereco',
        'bairro',
        'complemento',
        'cep',
        'cnpj',
        'responsavel_edificio',
        'responsavel_telefone',
        'responsavel_email',
        'tipologia',
        'outros',
        'n_pavimentos',
        'ano_construcao',
        'construtora',
        'administrador',
        
    ];

    public function edificioUsuario()
    {
        return $this->hasOne(User::class, 'usuario_id', 'id');
    }

    public $timestamps = false;
}
