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
        Schema::create('BDH_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bdhHoaDonID')->references('id')->on('BDH_HOA_DON');
            $table->bigInteger('bdhSanPhamID')->references('id')->on('BDH_SAN_PHAM');
            $table->integer('bdhSoLuongMua');
            $table->float('bdhDonGiaMua');
            $table->float('bdhThanhTien');
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_CT_HOA_DON');
    }
};
