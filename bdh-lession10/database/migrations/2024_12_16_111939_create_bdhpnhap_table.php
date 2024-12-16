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
        Schema::create('bdhpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhSoPN')->primary();
            $table->date('bdhNgayNhap');
            $table->string('bdhSoDH');
            //foreign 
            $table->foreign('bdhSoDH')->references('bdhSoDH')->on('bdhdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhpnhap');
    }
};
