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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('type_id')->nullable();
            $table->tinyInteger('tab_id')->nullable();
            $table->text('title')->nullable();
            $table->integer('units')->default(1);
            $table->integer('capacity')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bath')->nullable();
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->string('city', 40)->nullable();
            $table->string('state', 40)->nullable();
            $table->string('country', 40)->nullable();
            $table->string('lat', 40)->nullable();
            $table->string('lon', 40)->nullable();
            $table->longText('property_detail')->nullable();
            $table->decimal('regular_price', 28, 8)->nullable();
            $table->decimal('discount_price', 28, 8)->nullable();
            $table->tinyInteger('status')->nullable()->comment('pending = 0,
approved = 1');
            $table->tinyInteger('is_featured')->nullable()->comment('not featured = 0,
featured = 1');
            $table->integer('total_review')->nullable();
            $table->decimal('avg_rating', 28)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
