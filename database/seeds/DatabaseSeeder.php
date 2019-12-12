<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EmpleadoTableSeeder::class);
         $this->call(EmpresaTableSeeder::class);
         $this->call(MaquinaTableSeeder::class);
         $this->call(ProductoTableSeeder::class);
         $this->call(QuejaTableSeeder::class);
         $this->call(StockTableSeeder::class);
         $this->call(SurtirTableSeeder::class);
         $this->call(UsuarioTableSeeder::class);
         $this->call(VentaTableSeeder::class);
    }
}
