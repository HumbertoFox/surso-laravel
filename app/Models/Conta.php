<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
    use HasFactory, SoftDeletes;

    // Indicar Nome da Tabela
    protected $table = 'contas';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['nome', 'valor', 'vencimento', 'situacao_conta_id'];

    // Relacionamento com ContaSituacao
    public function contaSituacao()
    {
        return $this->belongsTo(ContaSituacao::class, 'situacao_conta_id');
    }
}