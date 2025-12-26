<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('field_categories')->onDelete('cascade');
            $table->string('name');
            $table->decimal('hourly_rate', 10, 2); // Harga per jam
            $table->enum('status', ['available', 'maintenance'])->default('available');
            $table->text('image')->nullable(); // URL Foto lapangan
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
