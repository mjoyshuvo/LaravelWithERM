<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Fish;
use App\Bear;
class FishController extends Controller
{
	public function getFish(){
		$fishes = DB::table('fish')
					->join('bears', 'bears.id','=', 'fish.bear_id')
					->select('fish.*','bears.id','bears.name')
					->get();
		return view('fish')->with('fishes',$fishes);
	}
   
}
