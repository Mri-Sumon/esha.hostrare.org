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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',11)->nullable();
            $table->string('subtotal',100)->nullable();
            $table->string('discount',100)->nullable();
            $table->string('tax',100)->nullable();
            $table->string('total',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('mobile',520)->nullable();
            $table->string('email',100)->nullable();
            $table->string('address',300)->nullable();
            $table->string('city',100)->nullable();
            $table->string('note',100)->nullable();
            $table->string('status',1)->default(1);
            $table->string('is_shipping_different',100)->nullable();
            $table->string('delivery_charge',100)->nullable();
            $table->string('total_with_dcost',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
