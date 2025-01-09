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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->bigInteger('owner_id');
            $table->bigInteger('renter_id');
            $table->bigInteger('property_id');
            $table->decimal('amount', 28, 8);
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->integer('guest');
            $table->string('room_no')->nullable();
            $table->string('floor_no')->nullable();
            $table->text('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->text('remarks')->nullable();
            $table->tinyInteger('status')->comment('pending = 0,
approved = 1,
rejected =2');
            $table->boolean('checkin')->default(false);
            $table->timestamp('checkin_time')->nullable();
            $table->boolean('checkout')->default(false);
            $table->timestamp('checkout_time')->nullable();
            $table->string('digital_key', 6)->nullable();
            $table->text('reason')->nullable();
            $table->string('payment_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
