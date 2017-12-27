<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'genre',
        'provider',
        'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'api_token'
    ];

    /**
    * Mutator email
    */
    public function setEmailAttribute($value) {
        if (empty($value)) {
            $this->attributes['email'] = NULL;
        } else {
            $this->attributes['email'] = $value;
        }
        $this->attributes['email'] = strtolower($value);
    }
}
