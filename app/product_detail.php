<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    protected $table = 'product_detail'; 
    protected $fillable = [
            'id',
            'name',
            'product_id', 
            'product_code',            
    		'quantity', 
    		'color_id',
            'size_id'
    		
    	]; 
    public function Product(){
        return $this->belongsTo('App\products');
    }    
}
