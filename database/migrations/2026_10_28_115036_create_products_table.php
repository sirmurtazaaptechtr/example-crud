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
            $table->increments('ProductID');
            $table->string('ProductName', 50)->nullable();
            $table->unsignedInteger('SupplierID')->nullable();
            $table->unsignedInteger('CategoryID')->nullable();
            $table->string('Unit', 25)->nullable();
            $table->decimal('Price', 10, 2)->nullable();
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers')->onDelete('cascade');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
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
