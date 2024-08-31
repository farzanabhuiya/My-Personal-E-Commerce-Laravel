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
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('shipping_returns')->nullable();
            $table->text('related_products')->nullable();
            $table->string('image');
            $table->double('price',10,2);
            $table->double('compare_price',10,2)->nullable();
            $table->foreignId('categorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subcategorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('item_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->enum('is_featured',['Yes','No'])->default('No');
            $table->string('sku');
            $table->string('barcode')->nullable();
            $table->enum('track_qty',['Yes','No'])->default('Yes');
            $table->integer('qty')->nullbale();
            $table->boolean('status')->default(1);
            $table->double('discount_amount',10,2)->nullable();
            $table->enum('discount_type',['percent','fixed'])->default('percent');
            $table->double('offer_amount',10,2)->nullable();
            $table->enum('offer_type',['percent','fixed'])->default('percent');
            $table->foreignId('productsize_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('productcolour_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
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
