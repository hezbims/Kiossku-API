<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Properti;
use App\Models\PropertiImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Properti::create([
            'judulPromosi' => 'Lahan Gambut',
            'harga' => 10000000,
            'tipeProperti' => 'Lahan',
            'waktuPembayaran' => 'tahun',
            'fixNego' => 'Nego',
            'sewaJual' => 'sewa',
            'provinsi' => 'Bali',
            'kota' => 'Jembrana',
            'kecamatan' => 'Mendoyo',
            'kelurahan' => 'pak lurah',
            'luasLahan' => 10,
            'luasBangunan' => 10,
            'tingkat' => 2,
            'kapasitasListrik' => 2300,
            'alamat' => "Jl. Kamboja no.4",
            'fasilitas' => '',
            'deskripsi' => 'Lahan di desa yang masih asri',
            'panjang' => 2,
            'lebar' => 5
        ]);
        PropertiImage::create([
            'imageName' => '1687003603.16120.png',
            'propertiId' => 1
        ]);
        PropertiImage::create([
           'imageName' => '1687003603.22291.png',
           'propertiId' => 1
        ]);

        Properti::create([
            'judulPromosi' => 'Kios Vulkanik',
            'harga' => 10000000,
            'tipeProperti' => 'Kios',
            'waktuPembayaran' => '',
            'fixNego' => 'Nego',
            'sewaJual' => 'sewa',
            'provinsi' => 'Bali',
            'kota' => 'Jembrana',
            'kecamatan' => 'Mendoyo',
            'kelurahan' => 'pak lurah',
            'luasLahan' => 10,
            'luasBangunan' => 10,
            'tingkat' => 2,
            'kapasitasListrik' => 2300,
            'alamat' => "Jl. Kamboja no.4",
            'fasilitas' => '',
            'deskripsi' => 'Lahan di desa yang masih asri',
            'panjang' => 2,
            'lebar' => 5
        ]);
        PropertiImage::create([
            'imageName' => '1687003743.24190.png',
            'propertiId' => 2
         ]);
        PropertiImage::create([
            'imageName' => '1687003618.77950.png',
            'propertiId' => 2
         ]);
         PropertiImage::create([
            'imageName' => '1687003715.29420.png',
            'propertiId' => 2
         ]);

    }
}
