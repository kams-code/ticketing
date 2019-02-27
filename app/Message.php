<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
        client_id,
        employe_id,
        requete_id
    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function employe(){
        return $this->belongsTo('App\Employe');
    }

    public function requete(){
        return $this->belongsTo('App\Requete');
    }
}
