<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Config;
class ConfigController extends Controller
{
    /**
     * get list config
     */
    public function list(){
        $configs = Config::get();
        $list = array();
		foreach ($configs as $row) {
			$list[$row->name] = $row->value;
		}
		return $list;
    }
}
