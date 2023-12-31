<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('propertis', function (Blueprint $table) {
            $table->id();
            $table->string("judulPromosi");
            $table->bigInteger('harga');
            $table->string('waktuPembayaran');
            $table->string('tipeProperti');
            $table->string('fixNego');
            $table->string('sewaJual');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->bigInteger('luasLahan');
            $table->bigInteger('luasBangunan');
            $table->bigInteger('tingkat');
            $table->bigInteger('kapasitasListrik');
            $table->string('alamat');
            $table->string('fasilitas');
            $table->string('deskripsi');
            $table->bigInteger('panjang');
            $table->bigInteger('lebar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propertis');
    }
};
