<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EcomController extends Controller
{  

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
