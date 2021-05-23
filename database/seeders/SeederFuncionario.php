<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class SeederFuncionario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcionario = Funcionario::create(['nome' => 'Cleito Rasta',
                                            'endereco' => 'Babilonia',
                                            'email' => 'olha@pedra.com',
                                            'telefone' => 12345678]);
    }
}
