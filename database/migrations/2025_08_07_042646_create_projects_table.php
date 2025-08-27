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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->string('bgcolor');
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->longText('content');
            $table->string('cover')->nullable();
            $table->unsignedbigInteger('views');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('protags', function (Blueprint $table) {
            $table->id();
            $table->uuid('project_id');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropAllTables();
    }
};
