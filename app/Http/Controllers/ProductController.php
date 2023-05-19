<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertiResource;
use App\Models\Properti;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function getAllProducts(Request $request){
        return PropertiResource::collection(Properti::all());
    }

    function postProduct(Request $request){
        try{
            $images = $request->file('images');
            // return response()->json([
            //     'message' => gettype($images),
            // ])->setStatusCode(500);
            foreach ($images as $index => $image){

                $extension = $image->extension();
                $filename = microtime(true) . $index;
                $image->storeAs("properti_images" , $filename . '.' . 'png');
            }
            
            Properti::create([
                'judulPromosi' => $request['judulPromosi'],
                'harga' => $request['harga'],
                'waktuPembayaran' => $request['waktuPembayaran'],
                'fixNego' => $request['fixNego'],
                'sewaJual' => $request['sewaJual'],
                'provinsi' => $request['provinsi'],
                'kota' => $request['kota'],
                'kecamatan' => $request['kecamatan'],
                'kelurahan' => $request['kelurahan'],
                'luasLahan' => $request['luasLahan'],
                'luasBangunan' => $request['luasBangunan'],
                'tingkat' => $request['tingkat'],
                'kapasitasListrik' => $request['kapasitasListrik'],
                'alamat' => $request['alamat'],
                'fasilitas' => $request['fasilitas'],
                'deskripsi' => $request['deskripsi'],
                'panjang' => $request['panjang'],
                'lebar' => $request['lebar']
            ]);
    
            return response()->json([
                'message' => "Berhasil membuat data baru!"
            ]);
        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
            ])->setStatusCode(500);
        }
    }
}
