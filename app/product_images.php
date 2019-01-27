<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $table = 'product_images'; 
    protected $fillable = [
            'id',           
            'product_code',
            'product_id',
    		'thumbnail'
    	]; 
}
