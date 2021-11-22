<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Session;
use App\Models\Cart;

class ShippingController extends Controller
{
    public function index(){
        if (!Session::has('cart')){
            Session::put('empty_cart','Cart is Empty');
            return redirect()->route('frontend.cart.index');

        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.checkout.shipping');
    }

    public function post_shipping(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('frontend.cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
      
            $order = new Order();
            $order->user_id = auth()->id();
            $order->total_quantity = $cart->totalQty;
            $order->total_price = $cart->totalPrice;
            $order->order_no = uniqid(auth()->user()->first_name);
            $order->total_quantity = $cart->totalQty;
            $order->shipping_first_name = $request->shipping_first_name;
            $order->shipping_last_name = $request->shipping_last_name;
            $order->shipping_address = $request->shipping_address;
            $order->shipping_country = $request->shipping_country;
            $order->shipping_street = $request->shipping_street;
            $order->shipping_phone = $request->shipping_phone;
            $order->shipping_postal_code = $request->shipping_postal_code;
            $order->save();

            foreach($cart->items as $item){
                $order->products()->attach($item['item']->first()->id,['price' => $item['price'],'quantity' => $item['qty']]);
            }
           
        Session::forget('cart');
        
        
        
        // $user->shipping_address = $request->address;
        // $user->shipping_phone = $request->phone;
    
        // $user->save();
    }
}
