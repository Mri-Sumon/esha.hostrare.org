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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',11)->default(0);
            $table->string('order_id',11)->default(0);
            $table->enum('mode', ['cod', 'bkash'])->default('cod');
            $table->string('number',255)->nullable();
            $table->string('transaction_id',255)->nullable();            
            $table->enum('status', ['pending', 'approved','declined','refund'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
