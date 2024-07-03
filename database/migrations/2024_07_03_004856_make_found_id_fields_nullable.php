<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeFoundIdFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('found_ids', function (Blueprint $table) {
            $table->string('location_found')->nullable()->change();
            $table->string('finder_email')->nullable()->change();
            $table->string('finder_phone_number')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('found_ids', function (Blueprint $table) {
            $table->string('location_found')->nullable(false)->change();
            $table->string('finder_email')->nullable(false)->change();
            $table->string('finder_phone_number')->nullable(false)->change();
        });
    }
}
