<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;

        $data->save();
        return redirect()->back();
    }
    public function delete_catagory($id)
    {
        $data=catagory::find($id);
        $data ->delete();
        return redirect()->back();
    }
    public function view_product()
    {
        $catagory=catagory::all();

        return view('admin.product',compact('catagory'));
    }
    public function add_product(Request $request)
    {
      $product=new add_products;  

      $product->title=$request->title;

      $product->description=$request->description;

      $product->price=$request->price;

      $product->quantity=$request->quantity;

      $product->discount_price=$request->dis_price;

      $product->catagory=$request->catagory;
    
      $image=$request->image;
      $image=time().'.'.$image->getClientOriginalExtension();

      $request->image->move('products',$imagename);

      $product->image=$imagename;
      
      $product->save();

      return redirect()->back()->with('message','Product Added Successfully');
    }
    public function show_product()
    {
        return view('admin.show_product');
    }
}
