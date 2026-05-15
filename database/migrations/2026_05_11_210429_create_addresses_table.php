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
        if (Schema::hasTable('addresses')) {
            return;
        }

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('recipient_name');
            $table->string('phone', 20);
            $table->string('country');
            $table->string('department');
            $table->string('city');
            $table->string('postal_code')->nullable();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->text('reference')->nullable();
            $table->string('payment_method', 50);
            $table->string('status', 50)->default('pending');
            $table->json('order_data')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
