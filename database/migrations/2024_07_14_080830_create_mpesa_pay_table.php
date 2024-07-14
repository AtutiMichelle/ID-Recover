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
        Schema::create ('mpesa_pay', function (Blueprint $table) {
            $table->id();
            $table->string("phone");
            $table->double("amount",);
            $table->string("reference");
            $table->string("description");
            $table->string("MerchantRequestId")->unique();
            $table->string("CheckoutRequest")->unique();
            $table->string("MpesaReceiptNumber")->nullable();
            $table->string("ResultDescription")->nullable();
            $table->string("TransactionDate")->nullable();
            $table->string("status");
            $table->string("timestamps");
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists ('mpesa_pay');
    }
};
