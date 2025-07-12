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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('material_name')->comment('Заголовок');
            $table->string('subtitle', 800)->nullable()->comment('Подзаголовок');
            $table->string('img', 800)->nullable()->comment('Изображение');
            $table->string('slug')->unique()->comment('Слаг');
            $table->integer('order')->default(100)->comment('Порядок');
            $table->text('description')->nullable()->comment('Описание');
            $table->decimal('start_price', 15, 2)->comment('Стартовая цена');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
