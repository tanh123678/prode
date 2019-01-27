<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    protected $table = 'product_detail'; 
    protected $fillable = [
            'id',
            'product_id',             
    		'quantity', 
    		'price',
    		'color_id',
            'size'
    		
    	]; 
    public function products(){
        return $this->belongsTo('App\products');
    }    
}
