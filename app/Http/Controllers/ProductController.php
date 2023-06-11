<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products=Product::latest()->paginate(5);
        return view('welcome',compact('products'));
    }


    //add product
    public function addProduct(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:products',
            'price'=>'required',
        ],
    [
        'name.required'=>'Name is Required',
        'name.unique'=>'Product All ready exsist',
        'price.required'=>'Price Required'
    ]);

    $product= new Product();
    $product->name=$request->name;
    $product->price=$request->price;
    $product->save();
    return response()->json([
        'status'=>'success',
    ]);
    }


    public function updateProduct(Request $request)
    {

        $request->validate([

            'u_name'=>'required|unique:products,name,'.$request->u_id,
            'u_price'=>'required'
        ],
        [
            'u_name.required'=>'Name is Required',
            'u_price.unique'=>'Product All ready Exsist',
            'u_price.required'=>'Price is Required',
        ]);
        
       $pro= Product::where('id',$request->u_id)->update([
            'name'=>$request->u_name,
            'price'=>$request->u_price,
        ]);
        return response()->json(['status'=>'success']);
    }
}
