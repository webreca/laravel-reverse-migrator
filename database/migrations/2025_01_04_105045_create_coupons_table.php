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
        Schema::create('coupons', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('created_by', ['administrator', 'partner'])->default('administrator');
            $table->integer('created_by_id')->nullable();
            $table->string('code', 8)->nullable();
            $table->integer('apply_limit')->default(1);
            $table->enum('type', ['percentage', 'fixed'])->nullable();
            $table->integer('value')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
