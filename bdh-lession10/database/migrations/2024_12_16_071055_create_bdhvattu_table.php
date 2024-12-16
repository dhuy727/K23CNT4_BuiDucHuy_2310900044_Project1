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
        Schema::create('bdhvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('bdhMaVTu')->primary();
            $table->string('bdhTenVTu')->unique();
            $table->string('bdhDvTinh');
            $table->float('bdhPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhvattu');
    }
};
