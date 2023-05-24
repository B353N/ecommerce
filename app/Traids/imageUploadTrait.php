<?php

namespace App\Traids;


use Illuminate\Http\Request;
use Nette\Utils\Image;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

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

}
