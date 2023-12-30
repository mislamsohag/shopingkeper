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
            $table->string('short_desc',500);
            $table->integer('price');
            $table->integer('discount');
            $table->integer('discount_price');
            $table->string('image');
            $table->integer('stock');
            $table->integer('star');
            $table->enum('remark', ['popular', 'new', 'top', 'special', 'tranding', 'regular']);

            //F-key
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            //Relation
            $table->foreign('category_id')->references('id')->on('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('brand_id')->references('id')->on('brands')->restrictOnDelete()->cascadeOnUpdate();
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        
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
