<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    //Mass Assignment
    protected $fillable = array('age','type','bear_id');

    //Define Relationships

    public function bear(){
    	return $this->belongsTo('App\Bear');
    }
}
