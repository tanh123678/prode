<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order'; 
    protected $fillable = [
            'id',
            'code',
    		'customer_id',  
    		'mobile', 
    		'address',
            'total',
    		'user_id',
    		'status'
    	];
}
