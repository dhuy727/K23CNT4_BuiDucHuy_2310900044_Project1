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
        Schema::create('BDH_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('bdhMaLoai',255)->unique();
            $table->string('bdhTenLoai',255);
            $table->tinyInteger('bdhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BDH_LOAI_SAN_PHAM');
    }
};
