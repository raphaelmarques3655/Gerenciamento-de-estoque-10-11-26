<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [

    'nome',
    'descricao',
    'marca',
    'categoria_id',
    'unidade_de_medida',
    'preco_custo',
    'preco_venda',
    'quantidade_estoque',
    'quantidade_minima'
    ];
    
    public function categoria(): BelongsTo
{
    return $this->belongsTo(Categoria::class);
}

}

