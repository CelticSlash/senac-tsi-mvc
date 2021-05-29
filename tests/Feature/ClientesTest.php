<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Clientes;
use illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{
    //Forma elegante de limpar sujeira
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreate(){
        //Para evitar o teste
        //$this-markTestSkipped();

        $cliente = Clientes::create([   'nome' => 'Jorge',
                                        'email' => 'jorge@jorge.com',
                                        'endereco' => 'Av. de Asfalto',
                                        'nascimento' => '1990-05-12']);

        $this->assertDatabaseHas('Clientes', ['nome' => 'Jorge']);

        //Forma deselegante de limpar o lixo gerado no DB
        /*$id = $cliente->id;

        $cliente->destroy($cliente->id);

        $this->assertDatabaseMissing('Clientes', ['id' => $id]);*/
    }
}
