<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    
	protected $table = 'imagens';

    public function galeria(){
    	return $this->belongsTo('App\Galeria');
    }
}//
