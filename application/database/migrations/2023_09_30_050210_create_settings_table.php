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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('tagline',255)->nullable();
            $table->string('scroll',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->string('logo',255)->nullable();
            $table->string('altlogo',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('tel',255)->nullable();
            $table->string('mobile',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('link1',255)->nullable();
            $table->string('link2',255)->nullable();
            $table->string('link3',255)->nullable();
            $table->string('link4',255)->nullable();
            $table->string('link5',255)->nullable();
            $table->string('link6',255)->nullable();
            $table->string('office_hours',255)->nullable();
            $table->longText('map_link')->nullable();
            $table->string('copyright',255)->nullable();
            $table->string('Delivery_Charge_Inside_Dhaka',255)->nullable();
            $table->string('Delivery_Charge_Outside_Dhaka',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
