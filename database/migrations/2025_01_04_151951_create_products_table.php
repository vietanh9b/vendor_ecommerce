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
            $table->uuid('id')->primary();
            $table->string('code', 255);
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');
//            $table->double('price');
            $table->double('min_price');
            $table->double('max_price')->comment('tiền tối đa được giảm');
            $table->enum('condition',['default','new','hot'])->default('default');
            $table->uuid('catelogue_id')->nullable();
            $table->boolean('is_active')->default(true);
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
