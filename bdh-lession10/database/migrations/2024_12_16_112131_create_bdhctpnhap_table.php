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
        Schema::create('bdhctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhSoPN');
            $table->string('bdhMaVTu');
            $table->integer('bdhSlNhap');
            $table->float('bdhDgNhap');
            //primary
            $table->primary(['bdhSoPN','bdhMaVTu']);
            //foreign
            $table->foreign('bdhSoPN')->references('bdhSoPN')->on('bdhpnhap');
            $table->foreign('bdhMaVTu')->references('bdhMaVTu')->on('bdhvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhctpnhap');
    }
};
