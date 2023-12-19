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
        
        /*  $request->validate([                      
            'title'=>'requird|string',
            'short_desc'=>'nullable|string',
            'price'=>'requird',
            'discount'=>'requird',
            'discount_price'=>'requird',
            'image'=>'image|mimes:png,jpg,jpeg,svg,gif',
            'stock'=>'requird',
            'star'=>'requird',
            'remark'=>'requird',           
        ]); */
    
        // Image Upload
        
        if($request->hasFile('image')){
            $image=$request->file('image');
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
            'image'=>'assets/images/products/'.$fileNameToStore,
            'stock'=>$request->stock,
            'star'=>$request->star,
            'remark'=>$request->remark,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id
        ]);
        return redirect('admin/products')->with('success', 'Product Upload Success!');
          
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
