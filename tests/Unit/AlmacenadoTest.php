<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlmacenadoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $maquina='1';
        $producto='1';
        $cantidad='20';
        
        $response=$this->
        json('GET',
        '/api/surtir/'.$maquina.'/'.$producto.'/'.$cantidad);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['surtir'=>'producto añadido']);

        $this->assertTrue(true);
    }
}
