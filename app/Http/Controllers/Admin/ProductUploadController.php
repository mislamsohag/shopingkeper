<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductUploadController extends Controller
{
    function AddProductShow(){
        $categories=DB::table('categories')->get();
        $brands=DB::table('brands')->get();

        return view('Pages.Ecom.ecom-add-product', compact('categories', 'brands'));
    }
    
      //    Product Add
      function ProductStore(Request $request){

        // dd($request->all()); 
        
        $request->validate([                      
            'title'=>'required|string',
            'short_desc'=>'nullable|string',
            'price'=>'required',
            'discount'=>'nullable',
            'discount_price'=>'nullable',
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
    
        //Save Data to Album table
        Product::create([
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
            'sizes'=>$request->sizes,
            'colors'=>$request->colors,
            'star'=>$request->star,
            'remark'=>$request->remark,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id
        ]);
        return redirect()->back()->with('success', 'Product Upload Success!');
         
        }







        // Image Or Files Uploadin Process

        public function SingleShow()
    {
        return view("Pages.Forms.forms-single-uploads");
    }
    public function SingleUpload(Request $request)
    {
        // dd($request);
        // dd($request->image->getClientOriginalName());
        // dd($request->image->getClientOriginalExtension());
        // dd($request->image->getSize());
        // dd($request->image->getMimeType()); //কিধরনের ফাইল
        // dd($request->image->isValid()); //ফাইল আপলোড হয়েছে কিনা?

        // Validation
        $this->validate($request, [
            "image" => 'required|image|mimes:jpeg,jpg,png,svg,gif|max:2048'
        ]);

        // Image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageStore = 'photo-' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            // dd($imageStore);
            $image->move(public_path('assets/images'), $imageStore);
        }
        return redirect()->back(); //এটার মাধ্যমে পুনরায় একই যায়গায় বেক করা।
    }


    //Multiple Image Uploade
    public function MultipleShow()
    {
        return view("Pages.Forms.forms-multiple-uploads");
    }

    public function MultipleUpload(Request $request)
    {
        // images Validation
        $this->validate($request, [
            "images" => "required",
            "images.*" => "image|mimes:jpeg,jpg,png,svg,gif|max:2048"
        ]);


        // images Uploding
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $fileToStore = 'multiple-photo-' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
                
                // dd($imageStore);
                $image->move(public_path('assets/images'), $fileToStore);
            } 
        }
        return redirect()->back(); //এটার মাধ্যমে পুনরায় একই যায়গায় বেক করা।
    }
}
