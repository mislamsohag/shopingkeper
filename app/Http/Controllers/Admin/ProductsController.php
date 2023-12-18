<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    // Product Show
    function Products(){
        $products=DB::table("products")        
        ->join('categories','products.category_id','=', 'categories.id') 
        ->select('products.*', 'categories.categoryName')       
        ->get(); 
        // dd($products); product_id
        return view('Pages.Ecom.ecom-products', compact('products'));
    }


    // Single Product Details
   function ProductDetails($id){
       /*  $product=DB::table('products')->where('id', $id)->first();
        $imageRemome=unlink(public_path($product->image));
        if($imageRemome){
            DB::table('products')->where('id',$id)->delete();
            return redirect()->back()->with('success', 'Album Deleted Successfully');
        }
        return redirect()->back(); */
        return view('Pages.Ecom.ecom-product-details');
    } 


    // Single Product Delete/Destroy
    function Destroy($id){
        // $product = DB::table('products')->where('id', $id)->first();
        $product=DB::table('products')->where('id', $id)->first();
        $imageRemove=unlink(public_path($product->image));
        if($imageRemove){
            DB::table('products')->where('id',$id)->delete();
            return redirect()->back()->with('success', 'Album Deleted Successfully');
        }
        return redirect()->back();
    }
}
