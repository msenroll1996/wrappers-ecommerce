<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Orders";
        $this->route = "/admin/orders";
        
        
    }
    public function index(){
        $title = 'Orders';
        $urlTitle = 'Orders';
        $route = "/admin/orders";
        $orders = Order::orderBy('id','desc')->get();
        return view('backend.admin.orders.index',compact('orders','title','route','urlTitle'));
    }

    public function pending(){
        $title = 'Orders';
        $urlTitle = "Pending Orders";
        $route = "/admin/orders";
        $orders = Order::where('status','pending')->orderBy('id','desc')->get();
        return view('backend.admin.orders.index',compact('orders','title','route','urlTitle'));
    }

    public function processing(){
        $title = 'Orders';
        $urlTitle = "Processing Orders";
        $route = "/admin/orders";
        $orders = Order::where('status','processing')->orderBy('id','desc')->get();
        return view('backend.admin.orders.index',compact('orders','title','route','urlTitle'));
    }

    public function completed(){
        $title = 'Orders';
        $urlTitle = "Completed Orders";
        $route = "/admin/orders";
        $orders = Order::where('status','completed')->orderBy('id','desc')->get();
        return view('backend.admin.orders.index',compact('orders','title','route','urlTitle'));
    }

    public function edit($id){

        $order = Order::findorfail($id);
        return view('backend.admin.orders.edit_form',compact('order'),['title' => $this->title,'route' => $this->route]);
        

    }

    public function process(Request $request,$id){
        $order = Order::findorfail($id);
        $order->status = 'processing';
        $order->save();
        $request->session()->flash('alert-success', 'Order was successfully processed to ship.');
        return redirect()->route('backend.order.processing');
    }

    public function complete(Request $request,$id){
        $order = Order::findorfail($id);
        $order->status = 'completed';
        $order->save();
        $request->session()->flash('alert-success', 'Order successfully completed.');
        return redirect()->route('backend.order.completed');
    }
    public function decline(Request $request,$id){
        $order = Order::findorfail($id);
        $order->status = 'decline';
        $order->save();
        $request->session()->flash('alert-success', 'Order successfully declined.');
        return redirect()->route('backend.order.pending');
    }
}
