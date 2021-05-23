<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [	'id',
							'nome',
							'endereco',
							'email',
							'telefone'];   

	protected $table = 'Funcionario';

	/*
	É possível mudar a chave primária assim:
	protected $primaryKey = 'nome_da_pk';
	
	Se não quiser que seja auto_increment
	public $increment = false;

	Para definir o tipo 
	protected $keyType = 'string';

	Para tirar os campos timestamps
	public $timestamps = false;
	*/							
}
