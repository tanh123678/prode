<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable​ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code')->unique();
             // tiêu đề bài viết
            $table->integer('customer_id')->unsigned();

            $table->integer('mobile')->unsigned();

            $table->string('address');

            $table->integer('total')->unsigned();

            // ảnh thu nhỏ của bài viết
            $table->integer('user_id')->nullable();

            $table->integer('status');
             
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
        Schema::dropIfExists('order');
    }
}
