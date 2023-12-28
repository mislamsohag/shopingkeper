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
        
        $categories=DB::table('categories')->get();
        $brands=DB::table('brands')->get();
        $minPrice=DB::table("products")->min('price');
        $maxPrice=DB::table("products")->max('price');

        // dd($products); product_id
        return view('Pages.Ecom.products', compact('products', 'categories', 'brands', 'minPrice', 'maxPrice'));
    }


    // Single Product Details
   function ProductDetails($id){
      $product=DB::table('products')->where('id', $id)->first();
      $brand=DB::table('brands')->where('id', $product->brand_id)->first();
      $category=DB::table('categories')->where('id', $product->brand_id)->first();

        // dd($product,$brand);
        return view('Pages.Ecom.ecom-product-details', compact('product','brand','category'));
    } 

    public function ProductEditShow($id){
        // $product=DB::select('select * from products where id = ?',[$id]);
        $product=DB::table('products')->where('id', $id)->first();
        // dd($product);
        return view('Pages.Ecom.ecom-edit-product',compact('product'));
    }
    public function ProductUpdate(Request $request, $id){
        // dd($request->all()); 
        
        $request->validate([                      
            'title'=>'required|string',
            'short_desc'=>'nullable|string',
            'price'=>'required',
            'discount'=>'required',
            'discount_price'=>'required',
            'image_1'=>'image|mimes:png,jpg,jpeg,svg,gif',
            'image_2'=>'nullable|image|mimes:png,jpg,jpeg,svg,gif',
            'image_3'=>'nullable|image|mimes:png,jpg,jpeg,svg,gif',
            'image_4'=>'nullable|image|mimes:png,jpg,jpeg,svg,gif',
            'stock'=>'required',
            'color'=>'required|array',            
            'size'=>'required|array',
            'remark'=>'required',           
        ]);
    
        // Image Upload
        
        if($request->hasFile('image_1')){
            $image=$request->file('image_1');
            $fileNameToStore='image-'.md5(uniqid()).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'),$fileNameToStore);
        }
    
        //Update Data to Products table
        DB::table('products')->where('id', $id)->update([
            'title'=>$request->title,
            'short_desc'=>$request->short_desc,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'discount_price'=>$request->discount_price,
            'image_1'=>'assets/images/products/'.$fileNameToStore,
            'image_2'=>'assets/images/products/'.$fileNameToStore,
            'image_3'=>'assets/images/products/'.$fileNameToStore,
            'image_4'=>'assets/images/products/'.$fileNameToStore,
            'stock'=>$request->stock,
            'color'=>$request->color,
            'size'=>$request->size,
            'star'=>$request->star,
            'remark'=>$request->remark,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id
        ]);
        return redirect('admin/products')->with('success', 'Product Upload Success!');
          
        } 
    

    // Single Product Delete/Destroy
    function Destroy($id){
        
        $product=DB::table('products')->where('id', $id)->first();
        $imageRemove=unlink(public_path($product->image_1));
        $imageRemove=unlink(public_path($product->image_2));
        $imageRemove=unlink(public_path($product->image_3));
        $imageRemove=unlink(public_path($product->image_4));
        if($imageRemove){
            DB::table('products')->where('id',$id)->delete();
            return redirect()->back()->with('success', 'Album Deleted Successfully');
        }
        return redirect()->back();
    }
}
