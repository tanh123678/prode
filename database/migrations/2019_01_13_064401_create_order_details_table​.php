<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable​ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->string('order_id');

            $table->string('order_code');

             // tiêu đề bài viết
            $table->integer('product_id')->unsigned();

            $table->string('product_code');

            $table->integer('product_detail_id')->unsigned();

            $table->integer('quantity')->unsigned();

             $table->integer('total_price')->unsigned();
           
            $table->integer('user_id')->unsigned(); 
        
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
         Schema::dropIfExists('order_detail');
    }
}
