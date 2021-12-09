<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(){
        $best_selling_products = Product::where('display_in','best_selling')->get();

        if (!Session::has('cart')){
            return view('frontend.cart',compact('best_selling_products'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.cart',['products' => $cart->items,'totalPrice' => $cart->totalPrice,'best_selling_products' => $best_selling_products]);
    }
    public function add_to_cart(Request $request){
        
        $product = Product::find($request->id);
        $qtyToIncreaseBy = $request->qtyToIncreaseBy;

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id,$qtyToIncreaseBy);
        // $img = $cart->items[$product->id]['item'];
        // $img_src = $img->img ?? $img->image_url;
        // if($img_src == null){
        //     $img_src = "https://images.onlineaushadhi.com/img/no-med.png";
        // }
        $request->session()->put('cart',$cart);
        return response()->json(['cart' => $cart,'url' => route('frontend.cart.index')]);
    }

    public function reduceByOne(Request $request)
    {
        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($request->id);
        if (count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
            return response()->json(['route' => "/cart"]);

        }
        $cart = Session::get('cart');
        if(array_key_exists($request->id,$cart->items)){
            $qty = $cart->items[$request->id]['qty'];
            $price = $cart->items[$request->id]['price'];
            $totalPrice = $cart->totalPrice;
            return response()->json(['cart' => $cart,'price' => $price,'qty' => $qty,'totalPrice' => $totalPrice]);
        }else{
            return response()->json(['route' => "/cart"]);
        }

    }

    public function addByOne(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($request->id);
        Session::put('cart',$cart);
        $cart = Session::get('cart');
            $qty = $cart->items[$request->id]['qty'];
            $price = $cart->items[$request->id]['price'];
            $totalPrice = $cart->totalPrice;
            return response()->json(['cart' => $cart,'price' => $price,'qty' => $qty,'totalPrice' => $totalPrice]);

    }

    public function remove(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($request->id);
        if (count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');

        }

     return response()->json(['route' => "/cart"]);
    }
}
