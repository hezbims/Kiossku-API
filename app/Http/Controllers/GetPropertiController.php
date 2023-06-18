<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertiResource;
use App\Models\Properti;
use Illuminate\Http\Request;

class GetPropertiController extends Controller
{
    function getAllProducts(Request $request){
        return PropertiResource::collection(Properti::with('images:imageName,propertiId')->get());
    }
}
