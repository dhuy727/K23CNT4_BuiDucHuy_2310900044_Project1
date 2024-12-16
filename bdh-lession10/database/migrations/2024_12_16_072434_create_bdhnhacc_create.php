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
        Schema::create('bdhnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhMaNCC')->primary();
            $table->string('bdhTenNCC')->unique();
            $table->string('bdhDiaChi');
            $table->string('bdhDienThoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhnhacc_create');
    }
};
