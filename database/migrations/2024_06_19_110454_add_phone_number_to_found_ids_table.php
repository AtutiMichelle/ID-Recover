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
            $table->string('phone_number')->after('finder_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('found_ids', function (Blueprint $table) {
            $table->dropColumn('phone_number');
        });
    }
};
