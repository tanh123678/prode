<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

             $table->string('name')->nullable();
            // chứa id cha 
            $table->tinyInteger('parent_id')->nullable()->comment('chứa id category parent'); 
             // lưu đường dẫn ảnh thu nhỏ của thư mục
            $table->string('thumbnail')->nullable();
            // đường đẫn - name không dấu, và nối liền nhau bằng dấu -
            $table->string('slug')->unique(); 
            // mô tả ngắn cho  danh mục
            $table->mediumText('description')->nullable(); 
            
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
        Schema::dropIfExists('categories');
    }
}
