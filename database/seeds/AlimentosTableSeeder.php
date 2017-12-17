<?php

use Illuminate\Database\Seeder;

class AlimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Alimento::create([
            'id' => 1,
            'nome' => str_random(10),
            'calorias' => 1 / rand(1, 100),
            'carboidratos' => 1 / rand(1, 100),
            'proteinas' => 1 / rand(1, 100),
            'gorduras_totais' => 1 / rand(1, 100),
            'gordura_saturada' => 1 / rand(1, 100),
            'gordura_trans' => 1 / rand(1, 100),
            'fibras' => 1 / rand(1, 100),
            'sodio' => 1 / rand(1, 100),
            'calcio' => 1 / rand(1, 100),
            'ferro' => 1 / rand(1, 100)
        ]);
    }
}
