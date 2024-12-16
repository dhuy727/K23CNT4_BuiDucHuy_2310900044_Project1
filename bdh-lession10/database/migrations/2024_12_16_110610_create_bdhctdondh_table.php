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
        Schema::create('bdhctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('bdhSoDH');
            $table->string('bdhMaVTu');
            $table->integer('bdhSlDat');
            // Tạo khóa chính trên 2 cột (bdhSoDH, bdhMaVTu)
            $table->primary(['bdhSoDH','bdhMaVTu']);
            // Khóa ngoại
            $table->foreign('bdhSoDH')->references('bdhSoDH')->on('bdhdondh');
            $table->foreign('bdhMaVTu')->references('bdhMaVTu')->on('bdhvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdhctdondh');
    }
};
