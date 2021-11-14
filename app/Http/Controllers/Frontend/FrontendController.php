<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.index',compact('products'));
    }
    public function about_us(){
        return view('frontend.about_us');
    }
    
}
