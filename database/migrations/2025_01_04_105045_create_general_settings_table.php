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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 40)->nullable();
            $table->string('cur_text', 40)->nullable()->comment('currency text');
            $table->string('cur_sym', 40)->nullable()->comment('currency symbol');
            $table->decimal('fixed_commission', 28, 8)->nullable();
            $table->decimal('parcent_commission', 28, 8)->nullable();
            $table->longText('access_token');
            $table->tinyInteger('upload_approval')->nullable()->comment('check = 0,
not check = 1');
            $table->string('email_from', 40)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_body')->nullable();
            $table->string('sms_from')->nullable();
            $table->string('base_color', 40)->nullable();
            $table->string('secondary_color', 40)->nullable();
            $table->text('mail_config')->nullable()->comment('email configuration');
            $table->text('sms_config')->nullable();
            $table->text('global_shortcodes')->nullable();
            $table->boolean('kv')->default(false);
            $table->boolean('ev')->default(false)->comment('email verification, 0 - dont check, 1 - check');
            $table->boolean('en')->default(false)->comment('email notification, 0 - dont send, 1 - send');
            $table->boolean('sv')->default(false)->comment('mobile verication, 0 - dont check, 1 - check');
            $table->boolean('sn')->default(false)->comment('sms notification, 0 - dont send, 1 - send');
            $table->boolean('force_ssl')->default(false);
            $table->boolean('maintenance_mode')->default(false);
            $table->boolean('secure_password')->default(false);
            $table->boolean('agree')->default(false);
            $table->boolean('registration')->default(false)->comment('0: Off	, 1: On');
            $table->string('active_template', 40)->nullable();
            $table->text('system_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
