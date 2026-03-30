<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('prendas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 50);
            $table->string('talla', 10);
            $table->string('color', 30);
            $table->string('lote')->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->string('estado_final')->default('en proceso');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('prendas');
    }
};