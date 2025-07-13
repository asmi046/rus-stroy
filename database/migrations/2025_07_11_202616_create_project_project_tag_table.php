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
        Schema::create('project_project_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade')->comment('ID проекта');
            $table->foreignId('project_tag_id')->constrained('project_tags')->onDelete('cascade')->comment('ID тега проекта');
            $table->timestamps();

            // Уникальный индекс для предотвращения дублирования связей
            $table->unique(['project_id', 'project_tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_project_tag');
    }
};
