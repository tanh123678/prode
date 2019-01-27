<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\products;
class ShopController extends Controller
{
    public function index(){
    	$posts = products::all();
    	return view('shop.product.index',compact('posts'));
    }
}
