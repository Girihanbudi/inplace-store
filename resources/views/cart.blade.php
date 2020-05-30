@extends('layouts.shop')
@section('content')
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total = 0;
                            $carts_id = [];
                        ?>
                        @if (!empty($cart_items))
                            @foreach ($cart_items as $item)                           
                            <tr class="text-center">
                                <?php 
                                    array_push($carts_id, $item->id)                                     
                                ?>
                                <td class="product-remove"><a href="/cart/discard/cartID={{$item->id}}&quantity={{$item->quantity}}&infoID={{$item->info_id}}"><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url(/shopresource/winkel/images/product-8.jpg);"></div></td>
                                
                                <td class="product-name">
                                    <h3> {{$item->name}} </h3>
                                    <p> {{$item->describe}} </p>
                                </td>
                                
                                <td class="price"> Rp <?php echo number_format($item->price)?> </td>
                                
                                <td class="quantity"> {{$item->quantity}} </td>
                                
                                <td class="total"> Rp <?php echo number_format($item->price * $item->quantity) ?> </td>

                                <?php $total += $item->price * $item->quantity;?>
                            </tr><!-- END TR-->
                            @endforeach 
                        @else 
                            <td>
                                <a href="/shop"><h4>Cart is empty! Shop Now </h4></a>
                                
                            </td>
                        @endif                        
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
   
        <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">

                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Courier</span>
                        <span>JNE Reguler</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery Time</span>
                        <span> {{$courier->rajaongkir->results[0]->costs[1]->cost[0]->etd}} days </span>
                    </p>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span> Rp <?php echo number_format($total) ?> </span>
                    </p>
                    <p class="d-flex">
                        <span>Courier Cost</span>
                        <?php $cost=$courier->rajaongkir->results[0]->costs[1]->cost[0]->value?>
                        <span> Rp <?php echo number_format($cost) ?> </span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <?php $total = $cost + $total?>
                        <span> Rp <?php echo number_format($total)?> </span>
                    </p>
                </div>
                <?php
                    $user_id = Auth::User()->id;
                    $destination = $courier->rajaongkir->destination_details->city_id
                ?>
                <p class="text-center"><a href="/payment/user_id={{$user_id}}&destination={{$destination}}&price={{$cost}}&total={{$total}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                    
            </div>
        </div>

    </div>
</section>
@endsection