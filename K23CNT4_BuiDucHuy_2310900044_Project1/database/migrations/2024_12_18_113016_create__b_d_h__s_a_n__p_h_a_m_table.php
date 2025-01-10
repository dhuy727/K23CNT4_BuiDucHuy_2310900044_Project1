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
        Schema::create('BDH_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('bdhMaSanPham',255)->unique();
            $table->string('bdhTenSanPham',255);
            $table->integer('bdhSoLuong');
            $table->bigInteger('bdhDonGia');
            $table->string('bdhMaLoai')->references('id')->on('BDH_LOAI_SAN_PHAM');
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_SAN_PHAM');
    }
};
