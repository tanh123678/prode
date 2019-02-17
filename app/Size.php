<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes'; 
    protected $fillable = [
            'id',  
    		'name'
    	];
}
