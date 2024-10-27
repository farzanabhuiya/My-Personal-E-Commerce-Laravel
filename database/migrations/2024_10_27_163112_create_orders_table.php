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
             $table->id();
             $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
             $table->foreignId('customeraddersse_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
             $table->double('subtotal',10,2);
             $table->double('shipping',10,2);
             $table->string('coupon_code')->nullable();
             $table->string('coupon_code_id')->nullable();
             $table->double('discount',10,2)->nullable();
             $table->double('grand_total',10,2);
             $table->enum('payment_status',['paid','not paid'])->default('not paid');
             $table->enum('status',['pending','shipped','delivered'])->default('pending');
             $table->timestamp('shipped_date')->nullable();
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
