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
        Schema::create('hamstertypes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type', 100)->nullable(false)->comment('ハムスターの種類');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hamstertypes');
    }
};
