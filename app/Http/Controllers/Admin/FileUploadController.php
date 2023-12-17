<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
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
