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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->unsignedInteger('CustomerID')->nullable();
            $table->unsignedInteger('EmployeeID')->nullable();
            $table->dateTime('OrderDate')->nullable();
            $table->unsignedInteger('ShipperID')->nullable();
            $table->foreign('CustomerID')->references('CustomerID')->on('customers')->onDelete('cascade');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees')->onDelete('cascade');
            $table->foreign('ShipperID')->references('ShipperID')->on('shippers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
