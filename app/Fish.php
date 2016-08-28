<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    //Mass Assignment
    protected $fillable = array('weight','bear_id');
    //Link to the Database Table
    protected $table = 'fish';
    //Define Relationship
    public function bear(){
    	return $this->belongsTo('App\Bear');
    }
}
