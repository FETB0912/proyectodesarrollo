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
            $table->uuid('service_id')->primary();
            $table->string('name');
            $table->foreignUuid('category_id')->references('category_id')->on('categories');
            $table->double('price', 8,2);
            $table->foreignUuid('colab_id')->references('colab_id')->on('collaborators');
            $table->timestamps();
            $table->softDeletes();
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
