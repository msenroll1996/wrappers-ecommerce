<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $title = 'Orders';
        $route = "/admin/orders";
        $orders = Order::all();
        return view('backend.admin.orders.index',compact('orders','title','route'));
    }
}
