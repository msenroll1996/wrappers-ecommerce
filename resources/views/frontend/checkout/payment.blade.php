@extends('frontend.layouts.master')

@section('content')

<main class="site__main">
    <!-- Default page -->
    <section class="site__default site__add-to-cart uk-padding uk-padding-remove-horizontal ">
        <div class="uk-container-expand uk-padding uk-padding-remove-vertical">
            <div class="site__add-to-cart__header uk-text-center">
                <h1>Payment</h1>
            </div>
            <div class="uk-flex-center@l" uk-grid>
                <div class="uk-width-1-1 uk-width-1-2@l">
                    <div class="payment-method-wrapper">
                        <div class="shipping-information">
                            <div class="uk-overflow-auto">
                                <table class="uk-table uk-table-divider uk-table-striped uk-table-small">
                                    <caption>Shipping Contact Information</caption>
                                    <tbody>
                                        <tr>
                                            <th>Contact</th>
                                            <td>example@email.com</td>
                                        </tr>
                                        <tr>
                                            <th>Ship to</th>
                                            <td>Your Address</td>
                                        </tr>
                                        <tr>
                                            <th>Item Name</th>
                                            <td>Product Name</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>Rs. 1,100.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                <hr class="uk-divider-icon">
                        <div class="payment-methods">
                            <article>
                               <div class="uk-h3">
                                   Payment Methods
                               </div> 

                            </article>
                            <form action="">
                                <p>Choose Your Payment Method</p>
                                <div uk-grid>
                                    <div class="uk-width-1-3">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label class="uk-block">E-Sewa</label><br>
                                                <label><input class="uk-radio" type="radio" value="esewa" name="pay"> <img src="{{asset('assets/image/esewa.png')}}" width="40" alt=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label>Khalti</label><br>
                                                <label><input class="uk-radio" type="radio" value="khalti" name="pay"> <img src="{{asset('assets/image/khalti.png')}}" width="40" alt=""></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="uk-h3">Biling address</div>
                                <p>Select the address that matches your card or payment method. </p>
                                <div uk-grid>
                                    <div class="uk-width-1-1 uk-width-1-3@l">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label><input class="uk-radio" type="radio" name="sipping-address"> Same as shipping address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-1-3@l">
                                        <div class="gateway">
                                            <div class="uk-form-controls uk-form-controls-text">
                                                <label><input class="uk-radio" type="radio" name="sipping-address"> Use a different billing address</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="uk-divider-icon">
                                <div class="button-group" style="margin-top: 30px;">
                                    <a href="#" class="uk-button uk-button-large uk-button-primary" style="margin-right: 10px; margin-bottom: 10px">Proceed to Checkout</a>
                                    <a href="#" class="uk-button uk-button-large uk-button-secondary" style="margin-bottom: 10px">Continue Shopping</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection