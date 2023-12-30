<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EcomController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductUploadController;

Route::get("/", [HomeController::class, "Home"])->name('home');
Route::get("/home", [HomeController::class, "Home"])->name('home');


Route::group(["prefix" => "admin"], function () {    
    Route::get("/", [HomeController::class, "Home"]);
    Route::get("/analytics", [DashboardController::class, "DashboardAnalytics"])->name('dashboard.analytics'); 


    // Add Brands
    Route::view('/brand-add', 'Pages.Ecom.add-brand');

    //Ecommarce Rotues
    Route::get("/add-product", [ProductUploadController::class, "AddProductShow"])->name('add-product');    
    Route::post("/add-product", [ProductUploadController::class, "ProductStore"])->name('product-store');
        
    // Products Show
    Route::get("/products", [ProductsController::class, "Products"])->name('products');
    // Product Details Show
     Route::get("/product-details/{id}", [ProductsController::class, "ProductDetails"])->name('product.details');
    // Edit Product Show
    Route::get("/product-edit/{id}", [ProductsController::class, "ProductEditShow"])->name('product.edit');
    // Update Product
    Route::post("/product-update/{id}", [ProductsController::class, "ProductUpdate"])->name('product.update');
    
     // product Delete
    Route::delete("/product-destroy/{id}", [ProductsController::class, "Destroy"])->name('product.destroy');




    Route::get("/orders", [EcomController::class, "Orders"])->name('orders');
    Route::get("/order-details", [EcomController::class, "OrderDetails"])->name('order-details');
    Route::get("/customers", [EcomController::class, "Customers"])->name('customers');
    Route::get("/shopping-cart", [EcomController::class, "ShoppingCart"])->name('shopping-cart');
    Route::get("/checkout", [EcomController::class, "Checkout"])->name('checkout');
    Route::get("/sellers", [EcomController::class, "Sellers"])->name('sellers');
    Route::get("/seller-details", [EcomController::class, "SellerDetails"])->name('seller-details');
    


    // Login Page
    Route::get("/login", [LoginController::class, "Login"])->name('login');
    Route::POST("/login", [LoginController::class, "LoginPost"])->name('login.post');
    
    //SignUp Page
    Route::get("/sign-up", [SignUpController::class, "SignUp"])->name('sign-up');
    Route::POST("/sign-up", [SignUpController::class, "SignUpPost"])->name('sign-up.post');
    Route::get("/logout", [LogoutController::class, "Logout"])->name('logout');
    // Route::get("/logout", [LogoutController::class, "LogoutDestroy"])->name('logout');


   
    // Forms single file upload
    Route::get("/single-upload", [ProductUploadController::class, "SingleShow"])->name('single.show');
    Route::post("/single-upload", [ProductUploadController::class, "SingleUpload"])->name('single.upload');
    
    // Forms multiple file upload
    Route::get("/multiple-upload", [ProductUploadController::class, "MultipleShow"])->name('multiple.show');
    Route::post("/multiple-upload", [ProductUploadController::class, "MultipleUpload"])->name('multiple.upload');

    


});