<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
    protected $fillable = [
        client_id,
        categorie_id
    ];

    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
