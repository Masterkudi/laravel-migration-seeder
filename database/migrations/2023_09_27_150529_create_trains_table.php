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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 100);
            $table->string("stazione_di_partenza", 100);
            $table->string("stazione_di_arrivo", 100);
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->string("codice_treno", 50);
            $table->decimal("numero_carrozze", 100);
            $table->boolean("in_orario");
            $table->boolean("cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
