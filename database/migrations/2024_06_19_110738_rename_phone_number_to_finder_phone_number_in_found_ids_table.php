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
        Schema::table('found_ids', function (Blueprint $table) {
            $table->renameColumn('phone_number', 'finder_phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('found_ids', function (Blueprint $table) {
            $table->renameColumn('finder_phone_number', 'phone_number');
        });
    }
};
