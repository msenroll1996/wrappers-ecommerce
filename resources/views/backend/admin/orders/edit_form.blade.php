<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('backend.layouts.master')
@section('title')
  View {{$title}}
@endsection
@section('search')
<!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.product.index")}}">
                  List Product
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.product.add")}}">
                  Add Product
                </a>
              </li>
</ul> -->
@endsection
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Order Details</h5>
              </div>
              <hr>
              <div class="card-body">
                <p><b>Order No.:</b> {{$order->order_no}}</p>
                <p><b>Customer Name:</b> {{$order->user->first_name.' '.$order->user->last_name}}</p>
                <p><b>Customer Phone:</b> {{$order->user->phone}}</p>
                <p><b>Total Ordered Quantity:</b> {{$order->total_quantity}}</p>
                <p><b>Total Amount:</b> {{$order->total_price}}</p>
                <p><b>Payment Method:</b> {{$order->payment_method}}</p>
                <p><b>Paid Status:</b> {{$order->is_paid == true ? 'Paid' : 'Unpaid'}}</p>
                <p><b>Ship To:</b> {{$order->shipping_first_name.' '.$order->shipping_last_name}}</p>
                <p><b>Shipping Address: </b>{{$order->shipping_address}}</p>
                <p><b>Shipping Street: </b>{{$order->shipping_street}}</p>
                <p><b>Shipping Phone: </b>{{$order->shipping_phone}}</p>
              </div>
            </div>
                      <div class="row">
                        @if($order->status == 'pending')
                        <div class="col-md-4">
                          <button class="btn btn-secondary btn-block" onclick="window.location.href = '{{route('backend.order.process',['id' => $order->id])}}'">Process this order</button>
                        </div>
                        <div class="col-md-4">
                          <button type = "button" class="btn btn-primary btn-block" onclick="javascript:confirmDelete({{$order->id}})" route = "{{route('backend.order.decline',['id' => $order->id])}}" id = "decline{{$order->id}}">Decline this order</button>
                        </div>
                        @endif
                        @if($order->status == 'processing')
                        <div class="col-md-4">
                          <button class="btn btn-secondary btn-block" onclick="window.location.href = '{{route('backend.order.complete',['id' => $order->id])}}'">Complete this order</button>
                        </div>
                        @endif

                      </div>
                    </div>
          
          
          <div class="col-md-6">
            <div class="card card-user">
              <div class="image">
              <h4 style = "text-align:center">Order Item Details</h4>
              </div>
              <div class="card-body">
                <div class="author">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Product
                      </th>
                      <th>
                        Quantity
                      </th>
                      <th class="text-right">
                        Price
                      </th>
                     
                    </thead>
                    <tbody>
                      @foreach($order->products as $product)
                      <tr>
                        <td>
                          {{$product->name}}
                        </td>
                        <td>
                        {{$product->pivot->quantity}}
                        </td>
                        
                        <td class="text-right">
                        {{$product->pivot->price}}
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
                
              </div>
              <hr>
              <!-- <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div> -->
            </div>
          </div>
          
        </div>
    </div>
    @section('script')

      <script src="{{ URL::asset('backend/assets/js/main.js')}}"></script>
      @endsection
@endsection
