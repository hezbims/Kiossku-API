<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertiResource;
use App\Models\Properti;
use Exception;
use Illuminate\Http\Request;

class GetPropertiController extends Controller
{
    function getAllProducts(Request $request){
        return PropertiResource::collection(Properti::with('images:imageName,propertiId')->get());
    }

    function getPropertiById(int $id){
        try {
            $properti = Properti::with('images:imageName,propertiId')->findOrFail($id);
            return new PropertiResource($properti);
        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
            ])->setStatusCode(500);
        }
    }
}
