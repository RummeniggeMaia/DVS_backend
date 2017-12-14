<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['quantidade'];

    function alimento() {
        return $this->belongsTo('App\Alimento');
    }

    function cardapio() {
        return $this->belongsTo('App\Cardapio');
    }

    function medida() {
        return $this->belongsTo('App\Medida');
    }
}
