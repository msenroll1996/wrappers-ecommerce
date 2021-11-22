<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = Category::whereNull('parent_id')->get();
        
        return view('frontend.index',compact('products','categories'));
    }
    public function about_us(){
        return view('frontend.about_us');
    }
    
}
