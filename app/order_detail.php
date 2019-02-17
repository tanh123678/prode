<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_detail'; 
    protected $fillable = [
            'id',
            'order_id',
            'order_code',
            'product_id',
            'product_code',
    		'product_detail_id',  
    		'quantity', 
    		'total_price',
    		'user_id'
    	];
}
