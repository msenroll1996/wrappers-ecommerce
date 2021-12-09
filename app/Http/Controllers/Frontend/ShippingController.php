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
        return view('frontend.checkout.shipping',compact('cart'));
    }

    public function post_shipping(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('frontend.cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
       
        Session::put('shipping_info',$request->all());
        return redirect()->route('frontend.shipping.payment');
      
        //     $order = new Order();
        //     $order->user_id = auth()->id();
        //     $order->total_quantity = $cart->totalQty;
        //     $order->total_price = $cart->totalPrice;
        //     $order->order_no = uniqid(auth()->user()->first_name);
        //     $order->total_quantity = $cart->totalQty;
        //     $order->shipping_first_name = $request->shipping_first_name;
        //     $order->shipping_last_name = $request->shipping_last_name;
        //     $order->shipping_address = $request->shipping_address;
        //     $order->shipping_country = $request->shipping_country;
        //     $order->shipping_street = $request->shipping_street;
        //     $order->shipping_phone = $request->shipping_phone;
        //     $order->shipping_postal_code = $request->shipping_postal_code;
        //     $order->save();

        //     foreach($cart->items as $item){
        //         $order->products()->attach($item['item']->first()->id,['price' => $item['price'],'quantity' => $item['qty']]);
        //     }
           
        // Session::forget('cart');
        
        
        
        // $user->shipping_address = $request->address;
        // $user->shipping_phone = $request->phone;
    
        // $user->save();
    }
    public function payment(){
        if (!Session::has('cart')){
            return redirect()->route('frontend.cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shipping_info = Session::get('shipping_info');
        $pid = uniqid();
        return view('frontend.checkout.payment',compact('shipping_info','cart','pid'));
    }

    public function checkout(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('frontend.cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // if($request->payment_method == 'cod')
        // {
            $shipping_info = Session::get('shipping_info');
            $order = new Order();
            $order->user_id = auth()->id();
            $order->total_quantity = $cart->totalQty;
            $order->total_price = $cart->totalPrice;
            $order->order_no = uniqid(auth()->user()->first_name);
            $order->total_quantity = $cart->totalQty;
            $order->payment_method = $request->payment_method;
            $order->shipping_first_name = $shipping_info['shipping_first_name'];
            $order->shipping_last_name = $shipping_info['shipping_last_name'];
            $order->shipping_address = $shipping_info['shipping_address'];
            $order->shipping_street = $shipping_info['shipping_street'];
            $order->shipping_phone = $shipping_info['shipping_phone'];
            $order->shipping_postal_code = $shipping_info['shipping_postal_code'];
            $order->save();

            foreach($cart->items as $item){
                $order->products()->attach($item['item']->id,['price' => $item['price'],'quantity' => $item['qty']]);
            // }
           
            Session::forget('cart');
            $request->session()->flash('alert-success', 'Order was successful placed!');
            return redirect()->route('frontend.index');
        }
    }
}
