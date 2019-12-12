<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class buscarMaqTest extends TestCase
{
     public function testBuscarTest()
    {

     $busca = 'A123BC';

     $response=$this-> json('GET',
        '/api/busquedaMaquina/'.$busca);
     $response->assertStatus(200);

     $response->assertJson(['r'=>'A123BC']);

  
        $this->assertTrue(true);
    }
}
