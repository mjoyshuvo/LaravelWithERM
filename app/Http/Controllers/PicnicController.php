<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picnic;
use App\Bear;

use App\Http\Requests;

class PicnicController extends Controller
{
    public function getPicnic(){
    	$picnics = Picnic::all();
    	return view('picnic')->with('picnics', $picnics);
    }
}
