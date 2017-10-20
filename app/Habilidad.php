<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
     protected $fillable = [
        'id', 'user_id', 'Habilidad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function User(){

    	return $this->hasMany('App\User');
    }
}
