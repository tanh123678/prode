<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Color;
use App\Size;
use App\Product_detail;
use App\Product_image;
use App\Order;
use App\Order_detail;
use Gloudemans\Shoppingcart\Facades\Cart;
class OrderController extends Controller
{
   
    // public function __construct()
    // {
    //     $this->middleware('admin.auth');
    // }
     public function index()
    {
        return view('admin.user.order');
    }
    public function getlist(){
        
            $order = Order::orderBy('id','desc');
            return datatables()->of($order)
            ->addColumn('action' ,function(order $order){
                return ' 
                <a class="btn btn-danger btn-delete-user" href="'.asset('admin/delorder/'.$order->code.'').'">delete</a>';
            })->editColumn('status',function(order $order){
            	if($order->status ==0){
            		return '<td><a href="'.asset('admin/procorder/'.$order->code.'').'" class="btn btn-success fa fa-wheelchair"></a></td>';
            	}elseif ($order->status ==1) {
            		return '<td><a  class="btn btn-info fa fa-check-square-o"></a></td>';
            	}
            
        })->rawColumns(['status','action'])->toJson();                                    
    }

    public function proc($id){
        $order = Order::where('code',$id)->first();
        // dd($order);
    	$orDetails = Order_detail::where('order_code',$id)->get();
    	$tDetails = Product_detail::all();
    	$products = Product::all();  
    	// $pDetails[];
    	foreach($orDetails as $value){
    		$pDetails[$value->product_detail_id] = $value->product_detail_id; 
    	}
    	// dd($pDetails);
    	$sizes = Size::all();
    	$colors = Color::all();
    	return view('admin.user.process',compact('orDetails','sizes','colors','pDetails','tDetails','products','order'));
    }
    public function confirm($id){
        $order = Order::where('code',$id)->first();
        $order->status = 1;
        $orDetails = Order_detail::where('order_code',$id)->get();
        foreach ($orDetails as $key => $orDetail) {
            $product_detail = Product_detail::where('id' , $orDetail->product_detail_id)->get();
            foreach ($product_detail as $key => $detail) {
                $detail->quantity = $detail->quantity-$orDetail->quantity;
            
            $detail->save();
            }
            
        }
        $order->save();
        
        return view('admin.user.order');

    }
    public function delorder($id){
        $order = Order::where('code',$id)->delete();
        $order_de = Order_detail::where('order_code',$id)->delete();
        return view('admin.user.order');
    }
}
