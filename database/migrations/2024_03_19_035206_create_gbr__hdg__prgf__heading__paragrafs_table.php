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
        Schema::create('gbr__hdg__prgf__heading__paragrafs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_gbr_hdg_prgf_head');
            $table->text('text_paragraf');
            $table->timestamps();

            $table->foreign('id_gbr_hdg_prgf_head')->references('id')->on('gbr__hdg__prgf__headings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gbr__hdg__prgf__heading__paragrafs');
    }
};
