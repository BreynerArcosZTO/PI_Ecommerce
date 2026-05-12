<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('inventory')) {
            return;
        }

        Schema::create('inventory', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')
                ->unique()
                ->constrained('products')
                ->cascadeOnDelete();

            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('min_stock')->default(0);
            $table->unsignedInteger('max_stock')->nullable();

            $table->timestamps();

            $table->index('product_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
