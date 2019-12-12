<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuejasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testQuejaTest()
    {

        $a='1';
        
        $response=$this->
        json('GET',
        '/api/contarQuejas/'.$a);
        $response->assertStatus(200);//Si hay respuesta
        $response->assertJson(['hayQuejas'=>'hay quejas']);

        $this->assertTrue(true);
    }
}