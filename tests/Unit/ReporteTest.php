<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReporteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDineroTest()
    {
        $a='2019-10-7';
        $b='2019-11-29';
        
        $response=$this->
        json('GET',
        '/api/reporte/dinero/'.$a.'/'.$b);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['r'=>40]);
    	
        $this->assertTrue(true);
    }
}
