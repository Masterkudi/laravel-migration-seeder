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
            $table->timestamp("orario_di_partenza")->nullable(true);
            $table->timestamp("orario_di_arrivo")->nullable(true);
            $table->string("codice_treno", 50);
            $table->decimal("numero_carrozze", 65);
            $table->boolean("in_orario")->default(1);
            $table->boolean("cancellato")->default(0);

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
