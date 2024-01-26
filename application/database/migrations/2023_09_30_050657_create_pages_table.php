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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('parent_page',255)->nullable();
            $table->string('name',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->string('sorts',10)->nullable();
            $table->string('title',255)->nullable();
            $table->longText('details')->nullable();
            $table->string('links',255)->nullable();
            $table->string('creator',255)->nullable();
            $table->string('status',1)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
