<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ClientesController;

class ClientesControllerTest extends TestCase
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new ClientesController;
    }

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

    public function testCheckCliente(){
        $this->assertTrue($this->cliente->checkCliente(1));
    }
}
