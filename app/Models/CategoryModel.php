<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
	protected $table = 'category';
	protected $primaryKey  = 'id';
	//public $timestamps = false;
	
	
	public function rules()
	{
		return [
			'name' => 'required',
		];
	}
	public function messages()
	{
		return [
			'name.required' => 'A name is required',
		];
	}
}
