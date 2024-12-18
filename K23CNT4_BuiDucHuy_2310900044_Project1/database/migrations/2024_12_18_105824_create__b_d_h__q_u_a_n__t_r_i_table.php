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
        Schema::create('BDH_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('bdhTaiKhoan',225)->unique();
            $table->string('bdhMatKhau',255);
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_QUAN_TRI');
    }
};
