<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\product_detail;
class ProductController extends Controller
{
     public function index(){
        return view('admin.user.prod');
    }
    public function prod(){
        $posts = products::orderBy('id', 'desc');
        return DataTables()->of($posts)
        ->addColumn('action',function(products $post){
            return '
            <button class="btn btn-info show-btn" data-id="'.$post->id.'"><i class="fa fa-american-sign-language-interpreting"></i></button>
            <button class="btn btn-warning edit-btn" data-id="'.$post->id.'"><i class="fa fa-gear"></i></button>
            <button class="btn btn-danger del-btn" data-id="'.$post->id.'"><i class="fa fa-bitbucket-square"></i></button>
           <button class="btn btn-danger detail-btn" onclick = "showdetail('.$post->id.')" ><i class="fa fa-hand-spock-o"></button>';

        })->editColumn('sale_price',function(products $post){
            return number_format($post->sale_price);
        })->rawColumns(['action'])->toJson();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new products;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->sale_price =$request->sale_price;
        $product->description =$request->description;
        $product->slug = $request->name.time();
        $product->category_id = 1;       
        $product->save();
    
    return response()->json(['code'=>$product,'name'=>$product,'sale_price' => $product,'description' =>$product],200);
    }
    

	public function show($id)
	    {
	         $pro = products::find($id);

	    return response()->json(['data'=>$pro],200);
	   }
	public function destroy($id){
        
     $delprod = products::find($id)->delete();
     $delprode = product_detail::where('product_id',$id)->delete();
     return response()->json(['data'=>'removed'],200);
    }

    public function edit($id){
        $duct = products::find($id);

    return response()->json(['data'=>$duct],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $ducts = products::find($id);
        $ducts->code = $request->code;
        $ducts->name = $request->name;
        $ducts->sale_price = $request->sale_price;
        $ducts->description =$request->description;    
        $ducts->save();
       return response()->json(['data' =>$ducts],200);
    }

}
