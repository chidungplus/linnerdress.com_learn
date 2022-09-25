<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
class RoleController extends Controller
{
    public function beautyInput($data)
	{
		$dataValidate = array();
		if(isset($data['name'])) $dataValidate['name'] = trim($data['name']);
		return $dataValidate;
	}

	public function getRole($id){
		return Role::find($id);
	}

	public function getAll(){
		return Role::get();
	}
}
