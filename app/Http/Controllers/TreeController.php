<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

use App\Tree;

class TreeController extends Controller
{
	public function getTree(){

		$trees = DB::table('trees')
					->leftJoin('bears','bears.id','=','trees.bear_id')
					->SELECT('trees.id as treeId','trees.age','trees.type','bears.id as bearId','bears.name')
					->get();

    	return view('trees')->with('trees', $trees);
	}
    
}
