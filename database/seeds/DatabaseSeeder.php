<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlimentosTableSeeder::class,
            CardapioTableSeeder::class,
            MedidaTableSeeder::class,
            ItemTableSeeder::class
        ]);
    }
}
