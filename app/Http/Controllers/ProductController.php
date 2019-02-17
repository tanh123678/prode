<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_detail;
use App\Product_image;
use App\Categorie;
use Validator;
class ProductController extends Controller
{
     public function index(){
        return view('admin.user.prod');
    }
    public function prod(){
        $categorie = Categorie::all();
        $product_images = Product_image::all();
        $posts = Product::orderBy('id', 'desc');
        return DataTables()->of($posts)
        ->addColumn('action',function(Product $post){
            return '
            <button class="btn btn-info show-btn" data-id="'.$post->id.'"><i class="fa fa-info-circle"></i></button>
            <button class="btn btn-warning edit-btn" data-id="'.$post->id.'"><i class="fa fa-gear"></i></button>
            <button class="btn btn-danger del-btn" data-id="'.$post->id.'"><i class="fa fa-trash"></i></button>
           <button class="btn btn-danger detail-btn" onclick = "showdetail('.$post->id.')" ><i class="fa fa-plus"></button>';

        })->editColumn('sale_price',function(Product $post){
            return number_format($post->sale_price);
        })->editColumn('id',function(Product $post) use($categorie){
            foreach ($categorie as  $cate) {
                if($cate->id == $post->category_id){
                    return $cate->name;
                }
            }
            
        })->addColumn('thumbnail', function(product $product)use ($product_images){
               foreach ($product_images as $img) {
               
                   if($img->product_id == $product->id){
                    return ' 
                 <img style="width: 100px;height: 100px;" src="'.asset(''.$img->thumbnail.'').'" alt="">';
                 
                }
                   
               }
           })->rawColumns(['thumbnail','action','id'])->toJson();
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
        $validator = Validator::make($request->all(), [
           'code' => 'required|max:10',
           'name' => 'required|max:10',
           'sale_price' => 'required|max:10',
           'price' => 'required|max:10',
           'description' => 'required|max:10'
       ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 500);
        }
        // dd($request->all());
        $product = new Product;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->sale_price =$request->sale_price;
        $product->price =$request->price;        
        $product->description =$request->description;
        $product->slug = $request->name.time();
        $product->category_id = 1;       
        $product->save();

        $files = $request->thumbnail;   
        if ($request->hasFile('thumbnail')) {             
            foreach ($files as  $file) {
             $file->move('upload', $file->getClientOriginalName());
             $path = "upload/" .$file->getClientOriginalName(); 
             $product_images = new Product_image;
             $product_images->product_id = $product->id;
             $product_images->thumbnail = $path;
             $product_images->save();
            }

        }          
        
    return response()->json(['code'=>$product,'name'=>$product,'sale_price' => $product,'price' => $product,'description' =>$product],200);
    }
    

	public function show($id)
	    {
	         $pro = Product::find($id);

	    return response()->json(['data'=>$pro],200);
	   }
	public function destroy($id){
        
     $delprod = Product::find($id)->delete();
     $delprode = Product_detail::where('product_id',$id)->delete();
     return response()->json(['data'=>'removed'],200);
    }

    public function edit($id){
        $duct = Product::find($id);
        $product_detail = Product_detail::where('id','=',$duct->id)->get();
        $product_img = Product_image::where('product_id',$id)->get();
        $img="";
        foreach ($product_img as $key => $ig) {
            $img .='<img src="/'.$ig->thumbnail.'" alt="" style="width: 100px;height: 100px;">';
         };
        return response()->json(['data'=>$duct,'product_detail' => $product_detail,'product_img'=>$product_img,'img'=>$img],200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){

       //   $validator = Validator::make($request->all(), [
       //     'id' => 'required|max:5',
       //     'code' => 'required|min:1',
       //     'name' => 'required|max15',
       //     'sale_price' => 'required|max:10',
       //     'price' => 'required|max:10',
       //     'description' => 'required|max:1000|min:1',
       // ]);
       //  if ($validator->fails()) {
       //      return response()->json(['error' => $validator->errors()], 500);
       //  }
        $ducts = Product::find($request->id);
        $ducts['code'] = $request->code;
        $ducts['name'] = $request->name;
        $ducts['slug'] = str_slug($request->name);
        $ducts['sale_price'] = $request->sale_price;
        $ducts['price'] = $request->price;      
        $ducts['description'] =$request->description;

        $product_images = Product_image::where('product_id',$request->id)->get()->each;
        $product_images->delete();
        $ducts->save();
        if ($request->thumbnailedit) {
            foreach ($request->thumbnailedit as  $file) {
            $file->move('upload', $file->getClientOriginalName());
            $path = "upload/" .$file->getClientOriginalName(); 
             $productimages = new Product_image;
             $productimages->product_id = $ducts->id;
             $productimages->thumbnail = $path;
             $productimages->save();
            };
        }
       return response()->json(['data' =>$ducts],200);
    }
}
