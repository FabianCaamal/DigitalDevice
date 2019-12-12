<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuscarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testbuscarTest()
    {
    	$buscar = 'Pepsi';

    	$response=$this->
        json('GET',
        '/api/busquedaProducto/'.$buscar);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>'Pepsi']);
    	
        $this->assertTrue(true);
    }
}
