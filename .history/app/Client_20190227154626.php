<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        nom  
   ];
   
   public function messages(){
      return $this->hasMany('App\Message');
   }

   public function clients(){
       return $this->hasMany('App\Client');
   }

   public function user()
   {
       return $this->hasOne('App\User');
   }
}
