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
        Schema::create('id_replacements', function (Blueprint $table) {
            $table->id();
            $table->string('admission');
            $table->string('name');
            $table->string('email');
            $table->string('faculty'); // Example: School, Faculty, etc.
            $table->string('course');
            $table->string('photo_path'); // Ensure this column is defined
            // $table->string('status')->default('pending'); // Status: pending, approved, rejected
            $table->string('id_photo_expired_path')->nullable(); // For expired IDs
            $table->string('police_abstract_path')->nullable(); // For lost IDs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_replacements');
    }
};
