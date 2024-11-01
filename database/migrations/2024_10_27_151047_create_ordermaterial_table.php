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
        Schema::create('ordermaterial', function (Blueprint $table) {
            $table->unsignedBigInteger('materialId');
            $table->unsignedBigInteger('orderId');
            $table->foreign('materialId')->references('id')->on('materials')->onDelete('cascade');
            $table->foreign('orderId')->references('Work_order_number')->on('order')->onDelete('cascade');
            $table->integer('Percentage');
            $table->date('Finished_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordermaterial');
    }
};
