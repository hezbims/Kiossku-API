<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Properti extends Model
{
    use HasFactory;

    protected $fillable = [
        'judulPromosi',
        'harga',
        'waktuPembayaran',
        'fixNego',
        'sewaJual',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'luasLahan',
        'luasBangunan',
        'tingkat',
        'kapasitasListrik',
        'alamat',
        'fasilitas',
        'deskripsi',
        'panjang',
        'lebar'
    ];

    function images() : hasMany{
        return $this->hasMany(PropertiImage::class , 'propertiId' , 'id');
    }
}
