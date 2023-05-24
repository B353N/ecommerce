<?php

namespace App\Traids;


use Illuminate\Http\Request;
use Nette\Utils\Image;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

trait ImageUploadTrait{

    public function uploadImage(Request $request, $inputName, $path)
    {
        if($request->hasFile($inputName)){

            $image = $request->$inputName;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;

        }
    }

}
