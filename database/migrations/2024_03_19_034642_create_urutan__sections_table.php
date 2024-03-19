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
        Schema::create('urutan__sections', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('deskripsi_section');
            $table->text('jenis_section');
            $table->text('urutan_section')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urutan__sections');
    }
};
