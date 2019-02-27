<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [];

    public function employes()
    {
        return $this->hasMany('App\Employe');
    }
}
