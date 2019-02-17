<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $table = 'product_images'; 
    protected $fillable = [
            'id',           
            'product_id',
    		'thumbnail'
    	]; 
}
