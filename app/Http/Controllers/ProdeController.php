<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_detail;

class ProdeController extends Controller
{
    public function index($prod_id){
    	// $prode = product_detail::where('product_id',$prod_id)->get();
    	
    	return view('admin.user.prode',compact('prode')); 
    }
    public function prode($prod_id){
  // dd($prod_id);
    	$posts = product_detail::where('product_id',$prod_id)->get();
        return DataTables()->of($posts)
        ->addColumn('action',function(product_detail $post){
            return '
            <button class="btn btn-warning edit-prod-btn" data-id="'.$post->id.'"><i class="fa fa-gear"></i></button>
            <button class="btn btn-danger del-prod-btn" data-id="'.$post->id.'"><i class="fa fa-bitbucket-square"></i></button>';

        })->editColumn('price',function(product_detail $post){
            return number_format($post->price);
        })->editColumn('quantity',function(product_detail $post){
            return number_format($post->quantity);
        })->rawColumns(['action'])->toJson();
    }
    public function store(Request $request){
        $prode = new product_detail;
        $prode->product_id = $request->product_id;
        $prode->quantity = $request->quantity;
        $prode->price =$request->price;
        $prode->size =$request->size;
        $prode->color_id = $request->color_id;       
        $prode->save();
        return response()->json(['product_id'=>$prode,'quantity'=>$prode,'price' => $prode,'size' =>$prode,'color_id' => $prode],200);
    }

    public function edit($id){
        $ducte = product_detail::find($id);

    return response()->json(['data'=>$ducte],200);
    }

    // public function update(Request $request, $id){

    //     $ductes = product_detail::find($id);
    //     $ductes->product_id = $request->product_id;
    //     $ductes->quantity = $request->quantity;
    //     $ductes->price = $request->price;
    //     $ductes->size =$request->size;
    //     $ductes->color_id =$request->color_id;        
    //     $ductes->save();
    //    return response()->json(['data' =>$ducts],200);
    // }
    public function destroy($id){
        
     $delprod = product_detail::find($id)->delete();
     return response()->json(['data'=>'removed'],200);
    }
}
