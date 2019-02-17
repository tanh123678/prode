<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Order_detail;
use App\User;
use App\Product;
use App\Color;
use App\Size;
use App\Product_detail;
use App\Product_image;
class StatisController extends Controller
{
    public function indexx(){
    	return view('admin.thongke.statistic');
    }

    public function statistic(){
    	$products = Product::all();
    	foreach ($products as $prod) {
    		$quantity = Order_detail::where('product_id',$prod->id)->sum('quantity');
    		$prod->qtt = $quantity;
    	}
    	$array = collect($products)->sortBy('qtt')->reverse()->take(5)->toArray();

    	// return view('admin.thongke.statistic',compact('products','array'));
				$details = Product_detail::all();
				$products = Product::all();
				$colors = Color::all();
				$sizes = Size::all();
				$newOrder = count(Order::where('status',0)->get()); // 1
				$currentMonth = date('m');
				$currentDay = date('d');
				$totalOrder = count(DB::table('order')->whereMonth('created_at', $currentMonth)->where('status',1)->get()); //2
				// dd($totalOrder);
				$totalMonth = number_format(DB::table('order')->whereMonth('created_at', $currentMonth)->sum('total'));//3
				$totalDay = number_format(DB::table('order')->whereDay('created_at', $currentDay)->sum('total'));//4

				
				
				return view('admin.thongke.statistic',
					compact(
						'newOrder',"totalOrder",'totalDay','totalMonth','Products','array'));
	}


public function index()
	{
		
	}
}