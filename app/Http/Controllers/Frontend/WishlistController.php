<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index(){
        $product_ids = Wishlist::where('user_id',auth()->user()->id)->get('product_id');
        $wishlist_products = Product::whereIn('id',$product_ids)->get();
        return view('frontend.users.wishlist',compact('wishlist_products'));
    }

    public function add_wishlist(Request $request){
        $product_id = $request->product_id;
        $user_id = auth()->user()->id;
        $wishlist = Wishlist::where('product_id',$product_id)->get();
        if($wishlist->isEmpty()){
            Wishlist::create(['user_id' => $user_id,'product_id' => $product_id]);
        }
        return redirect()->route('frontend.wishlist.index');

    }

    public function remove(Request $request){
        $product_id = $request->product_id;
        $user_id = auth()->user()->id;
        Wishlist::where(['user_id' => $user_id,'product_id' => $product_id])->delete();
        return redirect()->route('frontend.wishlist.index');


    }
}
