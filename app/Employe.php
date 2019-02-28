<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'pays', 'ville', 'adresse','image'
    ];
    
    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function service(){
        return $this->belongsTo('App\Service');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }

}
