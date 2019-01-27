<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = 'order_detail'; 
    protected $fillable = [
            'id',
            'order_code',
            'product_code',
            'product_id',
    		'product_detail_id',  
    		'quantity', 
    		'total_price',
    		'user_id'
    	];
}
