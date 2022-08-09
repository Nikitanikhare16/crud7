<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store (Request $request){
        $validated = $request->validated([
            'email'=>'required|unique:products',
            'password' =>'required',
        ]);
        $data=new Product();
        $data->email =$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with('message','Data Inserted Successfully');
    }
    public function table(){
        $data=Product::paginate(5);
        return view('table',compact('data'));
    }
    public function edit($id){
        $data=Product::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=Product::find($id);
        $data->email =$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with('message','Data Updated Successfully');
    }
    public function delete($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->route('table');

    }
}
