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
        Schema::create('price_of_materials', function (Blueprint $table) {
            $table->id();
            $table->string('material')->comment('Материал');
            $table->string('type')->comment('Тип');
            $table->decimal('price_per_meter', 12, 2)->comment('Цена за метр');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_of_materials');
    }
};
