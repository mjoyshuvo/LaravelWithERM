<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picnic extends Model
{
    //Mass Asignment
    protected $fillable = array('name', 'taste_level','bear_id');

    //Define Relationship
    public function bear(){
    	return $this->belongsToMany('App\Bear','bears_picnics','picnic_id','bear_id');
    }
}
