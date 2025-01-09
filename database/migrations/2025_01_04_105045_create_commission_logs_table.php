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
        Schema::create('commission_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('from_id');
            $table->integer('to_id');
            $table->string('level', 191);
            $table->decimal('amount', 11);
            $table->string('type', 40);
            $table->string('details');
            $table->string('trx', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commission_logs');
    }
};
