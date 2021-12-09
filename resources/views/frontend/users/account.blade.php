@extends('frontend.layouts.master')

    @section('content')
    <main class="site__main">
        <section class="site__default uk-padding uk-padding-remove-horizontal ">
                <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
                        <div class="uk-width-1-1 uk-width-2-3" id="first_view">
                                <h1 class="uk-h2">My Account</h1>
                                <hr>
                                <h3 class="uk-h2">Order History</h3>
                                @if($orders->isEmpty())
                                        <p>You haven't placed any orders yet.</p>

                                @else
                                
                                <div class="order-history" style="margin-bottom: 30px">
                                        <div class="uk-overflow-auto">
                                        <table class="uk-table uk-table-small uk-table-justify uk-table-striped site__add-to-cart__table">
                                            <thead>
                                                <tr>
                                                    <th>Products</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Total</th>
                                                    <th>Order Placed Date</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach($orders as $order)
                                                        @foreach($order->products as $product )
                                                        <tr>
                                                    <td>
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="">
                                                                <a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}"><img src="{{ url( 'storage/'.$product->first_image ) }}" class="h-full" alt="{{$product->name}}"></a>
                                                            </div>
                                                            <div class="">
                                                                <div class="product-title"><a href="{{route('frontend.product.single_product',['slug' => $product->slug])}}">{{$product->name}}</a></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{$product->pivot->quantity}}
                                                    </td>
                                                    <td>
                                                        Rs. {{$product->selling_price}}
                                                    </td>
                                                    <td>
                                                        <strong>Rs. {{$product->pivot->price}}</strong>
                                                    </td>
                                                    

                                                    <td>
                                                        <span> {{$order->created_at}}</span>
                                                    </td>
                                                    <td>
                                                        <span> {{$order->status}}</span>
                                                    </td>
                                                   
                                                </tr>
                                                        @endforeach
                                                    @endforeach

                                                    
                                                
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                @endif
                                <div class="account-detail">
                                        <h2 class="uk-h2">Account Details</h2>
                                        <p>Welcome {{$user->first_name}}</p>
                                        <p>Koteshwor</p>
                                        <p>Kathmandu</p> <br>
                                        <p>0977</p>
                                        <p>Nepal</p>
                                        <p>98452-98035</p>
                                </div>
                                <button id="view_address" class="uk-button uk-button-secondary">View Address(1)</button>

                        </div>
                        <div class="uk-width-1-1 uk-width-2-3" style="display: none;" id="second_view">
                                <h1 class="uk-h2">My Account</h1>
                                <button type="button" id="open_add_new_address" class="uk-button uk-button-secondary">Add new address</button> <br><br>
                                <a href="#" id="open_first_view" class="uk-text-secondary" style="text-decoration: underline;">Return to Account Details</a>
                                <div class="order-history" style="margin-bottom: 30px">
                                </div>
                                <div class="add-new-address" style="display: none;" id="new_address">
                                        <h2 class="uk-h2">Add New Address</h2>
                                        <hr>
                                        <form action="" class="uk-width-1-1 uk-width-1-3@l uk-form-stacked">
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="first_name">First Name</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="first_name" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="last_name">Lastt Name</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="last_name" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="company">Company</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="company" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="address1">Address1</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="address1" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="address2">Address2</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="address2" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="city">City</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="city" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="city">Country</label>
                                                        <div class="uk-form-controls">
                                                                <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                                                        <select id="country" name="sort">
                                                                                <option value="1">Neapl</option>
                                                                                <option value="2">India</option>
                                                                        
                                                                        </select>
                                                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: chevron-down"></span>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="province">Province</label>
                                                        <div class="uk-form-controls">
                                                                <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                                                        <select id="province" name="sort">
                                                                                <option value="1">Bagmati Province</option>
                                                                                <option value="2">Karnali Province</option>
                                                                        
                                                                        </select>
                                                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: chevron-down"></span>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="postal">Postal/Zip Code</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="Postal" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="phone">Phone</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="phone" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                        <label><input class="uk-checkbox" type="checkbox"> Set as default address</label>
                                                </div>
                                                <div class="uk-margin">
                                                        <button type="button" class="uk-button uk-button-secondary">Add Address</button>
                                                        <button class="uk-text-link" id="cancle_new_address" style="border: none; background: transparent; padding: 0 0 0 10px; cursor: pointer;">Cancel</button>
                                                </div>
                                        </form>
                                </div>
                                <div class="order-history" style="margin-bottom: 30px">
                                </div>
                                <div class="account-detail" style="margin-bottom: 30px;">
                                        <h2 class="uk-h2">Customer Address Book</h2>
                                        <p>{{$user->first_name}}</p>
                                        <p>Koteshwor</p>
                                        <p>Kathmandu</p>
                                        <p>0977</p>
                                        <p>Nepal</p>
                                        <p>98452-98035</p><br>
                                        <button id="open_edit_view" class="uk-button uk-button-secondary" style="margin-right: 10px;">Edit</button>
                                        <button id="remove" class="uk-button uk-button-secondary">Remove</button>
                                </div>
                                <div class="edit-address" style="display: none;" id="edit_address">
                                        <h2 class="uk-h2">Edit Address</h2>
                                        <hr>
                                        <form action="" class="uk-width-1-1 uk-width-1-3@l uk-form-stacked">
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="first_name">First Name</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="first_name" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="last_name">Lastt Name</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="last_name" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="company">Company</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="company" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="address1">Address1</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="address1" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="address2">Address2</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="address2" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="city">City</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="city" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="city">Country</label>
                                                        <div class="uk-form-controls">
                                                                <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                                                        <select id="country" name="sort">
                                                                                <option value="1">Neapl</option>
                                                                                <option value="2">India</option>
                                                                        
                                                                        </select>
                                                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: chevron-down"></span>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="province">Province</label>
                                                        <div class="uk-form-controls">
                                                                <div class="uk-w-full uk-flex-1@l" style="margin-left: 10px;" uk-form-custom="target: > * > span:first-child">
                                                                        <select id="province" name="sort">
                                                                                <option value="1">Bagmati Province</option>
                                                                                <option value="2">Karnali Province</option>
                                                                        
                                                                        </select>
                                                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: chevron-down"></span>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="postal">Postal/Zip Code</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="Postal" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-width-1-1 ">
                                                        <label class="uk-form-label" for="phone">Phone</label>
                                                        <div class="uk-form-controls">
                                                                <input class="uk-input" id="phone" type="text" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                        <label><input class="uk-checkbox" type="checkbox"> Set as default address</label>
                                                </div>
                                                <div class="uk-margin">
                                                        <button type="button" class="uk-button uk-button-secondary">Update Address</button>
                                                        <button class="uk-text-link" id="cancel_edit_view" style="border: none; background: transparent; padding: 0 0 0 10px; cursor: pointer;">Cancel</button>
                                                </div>
                                        </form>
                                </div>

                        </div>
                </div>
        </section>
</main>
    @endsection