<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [ 'id', 'nome', 'endereco', 'email', 'telefone'];

    protected $table = 'Funcionario';
    
    /*  É possivel alterar a chave primária usando:
            protected $primaryKey = 'nome da pk'
        
        Caso não queira auto_increment:
            public $increment = false;
        
        Para definir tipo:
            protected $keyType = 'string';
        
        Para remover os campos timestamp:
            public $timestamps = false;
    */
}
