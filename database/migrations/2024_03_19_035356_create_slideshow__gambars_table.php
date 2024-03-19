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
        Schema::create('slideshow__gambars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_slideshow');
            $table->text('file_gambar');
            $table->timestamps();

            $table->foreign('id_slideshow')->references('id')->on('section__slideshows');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slideshow__gambars');
    }
};