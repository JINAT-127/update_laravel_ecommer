<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('products_id');
            $table->foreignId('category_id');
            $table->foreignId('slider_id');
            $table->foreignId('sub_category_id');
            $table->foreignId('brand_id');
            $table->char('products_name',100);
            $table->decimal('price',10,2);
            $table->decimal('previous_price',10,2);
            $table->string('photo',100);
            $table->longText('description');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
