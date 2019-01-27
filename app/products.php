<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products'; 
    protected $fillable = [
            'id',
            'slug',
            'code',
    		'name',  
    		'description', 
    		'sale price',
    		'category_id',
    		'view_count'
    	]; 
    public function product_detail(){
        return $this->hasmany('App\product_detail');
    }    
}
