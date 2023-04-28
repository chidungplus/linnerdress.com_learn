<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Gallery;
use App\GalleryImage;

use App\Http\Controllers\Admin\ImageController;
class GalleryController extends Controller
{

    public function handleImage(Request $request, $gallery_id)
	{
		try{
			if(!$request->file('file')){
				return response()->json([
                    'err' => true,
                    'msg' => 'Vui lòng chọn hình ảnh.'
                ]);
			}
			$file = $request->file('file');
			# upload
			$image = app(ImageController::class)->handleUpload($file);
			# add path to db and get id accimage
			GalleryImage::create([
                'gallery_id' => $gallery_id,
                'image_id' => $image->id
            ]);

			return response()->json([
				'err' => false,
				'msg' => 'Thành công.',
			]);
		}catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Something went wrong!'
            ]);
        }
	}
}
