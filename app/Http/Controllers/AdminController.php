<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Validator;
class AdminController extends Controller
{
    public function index()
    {
        \Carbon\Carbon::setlocale('vi');
         $admins = Admin::orderBy('id','desc')->paginate(5);
        
        
        return view('admin.user.admin_list', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
           'name' => 'required|max:20',
           'email' => 'required|max:35',
           'password' => 'required|max:15',
       ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 500);
        }
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email =$request->email;
        $admin->password =bcrypt($request->password);
        $admin->save();
    return response()->json(['name'=>$admin,'email' => $admin,'password' =>$admin],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $admin = Admin::find($id);

    return response()->json(['data'=>$admin],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

    return response()->json(['data'=>$admin],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
           'name' => 'required|max:20',
           'email' => 'required|max:35',
       ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 500);
        }

        $admin = Admin::where('id', $id)->first();
        $admin->name = $request->name;
        $admin->password =bcrypt($request->password);
        if ($admin->email == $request->email) {               
            $admin->save();
            return response()->json(['data' =>$admin],200);
        }elseif ($request->email != $admin->email) {
            $admin->email = $request->email;
            $admin->save();
            return response()->json(['data' =>$admin],200);
        }       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
     $deladmin = Admin::find($id)->delete();
     return response()->json(['data'=>'removed'],200);
    }

   
}