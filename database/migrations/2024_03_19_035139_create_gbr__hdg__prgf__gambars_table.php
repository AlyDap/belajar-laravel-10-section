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
        Schema::create('gbr__hdg__prgf__gambars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_gbr_hdg_prgf');
            $table->text('file_gambar');
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->uuid('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_gbr_hdg_prgf')->references('id')->on('section__gbr__hdg__prgfs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gbr__hdg__prgf__gambars');
    }
};
