<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Image;

class ImageRepository
{
    /**
     * Upload the image
     * @param $image
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function uploadImage($image, $name=null)
    {
        return $this->upload($image);
    }

    /**
     * Upload the image
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    private function upload($image, $name=null)
    {
        try{
            $name == null ? $name = uniqid() : $name = $name;
            $path = Storage::disk('public')->put('images', $image);
            $uploadedImage = Image::create([
                'path' => $path,
                'name' => $name,
            ]);
            return $uploadedImage;
        }catch (\Exception $exception){
            return response('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}