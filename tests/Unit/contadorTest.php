<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class contadorTest extends TestCase
{
     public function testContadorTest()
    {
    	$producto = '1';

    	$response=$this->
        json('GET',
        '/api/reporte/contador/'.$producto);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['quedan'=>'si queda']);

        $this->assertTrue(true);
    }
}