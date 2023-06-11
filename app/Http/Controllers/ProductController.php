<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('welcome');
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
}
