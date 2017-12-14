<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = ['nome'];

    public function items() {
        return $this->hasMany('App\Item');
    }
}
