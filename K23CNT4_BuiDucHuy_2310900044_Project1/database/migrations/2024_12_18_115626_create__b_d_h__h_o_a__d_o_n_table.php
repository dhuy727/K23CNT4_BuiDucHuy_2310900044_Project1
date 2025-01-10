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
        Schema::create('BDH_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('bdhMaHoaDon',255)->unque();
            $table->string('bdhMaKhachHang')->references('id')->on('BDH_KHACH_HANG');
            $table->date('bdhNgayHoaDon');
            $table->string('bdhHoTenKhachHang',255);
            $table->float('bdhTongGiaTri');
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_HOA_DON');
    }
};
