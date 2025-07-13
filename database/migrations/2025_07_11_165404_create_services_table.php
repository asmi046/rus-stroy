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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('template')->nullable()->comment('Шаблон');
            $table->string('img', 800)->nullable()->comment('Изображение');
            $table->string('slug')->unique()->comment('Слаг');
            $table->text('short_description')->nullable()->comment('Короткое описание');
            $table->text('description')->nullable()->comment('Описание');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->json('sections')->nullable()->comment('Секции');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
