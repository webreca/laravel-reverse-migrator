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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->default(0);
            $table->bigInteger('booking_id');
            $table->bigInteger('property_id');
            $table->bigInteger('customer_id')->nullable();
            $table->unsignedInteger('method_code')->default(0);
            $table->decimal('amount', 28, 8)->default(0);
            $table->string('method_currency', 40)->nullable();
            $table->decimal('charge', 28, 8)->default(0);
            $table->decimal('rate', 28, 8)->default(0);
            $table->decimal('final_amo', 28, 8)->default(0);
            $table->text('detail')->nullable();
            $table->string('btc_amo')->nullable();
            $table->string('btc_wallet')->nullable();
            $table->string('trx', 40)->nullable();
            $table->integer('try')->default(0);
            $table->boolean('status')->default(false)->comment('1=>success, 2=>pending, 3=>cancel');
            $table->boolean('from_api')->default(false);
            $table->string('admin_feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
