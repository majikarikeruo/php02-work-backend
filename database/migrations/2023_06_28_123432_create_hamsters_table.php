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
        Schema::create('hamsters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100)->nullable(false)->comment('ペット名');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('飼い主id番号');
            $table->integer('sex')->nullable(false)->comment('ハムスターの性別');
            $table->integer('type_id')->nullable(false)->comment('ハムスターの種類id番号');
            $table->string('photo')->nullable(true)->comment('画像のURL');
            $table->date('birthday')->nullable(false)->comment('生まれた日');
            $table->date('leaveday')->nullable(true)->comment('旅立った日');
            $table->text('introduce')->nullable(true)->comment('備考欄');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hamsters');
    }
};
