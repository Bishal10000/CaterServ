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
        Schema::create('menu_items', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // e.g., "Paneer"
    $table->text('description');
    $table->decimal('price', 8, 2); // e.g., 90.00
    $table->string('category'); // e.g., "Starter", "Main Course"
    $table->string('image_path')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
