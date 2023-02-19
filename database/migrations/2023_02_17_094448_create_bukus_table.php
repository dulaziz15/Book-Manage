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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('rak')->unsigned()->index()->nullable();
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('tahun');
            $table->timestamps();
            $table->foreign('rak')->references('id')->on('raks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
