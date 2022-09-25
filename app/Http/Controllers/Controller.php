<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\SeoPage;
use Illuminate\Support\Facades\URL;
use App\Config;
use App\Module;

use Cache;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function config(){

    	$config = Cache::rememberForever('config', function() {
            $config = new \stdClass();
			$config->page 			= $this->groupConfig('page');
			$config->google 		= $this->groupConfig('google');
			$config->support 		= $this->groupConfig('support');
			$config->advanced 		= $this->groupConfig('advanced');
			$config->cardSetting 	= $this->groupConfig('thecao');
	
            return $config;
        });
		return $config;
	}
	public function groupConfig($group){
		$modelConfig = Config::where('group',$group)->get();

		$group = array();
		foreach ($modelConfig as $row) {
			$group[$row->key] = $row->value;
		}
		$group = json_decode(json_encode($group));
		return $group;
	}
	

}
