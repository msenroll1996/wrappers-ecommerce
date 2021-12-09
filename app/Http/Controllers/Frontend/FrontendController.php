<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Merchandise;

class FrontendController extends Controller
{
    public function index(){

        $trending_products = Product::where('display_in','trending')->get();
        $best_selling_products = Product::where('display_in','best_selling')->get();
        $new_arrivals = Product::orderBy('id','desc')->take(5)->get();
        $categories = Category::whereNull('parent_id')->get();
        $merchandises = Merchandise::where('status',true)->get();
        return view('frontend.index',compact('best_selling_products','categories','trending_products','new_arrivals','merchandises'));
    }
    public function about_us(){
        return view('frontend.about_us');
    }
    public function how_to_apply(){
        return view('frontend.how_to_apply');
    }
    
}
