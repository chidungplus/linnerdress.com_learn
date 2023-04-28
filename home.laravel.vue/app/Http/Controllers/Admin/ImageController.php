<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image as InterventionImage;
use Intervention\Image\Size;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use App\Image;
class ImageController extends Controller
{
    public function thumbnail(Request $request){
        try{
            $file = $request->file('thumb')? $request->file('thumb') : $request->file('avatar') ;
            # upload
            $image = $this->handleUpload($file);
            if($image === false){
                return response()->json([
                    'err' => true,
                    'msg' => 'Tải thumbnail thất bại.',
                ]);
            }
            return response()->json([
                'err' => false,
                'msg' => 'Thành công.',
                'image' => $image
            ]);
        }catch(Exception $e){
			Log::error($e);
            return response()->json([
                'err' => true,
                'msg' => 'Error Exception.'
            ]);
        }
    }

    public function handleUpload($file){
        try{
            $path = $file->store('images');
            $file_name = explode('.', $file->hashName())[0];

            return $image = Image::create([
                'path' => $path,
            ]);

        }catch(Exception $e){
            Log::error($e);
            return false;
        }  
    }

    public function handleUpload1($file){
        try{
            $image = array();
            
            $path = $file->store('images');
            $file_name = explode('.', $file->hashName())[0];
            
            $width = InterventionImage::make(storage_path('app/public/'.$path))->width();
            $height = InterventionImage::make(storage_path('app/public/'.$path))->height();

            if($width < 450 || $height < 600){
                return false; # ảnh không đủ chất lượng
            }
            # medium size
            $medium = 'images/'.$file_name.'_450x600.jpg';
            InterventionImage::make(storage_path('app/public/'.$path) )
            ->fit(450, 600, function ($constraint) {
                $constraint->upsize();
            })
            ->save(storage_path('app/public/'.$medium),90);

            # save DB
            $image = Image::create([
                'path' => $path,
                'medium' => $medium
            ]);

            # large size
            if($width > 768){
                $large_height = round(768/$width * $height); # làm tròn
                $large = 'images/'.$file_name.'_768x'.$large_height.'.jpg';
                InterventionImage::make(storage_path('app/public/'.$path) )
                ->fit(768, $large_height , function ($constraint) {
                    $constraint->upsize();
                })
                ->save(storage_path('app/public/'.$large),90);

                $upload = Image::find($image->id)->update([
                    'large' => $large,
                ]);
            }
            
            # delete original image
            // Storage::delete($path);
            return Image::find($image->id);
        }catch(Exception $e){
            Log::error($e);
            return false;
        }    
    }
}