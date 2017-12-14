<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $fillable = ['descricao', 'valor'];

    public function items() {
        return $this->hasMany('App\Item');
    }
}
