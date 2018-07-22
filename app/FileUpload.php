<?php

namespace App;

use Illuminate\Support\Facades\Storage;
//use Illuminate\Database\Eloquent\Model;
use File;

class FileUpload
{
    public static function savefile($request,$fileName,$default="")
    { 
            $name = "";
            $document = $request->document;
            if ($request->hasFile($fileName)) 
            {
                $extension=$document->getClientOriginalExtension();
                $name=rand(11111,99999).".".date('Y-m-d').".".time().".".$extension;
                return Storage::putFile('public', $request->file('document'));
                $name=$name;
            }else{
                $name=$default;
            }   
    }
}
