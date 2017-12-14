<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $fillable = [
        'nome',
        'calorias',
        'carboidratos',
        'proteinas',
        'gorduras_totais',
        'gordura_saturada',
        'gordura_trans',
        'fibras',
        'sodio',
        'calcio',
        'ferro'
    ];

    public function items() {
        return $this->hasMany('App\Item');
    }
}
