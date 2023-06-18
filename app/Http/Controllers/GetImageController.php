<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetImageController extends Controller
{
    //
    function fetchPropertiImage(Request $request){
        $imageName = $request['imageName'];
        $path = storage_path('app/properti_images/' . $imageName);
        if (!file_exists($path))
            abort(404);
        return response()->file($path);
    }
}
