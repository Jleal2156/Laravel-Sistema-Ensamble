<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('defectos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('registro_id')
                  ->constrained('registro_ensambles')
                  ->cascadeOnDelete();

            $table->string('descripcion');
            $table->string('tipo');
            $table->string('nivel_severidad');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('defectos');
    }
};