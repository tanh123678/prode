<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order'; 
    protected $fillable = [
            'id',
            'code',
    		'customer_id',
            'name',  
    		'mobile', 
    		'address',
            'total',
    		'user_id',
    		'status'
    	];
}
