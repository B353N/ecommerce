<?php

namespace App\Traids;


use Illuminate\Http\Request;
use Nette\Utils\Image;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use File;

trait imageUploadTrait{

    public function uploadImage(Request $request, $inputName, $path)
    {
        if($request->hasFile($inputName)){

            $image = $request->$inputName;
            $ext =  $image->getClientOriginalExtension();
            $imageName = 'media_'.uniqid().'.'.$ext;
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;

        }
    }

    public function uploadMultiImage(Request $request, $inputName, $path)
    {
        $imagePaths = [];
        if($request->hasFile($inputName)){

            $images = $request->$inputName;
            foreach($images as $image){

                $ext =  $image->getClientOriginalExtension();
                $imageName = 'media_'.uniqid().'.'.$ext;
                $image->move(public_path($path), $imageName);

                $imagePaths[] = $path.'/'.$imageName;
            }
            return $imagePaths;
        }
    }


    public function updateImage(Request $request, $inputName, $path, $oldPath=null)
    {
        if($request->hasFile($inputName)){
            if(File::exists(public_path(path: $oldPath))){
                File::delete(public_path(path: $oldPath));
            }

            $image = $request->$inputName;
            $ext =  $image->getClientOriginalExtension();
            $imageName = 'media_'.uniqid().'.'.$ext;
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;

        }
    }

    public function deleteImage(string $path)
    {
        if(File::exists(public_path(path: $path))){
            File::delete(public_path(path: $path));
        }
    }

}