<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->integer('tiempo_estandar');
            $table->integer('orden_secuencia');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('procesos');
    }
};