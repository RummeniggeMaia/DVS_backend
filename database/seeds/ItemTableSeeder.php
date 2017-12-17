<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Item::create([
            'quantidade' => 2,
            'alimento_id' => 1,
            'medida_id' => 1
        ]);
    }
}
