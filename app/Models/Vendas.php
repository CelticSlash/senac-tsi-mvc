<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cliente_id', 'funcionario_id', 'data_da_venda','valor'];

    protected $table = 'Vendas';

    public function cliente(){
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}