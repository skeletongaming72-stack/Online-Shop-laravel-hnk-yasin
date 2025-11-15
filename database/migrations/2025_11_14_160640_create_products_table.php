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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('pic')->nullable();
            $table->string('title');
            $table->string('link');
            $table->string('price');
            $table->string('sku');
            $table->string('count');
            $table->string('material');
            $table->string('weight');
            $table->string('discount_price')->nullable();
            $table->text('description')->nullable();
            $table->text('detail')->nullable();
            $table->string('status')->default('1'); //0 = namojood, 1 = mojood, 2 = anbar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
