<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //

	protected $table = 'galeria';

	protected $fillable = ['nome_galeria','user_id'];

    public function imagens(){
    	return $this->hasMany('App\Imagens');
   	}

   	public function user(){
   		return $this->belongsTo('App\User');
   	}
}