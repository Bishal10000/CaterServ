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
        Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->string('country');
    $table->string('city');
    $table->string('venue'); // "palace" in your form
    $table->string('event_type'); // e.g., "Small Event"
    $table->integer('guest_count');
    $table->date('event_date');
    $table->boolean('vegetarian_option')->default(false);
    $table->string('contact_number');
    $table->string('email');
    $table->text('special_requests')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
