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
use Validator;
class ShopController extends Controller
{
    public function index(){
    	$posts = Product::all();
      foreach ($posts as  $prod) {
        $img = Product_image::where('product_id',$prod->id)->first();
        $prod->img = $img['thumbnail'];
      }
    	return view('shop.product.index',compact('posts','prod'));
    }
    public function detail($id){
    	$prod = Product::find($id);
      $product_image = Product_image::where('product_id',$id)->get();
      // $images = explode('|', $product_image);
      // dd($image);
      // dd($product_image);
      $qty = Product_detail::where('product_id',$id)->get();
    	$sizeall = Product_detail::where('product_id',$id)->select('size_id')
            ->distinct()->get();
         $colorall = Product_detail::where('product_id',$id)->select('color_id')
            ->distinct()->get();

           $size = array();

           foreach ($sizeall as $key => $value) {
           	$namesize =Size::find($value->size_id);
           	
           	array_push ($size, $namesize);
           }

           $color = array();
           foreach ($colorall as $key => $colo) {
           	$colorname = Color::find($colo->color_id);
           	array_push ($color, $colorname->color);
           }
            // dd($color);

    	return view('shop.product.detail',compact('prod','size','color','product_image','images'));
    }


    public function add2cart(Request $request, $id)
    {
    
      $product = Product::where('id',$id)->first(); 
      $product_detail = Product_detail::where('product_id',$id)->first();
      // dd($request->size);
      $imgcart = Product_image::where('product_id',$id)->first();
      // $size = Size::where('id',$product_detail->size_id);

      $total = Cart::total();
      $cart = Cart::add(['id' => $id, 'name' => $product->name, 'qty' => $request->quantity, 'price' => $product->price, 'options' => ['color'=>$request->color,'size' =>$request->size,'price_sale' => $product->sale_price,'thumbnail' =>$imgcart->thumbnail,'product_detail_id'=>$product_detail->id,'total'=>$total]]);



      return response()->json(['product'=>$product,'cart'=>$cart],200);
      
    }
    public function destroy($id)
    {
        Cart::remove($id);
    }
    public function getid(request $request){
      $idsize = $request->selsize;
      $idproduct = $request->idprod;
      $getid = product_detail::where('product_id',$idproduct)->where('size_id',$idsize)->get();
      // dd($getid);
      $color = array();
      foreach ($getid as  $value) {
        $getcolor = Color::where('id',$value->color_id)->get();
        array_push($color,$getcolor); 
      }
      
      return response()->json(['color'=>$color],200);
    }

    public function getcl(request $request){
      $idsize = $request->selsize;

      $idproduct = $request->idprod;

      $idcolor = $request->idcolor;
      $getquan = Product_detail::where('product_id',$idproduct)->where('size_id',$idsize)->where('color_id',$idcolor)->first();

       return response()->json(['quan'=>$getquan],200);

    }

    public function update(request $request){
      $rowId = $request->rowId;
      $status = $request->status;
      $qty = $request->qty;

      if($status =='-1') {
        if ($qty == 1) {

          Cart::remove($rowId);

          return response()->json(['is_remove' => 1]);
        }
        else{
         Cart::update($rowId, $qty-1);
        }
        
      }
      else{
         Cart::update($rowId, $qty+1);
      }
      

      $product = Cart::get($rowId);
      
      return response()->json(['product'=>$product,'qty'=>$qty+$status,'price'=>$product->price,'carttotal'=>Cart::total()]);
    }



///order
    public function check(){
      
      return view('shop.product.checkout');
    }

    //order

    public function homeonl(request $request){
      $this->validate($request,
        [
            'fullname' => 'required',
            'mobilenum' => 'required',
            'addre' => 'required'
        ]
    );
      $order = new Order;
      $order->code = time().substr( $request->mobilenum, 5, 10 );
      $order->customer_id = 1;
      $order->name = $request->fullname;      
      $order->mobile = $request->mobilenum;
      $order->address = $request->addre;
      $order->total = Cart::total();
      $order->status = 0;
      $order->save();

      foreach (Cart::content() as $cart) {
        $order_detail = new Order_detail;
        $order_detail->order_id = $order->id;
        $order_detail->order_code = $order->code;
        $order_detail->product_id = $cart->id;
        $order_detail->product_detail_id = $cart->options->product_detail_id;
        $order_detail->quantity = $cart->qty;
        $order_detail->total_price = $cart->price;
        $order_detail->user_id = 1;
        $product = Product_detail::where('id',$cart->options->product_detail_id)->first();
        $order_detail->product_code = $product->product_code;
        $order_detail->save();
        Cart::destroy();
      }

      return redirect()->route('home.onl');
    }

}
