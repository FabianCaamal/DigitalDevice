<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VentasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testVentasTest()
    {
    	$a='2019-10-9';
        $b='2019-11-27';
        
        $response=$this->
        json('GET',
        '/api/reporte/venta/'.$a.'/'.$b);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>2]);

        $this->assertTrue(true);
    }
}