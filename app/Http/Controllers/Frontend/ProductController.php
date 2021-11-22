<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;

class ProductController extends Controller
{
    public function index(){
        return view('frontend.product');
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

        return view('frontend.single_product',compact('single_product','isWishlist'));
    }
}
