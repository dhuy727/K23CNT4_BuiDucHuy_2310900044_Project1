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
        Schema::create('bdhdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhSoDH')->primary();
            $table->date('bdhNgayDH');
            $table->string('bdhMaNCC');
            $table->foreign('bdhMaNCC')->references('bdhMaNCC')->on('bdhnhacc_create');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhdondh');
    }
};
