<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcommerceController extends Controller
{
    function Products(){
        $products=DB::table("products")
        ->join('categories','products.category_id','=', 'categories.id')
        ->Join('brands','products.brand_id','=', 'brands.id')
        ->get(); 
        // dd($products); product_id
        return view('Pages.Ecom.ecom-products', compact('products'));
    }

    // Single Product Details
    function ProductDetails(){


        return view('Pages.Ecom.ecom-product-details');
    }

    // ProductDestroy
    function Destroy($id){
        // $product = DB::table('products')->where('id', $id)->first();
        DB::table('products')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Album Deleted Successfully');
    }

    function AddProductShow(){
        return view('Pages.Ecom.ecom-add-product');
    }


    
    //    Product Add
    function ProductStore(Request $request){
    // dd($request->all());
    // $this->validate($request, [
    //     'title'=>'requird|string|max:200',
    //     'short_des'=>'nullable|string|max:500',
    //     'price'=>'requird|number|max:20',
    //     'discount'=>'requird|number|max:10',
    //     'discount_price'=>'requird|number|max:10',
    //     'image'=>'requird|image|mimes:png,jpg,jpeg,svg,gif|max:10000'
    //     'stock'=>'requird|number|max:20',
    //     'star'=>'requird|number|max:20',
    //     'remark'=>'requird|string|max:20',
    //     'category'=>'requird|string|max:20',
    //     'brand'=>'requird|string|max:20',
    // ]);

    // Image Upload
    if($request->hasFile('image')){
        $image=$request->file('image');
        $fileNameToStore='image-'.md5(uniqid()).time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/images/products'),$fileNameToStore);
    }

    //Save Data to Album table
    DB::table('Products')->insert([
        'title'=>$request->title,
        'short_des'=>$request->short_des,
        'price'=>$request->price,
        'discount'=>$request->discount,
        'discount_price'=>$request->discount_price,
        'image'=>'assets/images/products'.$fileNameToStore,
        'stock'=>$request->stock,
        'star'=>$request->star,
        'remark'=>$request->remark,
        // 'category'=>$request->category,
        // 'brand'=>$request->brand,
    ]);
    return redirect()->back()->with('success', 'Product Upload Success!');
    }


    function Orders(){
        return view('Pages.Ecom.ecom-orders');
    }
    function OrderDetails(){
        return view('Pages.Ecom.ecom-order-details');
    }
    function Customers(){
        return view('Pages.Ecom.ecom-customers');
    }
    function ShoppingCart(){
        return view('Pages.Ecom.ecom-cart');
    }
    function Checkout(){
        return view('Pages.Ecom.ecom-checkout');
    }
    function Sellers(){
        return view('Pages.Ecom.ecom-sellers');
    }
    function SellerDetails(){
        return view('Pages.Ecom.ecom-seller-details');
    }
}
