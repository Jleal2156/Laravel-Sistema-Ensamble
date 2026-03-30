<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('registro_ensambles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('operario_id')
                  ->constrained('operarios')
                  ->cascadeOnDelete();

            $table->foreignId('prenda_id')
                  ->constrained('prendas')
                  ->cascadeOnDelete();

            $table->foreignId('proceso_id')
                  ->constrained('procesos')
                  ->cascadeOnDelete();

            $table->timestamp('fecha_hora_inicio');
            $table->timestamp('fecha_hora_fin')->nullable();

            $table->integer('tiempo_real')->nullable();
            $table->string('estado')->default('en proceso');
            $table->text('observaciones')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('registro_ensambles');
    }
};