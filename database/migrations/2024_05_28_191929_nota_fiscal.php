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
        Schema::create('nota_fiscails', function (Blueprint $table) {
            $table->increments('idNota');          
            $table->string('emissor', 150);
            $table->date('data');
            $table->timestamps();
            $table->index(['data', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_fiscal');
    }
};
