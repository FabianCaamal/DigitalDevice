<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RVentasTest extends TestCase
{
    
    public function testVentasTest()
    {
    	$a='2019-10-7';
        $b='2019-11-29';
        
        $response=$this->
        json('GET',
        '/api/reporte/venta/'.$a.'/'.$b);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>4]);

        $this->assertTrue(true);
    }
}
