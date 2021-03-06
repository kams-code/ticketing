<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        service_id
    ];
    
    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function service(){
        return $this->belongsTo('App\Service');
    }
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

}
