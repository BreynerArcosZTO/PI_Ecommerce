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
        Schema::table('addresses', function (Blueprint $table) {
            // Agregar columnas que faltan
            if (!Schema::hasColumn('addresses', 'payment_method')) {
                $table->string('payment_method', 50)->nullable();
            }
            if (!Schema::hasColumn('addresses', 'status')) {
                $table->string('status', 50)->default('pending');
            }
            if (!Schema::hasColumn('addresses', 'order_data')) {
                $table->json('order_data')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            if (Schema::hasColumn('addresses', 'payment_method')) {
                $table->dropColumn('payment_method');
            }
            if (Schema::hasColumn('addresses', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('addresses', 'order_data')) {
                $table->dropColumn('order_data');
            }
        });
    }
};
