<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
     protected $table = 'color'; 
    protected $fillable = [
            'id',
    		'color',  
    		'name'
    	];
}
