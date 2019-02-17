<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_detail;
use App\Size;
use App\Color;
use App\Product;
use Validator;
class ProdeController extends Controller
{
    public function index($prod_id){
    	// $prode = product_detail::where('product_id',$prod_id)->get();
    	
    	return view('admin.user.prode',compact('prode')); 
    }
    public function prode($prod_id){
    	$posts = Product_detail::where('product_id',$prod_id)->orderBy('id','desc');
        $sizes = Size::all();
        $colors = Color::all();

        return DataTables()->of($posts)
        ->addColumn('action',function(Product_detail $post){
            return '
            <button class="btn btn-warning edit-prod-btn" data-id="'.$post->id.'"><i class="fa fa-gear"></i></button>
            <button class="btn btn-danger del-prod-btn" data-id="'.$post->id.'"><i class="fa fa-trash"></i></button>';
        })
            ->editColumn('size_id',function(Product_detail $post) use ($sizes){
                // return $post->sizename;
                foreach ($sizes as  $size) {
                    if( $size->id == $post->size_id){
                        return $size->name;
                    }
                }

        })
            ->editColumn('color_id',function(Product_detail $post) use($colors){
                // return $post->colorname;
                foreach ($colors as  $color) {
                    if( $color->id == $post->color_id){
                        return $color->name;
                    }
                }
        })
        ->rawColumns(['action'])->toJson();
    }


    public function store(Request $request){

            $validator = Validator::make($request->all(), [
           'quantity' => 'required|max:10'
            ]);
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors()], 500);
            }   

            $old = Product_detail::where('product_id',$request->product_id)->where('color_id',$request->color_id)->where('size_id',$request->size_id)->first();
            $i=time();
            if(isset($old->id)){
                $old->quantity +=$request->quantity;
                $old->save();
                $prode = new Product_detail;
                $prode->product_id = $old->product_id;
                $prode->product_code = $old->product_code;
                $prode->quantity = $old->quantity;
                $prode->size_id = $old->size_id;
                $prode->color_id =  $old->color_id;
            }else{
                $prode = new Product_detail;
                $prode->product_id = $request->product_id;
                $prode->product_code = 'XL00'.substr( $i, -4 ).$request->product_id;
                $prode->quantity = $request->quantity;
                $prode->size_id = $request->size_id;
                $prode->color_id =  $request->color_id;
                $prode->save();
            }     
        return response()->json(['product_id'=>$prode,'quantity'=>$prode,'size_id' =>$prode,'color_id' => $prode],200);
    }

    public function edit($id){
        $ducte = Product_detail::find($id);
        $size = Size::where('id',$ducte->size_id)->first();
        $color = Color::where('id',$ducte->color_id)->first();

    return response()->json(['data'=>$ducte, 'size' =>$size, 'color' =>$color],200);
    }

    public function update(Request $request, $id){
            $validator = Validator::make($request->all(), [
           'quantity' => 'required|max:10'
            ]);
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors()], 500);
            }   
        $ductes = Product_detail::find($id);

        $ductes->id = $request->id;
        $ductes->quantity = $request->quantity;     
        $ductes->save();
       return response()->json(['data' =>$ductes],200);
    }
    public function destroy($id){
        
     $delprod = Product_detail::find($id)->delete();
     return response()->json(['data'=>'removed'],200);
    }
}
