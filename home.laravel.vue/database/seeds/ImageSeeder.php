<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();   
        Image::insert([
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/6-DEN-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/5-DEN-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/2-DEN-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/2-DO-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/4-DO-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/3-DO-DC09027.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/MAU-DO-DC09027.png'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC09027/MAU-DEN-DC09027.png'
            ],
            // product 2
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/2-DEN-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/3-DEN-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/4-DEN-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/3-DO-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/4-DO-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/5-DO-DC12085.jpg'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/MAU-DEN-DC12085.png'
            ],
            [
                'path' => 'https://js0fpsb45jobj.vcdn.cloud/storage/upload/media/gumac/DC12085/MAU-DO-DC12085.png'
            ],
        ]);   
    }
}
