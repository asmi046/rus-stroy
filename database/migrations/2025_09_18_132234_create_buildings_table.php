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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->integer('order')->default(0)->comment('Порядок');
            $table->string('short_description')->nullable()->comment('Краткое описание');
            $table->string('img', 800)->nullable()->comment('Изображение');
            $table->string('banner', 800)->nullable()->comment('Баннер');
            $table->string('slug')->unique()->comment('Слаг');
            $table->text('description')->nullable()->comment('Описание');
            $table->string('building_type')->comment('Тип постройки');
            $table->string('building_material')->nullable()->comment('Материал постройки');
            $table->decimal('start_price', 15, 2)->nullable()->comment('Стартовая цена');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
