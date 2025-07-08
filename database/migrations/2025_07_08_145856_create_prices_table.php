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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('section')->comment('Раздел');
            $table->string('name')->comment('Наименование');
            $table->string('unit', 50)->comment('Единицы измерения');
            $table->decimal('price', 10, 2)->comment('Цена');
            $table->string('link')->nullable()->comment('Ссылка');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
