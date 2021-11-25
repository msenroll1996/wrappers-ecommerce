@extends('backend.layouts.master')
@section('title')
  List {{$urlTitle}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route("backend.order.pending")}}">
                  Pending Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.order.processing")}}">
                  Processing Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("backend.order.completed")}}">
                  Completed Orders
                </a>
              </li>
</ul>
@endsection
@section('content')


<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
              <div class="card-header">
                <h4 class="card-title"> {{$title}}</h4>
                
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Order No.
                      </th>
                      <th>
                        Customer
                      </th>
                      <th>
                        Total Items
                      </th>
                      <th>
                        Total Price
                      </th>
                      <th>
                        Payment Method
                      </th>
                      <th>
                        Paid
                      </th>
                      <th>
                        Status
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                      <tr>
                          <td>
                            {{$order->order_no}}
                          </td>
                          <td>
                          {{$order->user->first_name.' '.$order->user->last_name }}
                          </td>
                          <td>
                          {{$order->total_quantity}}
                          </td>
                          <td>
                          {{$order->total_price}}
                          </td>
                          <td>
                          {{$order->payment_method}}
                          </td>
                          <td>
                          {{$order->is_paid ? 'Paid' : 'Not Paid'}}
                          </td>
                          <td>
                          {{$order->status}}
                          </td>
                          <!-- <td>
                          @if($order->status == 1){{'Active'}}@else{{'In-active'}}@endif
                          </td> -->
                           <td class="text-right">
                            <a  href="{{route('backend.order.edit',['id' => $order->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;
                            @if($order->status == 'pending')
                            <a onclick="return confirm('Are you sure to decline this order?')" href = "{{route('backend.order.decline',['id' => $order->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection