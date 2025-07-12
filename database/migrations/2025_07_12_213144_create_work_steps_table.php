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
        Schema::create('work_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_number')->default(1)->comment('Номер шага');
            $table->string('step_name')->comment('Имя шага');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('additional_description')->nullable()->comment('Описание дополнительное');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_steps');
    }
};
