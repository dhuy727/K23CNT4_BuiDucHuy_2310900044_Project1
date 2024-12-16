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
        Schema::create('bdhctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhSoPX');
            $table->string('bdhMaVTu');
            $table->integer('bdhSlXuat');
            $table->float('bdhDgXuat');
            //primary
            $table->primary(['bdhSoPX','bdhMaVTu']);
            //foreign
            $table->foreign('bdhSoPX')->references('bdhSoPX')->on('bdhpxuat');
            $table->foreign('bdhMaVTu')->references('bdhMaVTu')->on('bdhvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhctpxuat');
    }
};
