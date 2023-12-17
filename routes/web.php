<?php


use App\Http\Controllers\Auth\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Admin\DashboardController;

Route::get("/", [HomeController::class, "Home"])->name('home');
Route::get("/home", [HomeController::class, "Home"])->name('home');




Route::group(["prefix" => "admin"], function () {    
    Route::get("/", [HomeController::class, "Home"]);
    Route::get("/analytics", [DashboardController::class, "DashboardAnalytics"])->name('dashboard.analytics'); 




    //Ecommarce Rotues
    Route::get("/add-product", [EcommerceController::class, "AddProductShow"])->name('add-product');    
    Route::post("/add-product", [EcommerceController::class, "ProductStore"])->name('product-store');
        
    
    Route::get("/products", [EcommerceController::class, "Products"])->name('products');
    // Single Product Show
    Route::get("/product-details", [EcommerceController::class, "ProductDetails"])->name('product-details');

    // Single product Deleta
    Route::delete("/product", [EcommerceController::class, "Destroy"])->name('product-destroy');




    Route::get("/orders", [EcommerceController::class, "Orders"])->name('orders');
    Route::get("/order-details", [EcommerceController::class, "OrderDetails"])->name('order-details');
    Route::get("/customers", [EcommerceController::class, "Customers"])->name('customers');
    Route::get("/shopping-cart", [EcommerceController::class, "ShoppingCart"])->name('shopping-cart');
    Route::get("/checkout", [EcommerceController::class, "Checkout"])->name('checkout');
    Route::get("/sellers", [EcommerceController::class, "Sellers"])->name('sellers');
    Route::get("/seller-details", [EcommerceController::class, "SellerDetails"])->name('seller-details');
    


 // Login Page
 Route::get("/login", [LoginController::class, "Login"])->name('login');
 Route::POST("/login", [LoginController::class, "LoginPost"])->name('login.post');
 
 //SignUp Page
 Route::get("/sign-up", [SignUpController::class, "SignUP"])->name('sign-up');
 Route::POST("/sign-up", [SignUpController::class, "SignUP"])->name('sign-up');




   
    // Forms single file upload
    Route::get("/single-upload", [FileUploadController::class, "SingleShow"])->name('single.show');
    Route::post("/single-upload", [FileUploadController::class, "SingleUpload"])->name('single.upload');
    
    // Forms multiple file upload
    Route::get("/multiple-upload", [FileUploadController::class, "MultipleShow"])->name('multiple.show');
    Route::post("/multiple-upload", [FileUploadController::class, "MultipleUpload"])->name('multiple.upload');

    


});