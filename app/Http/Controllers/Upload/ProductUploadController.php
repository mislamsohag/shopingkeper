<?php

namespace App\Http\Controllers\Upload;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductUploadController extends Controller
{
    function AddProductShow(){
        return view('Pages.Ecom.ecom-add-product');
    }
    
      //    Product Add
      function ProductStore(Request $request){

        // dd($request->all()); 
        
        /* $request->validate([                      
            'title'=>'requird|string',
            'short_desc'=>'nullable|string',
            'price'=>'requird|number',
            'discount'=>'requird',
            'discount_price'=>'requird',
            'image'=>'requird|image|mimes:png,jpg,jpeg,svg,gif',
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
    
        //Save Data to Album table
        DB::table('products')->insert([
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
        return redirect()->back()->with('success', 'Product Upload Success!');
         
        }
}
