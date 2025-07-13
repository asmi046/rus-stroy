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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('img', 800)->nullable()->comment('Изображение');
            $table->string('slug')->unique()->comment('Слаг');
            $table->decimal('start_price', 15, 2)->comment('Стартовая цена');
            $table->text('description')->nullable()->comment('Описание');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->json('layout')->nullable()->comment('Планировка');
            $table->string('type')->nullable()->comment('Тип');
            $table->integer('floors')->default(1)->comment('Количество этажей');
            $table->decimal('total_area', 8, 2)->comment('Общая площадь');
            $table->string('wall_material')->nullable()->comment('Материал стен');
            $table->string('foundation')->nullable()->comment('Фундамент');
            $table->decimal('ceiling_height', 5, 2)->nullable()->comment('Высота потолка');
            $table->string('flooring')->nullable()->comment('Перекрытия');
            $table->boolean('mansard')->default(false)->comment('Мансарда');
            $table->string('plan_dimensions')->nullable()->comment('Габариты для плана');
            $table->string('extension')->nullable()->comment('Пристройка');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
