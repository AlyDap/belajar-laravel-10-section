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
        Schema::create('section__tulisans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_section');
            $table->text('tulisan');
            $table->timestamps();

            $table->foreign('id_section')->references('id')->on('urutan__sections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section__tulisans');
    }
};
