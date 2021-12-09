<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $title = 'Our Products';
        $products = Product::all();
        return view('frontend.collection',compact('products','title'));
    }
    public function single_product(Request $request){

        $single_product = Product::where('slug',$request->slug)->get();
        $user_id = auth()->user()->id ?? 0;
        $wishlist = Wishlist::where('user_id',$user_id);
        $isWishlist = $wishlist->where('product_id',$single_product->first()->id);
        if($isWishlist->count() > 0){
            $isWishlist = true;
        }else{
            $isWishlist = false;
        }
        $new_arrivals = Product::orderBy('id','desc')->take(5)->get();

        return view('frontend.single_product',compact('single_product','isWishlist','new_arrivals'));
    }
    public function pages(Request $request){

        $category = Category::where('slug',$request->page)->get();
        $title = $category->first()->name;
        $products = Product::whereIn('category_id',$category->first()->child_categories->pluck('id'))->get();
        $child_categories = Category::where('parent_id',$category->first()->id)->get();
        return view('frontend.category',compact('child_categories','products','title'));

    }

    public function collections(Request $request){

        $category = Category::where('slug',$request->page)->get();
        $title = $category->first()->name;
        $products = Product::where('category_id',$category->first()->id)->get();
        return view('frontend.collection',compact('products','title'));
    }
    public function all(Request $request){

        $category = Category::where('slug',$request->page)->get();
        $title = $category->first()->name;
        $products = Product::where('category_id',$category->first()->id)->get();
        return view('frontend.collection',compact('products','title'));
    }
}
