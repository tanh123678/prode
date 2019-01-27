<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable​ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->unique();

            $table->string('code')->unique();

            $table->string('name')->index();

            $table->mediumText('description')->nullable(); 

            $table->integer('sale_price')->nullable();
 
             // id của danh mục mà bài viết đang đứng
            $table->integer('category_id')->unsigned();
           // đếm lượt xem bài viết
            $table->integer('view_count')->default(0);
 

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
