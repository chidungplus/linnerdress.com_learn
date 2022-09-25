<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\Image;
class ImageController extends Controller
{
    public function getImage($id){
        try{
            $image = Image::find($id);
            return $image;
        }catch(Exception $e){
			Log::error($e);
            return false;
        }
    }
}
