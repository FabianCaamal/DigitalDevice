<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuejaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'usuario_id' => Str::random(10),
            'empresa_id' => Str::random(10).'@gmail.com',
            'detalles' => Str::random(10),
        ]);
    }
}
