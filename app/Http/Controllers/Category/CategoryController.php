<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    //
	function show(){
		$data = CategoryModel::All();
		dd($data);
	}
	
	function insert(){
		//$validator = Validator::make($input, $rules, $messages);
	}
}
