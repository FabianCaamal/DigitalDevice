<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VentaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testVentaTest()
    {
    	$maquina='1';
        $producto='1';

        $response=$this->
        json('GET',
        '/api/venta/'.$maquina.'/'.$producto);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>'venta realizada']);

        $this->assertTrue(true);
    }
}
