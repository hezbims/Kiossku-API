<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertiResource;
use App\Models\Properti;
use App\Models\PropertiImage;
use Exception;
use Illuminate\Http\Request;

class PostPropertiController extends Controller
{
    function postProduct(Request $request){
        try{

            $idProperti = Properti::create([
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
            ])->id;

            // STORE BINARY IMAGE
            $images = $request->file('images');
            foreach ($images as $index => $image){
                $extension = $image->extension();
                $filename = microtime(true) . $index . '.' . $extension;
                $image->storeAs("properti_images" , $filename);
                PropertiImage::create([
                    'propertiId' => $idProperti,
                    'imageName' => $filename,
                ]);
            }

            return response()->json([
                'message' => "Berhasil membuat data baru!"
            ]);
        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
            ])->setStatusCode(500);
        }
    }

    function debugUploadImage(Request $request){
        try{
            $images = $request->file('images');
            foreach ($images as $index => $image){
                $extension = $image->extension();
                $filename = microtime(true) . $index;
                $image->storeAs("properti_images" , $filename . '.' . 'png');
            }

            return response()->json([
                'message' => "Berhasil upload image"
            ]);
        } catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage(),
            ])->setStatusCode(500);
        }
    }
}
