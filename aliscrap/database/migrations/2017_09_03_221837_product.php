<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('link',1000);
            $table->integer('user_id');
            $table->string('page_id');
             $table->text('name');
             $table->text('description');
             $table->string('image',1000);
             $table->string('keywords',1000);
             $table->double('price');
             $table->string('site_name');
             $table->string('priceCurrency');
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
