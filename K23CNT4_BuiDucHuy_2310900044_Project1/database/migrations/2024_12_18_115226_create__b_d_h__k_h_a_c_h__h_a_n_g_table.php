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
        Schema::create('BDH_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('bdhMaKhachHang',255)->unque();
            $table->string('bdhTenKhachHang',255);
            $table->string('bdhEmail',255);
            $table->string('bdhMatKhau',255);
            $table->string('bdhDienThoai',255);
            $table->string('bdhDiaChi',255);
            $table->date('bdhNgayDangKy');
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_KHACH_HANG');
    }
};
