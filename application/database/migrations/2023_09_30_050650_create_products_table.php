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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('product_code',255)->nullable();
            $table->string('tags',255)->nullable();
            $table->string('brand',255)->nullable();
            $table->string('brand_details',255)->nullable();
            $table->string('pics',255)->nullable();
            $table->string('f_pic',255)->nullable();
            $table->string('sale_price',255)->nullable();
            $table->string('price',255)->nullable();
            $table->string('discount_type',255)->nullable();
            $table->string('discount_amount',255)->nullable();
            $table->string('description',255)->nullable();
            $table->string('cat_ids',255)->nullable();
            $table->string('brief',255)->nullable();
            $table->string('status',1)->default(1);
            $table->string('sort',255)->nullable();
            $table->string('feature_product',1)->default(1);
            $table->string('top_product',1)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
