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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('img', 800)->nullable()->comment('Изображение');
            $table->integer('order')->default(0)->comment('Порядок');
            $table->string('slug')->unique()->comment('Слаг');
            $table->text('description')->nullable()->comment('Описание');
            $table->string('type', 50)->comment('Тип');
            $table->integer('floors')->comment('Количество этажей');
            $table->string('location')->nullable()->comment('Место нахождения');
            $table->string('coordinates')->nullable()->comment('Координаты');
            $table->string('wall_material')->nullable()->comment('Материал стен');
            $table->string('cladding')->nullable()->comment('Облицовка');
            $table->string('foundation')->nullable()->comment('Фундамент');
            $table->string('roofing')->nullable()->comment('Кровля');
            $table->string('flooring')->nullable()->comment('Перекрытия');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
