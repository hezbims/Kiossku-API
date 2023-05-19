<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Properti;
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

        // Properti::create([
        //     'judulPromosi' => 'Lahan Gambut',
        //     'harga' => 10000000,
        //     'waktuPembayaran' => 'tahun',
        //     'fixNego' => 'Nego',
        //     'sewaJual' => 'sewa',
        //     'provinsi' => 'Bali',
        //     'kota' => 'Jembrana',
        //     'kecamatan' => 'Mendoyo',
        //     'kelurahan' => 'pak lurah',
        //     'luasLahan' => 10,
        //     'luasBangunan' => 10,
        //     'tingkat' => 2,
        //     'kapasitasListrik' => 2300,
        //     'alamat' => "Jl. Kamboja no.4",
        //     'fasilitas' => '',
        //     'deskripsi' => 'Lahan di desa yang masih asri',
        //     'panjang' => 2,
        //     'lebar' => 5
        // ]);
    }
}
