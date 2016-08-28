<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tree;
use App\Fish;
use App\Picnic;
class Bear extends Model
{
	//Mass Assignment
    protected $fillable = ['name','type','danger_level'];


    //Defining Relationships
    //Each Bear HAS one Fish to eat
    public function fish(){
    	return $this->hasOne('App\Fish');
    }

    //Each Bear climbs many trees----HAS Many
    public function trees(){
    	return $this->hasMany('App\Tree');
    }

    //Each Bear can go to Many Picnic -- Many to Many
    //Add pivot Table
    public function picnics(){
    	return $this->belongsToMany('App\Picnic','bears_picnics', 'bear_id','picnic_id');
    }
}
