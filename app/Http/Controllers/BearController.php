<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bear;
class BearController extends Controller
{
    public function getBear(){
    	$bears = Bear::all();
    	return view('bear')->with('bears', $bears);
    }
}
