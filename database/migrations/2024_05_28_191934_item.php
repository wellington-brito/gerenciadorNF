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
        Schema::create('items', function (Blueprint $table) {
            $table->integer('idItem');
            $table->integer('idNota');              
            $table->string('produto');
            $table->double('valor', 15, 8);
            $table->timestamps();
            $table->primary(['idItem','idNota']);
            $table->index(['produto', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
