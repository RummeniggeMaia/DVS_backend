<?php

use Illuminate\Database\Seeder;

class MedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Medida::create([
            'id' => 1,
            'descricao' => '1 lata de creme de leite',
            'valor' => 300.0
        ]);
        App\Medida::create([
            'id' => 2,
            'descricao' => '1 copo de requeijão',
            'valor' => 250.0
        ]);
        App\Medida::create([
            'id' => 3,
            'descricao' => '1 xícara de chá',
            'valor' => 240.0
        ]);
        App\Medida::create([
            'id' => 4,
            'descricao' => '1 copo americano',
            'valor' => 200.0
        ]);
        App\Medida::create([
            'id' => 5,
            'descricao' => '1 colher de sopa',
            'valor' => 15.0
        ]);
        App\Medida::create([
            'id' => 6,
            'descricao' => '1 colher de chá',
            'valor' => 5.0
        ]);
        App\Medida::create([
            'id' => 7,
            'descricao' => '1 g/mL',
            'valor' => 1.0
        ]);
    }
}
