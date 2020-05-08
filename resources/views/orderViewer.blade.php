@extends('layouts.shop')
@section('content')
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">

            <div class="row">
                <p class="col-md-2"> Transaction ID </p>
                <p class="col-md-5"><b> {{$transactions[0]->id}} </b></p>
            </div>
            <div class="row">
                <p class="col-md-2"> Status </p>
                <p class="col-md-5"><b> {{$transactions[0]->status}} </b></p>
            </div>
            <div class="row">
                <p class="col-md-2"> Date </p>
                <p class="col-md-5"><b> {{$transactions[0]->date}} </b></p>
            </div>
            <br>
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        </tr>
                    </thead>

                    <?php 
                        $total = 0;
                    ?>

                    <tbody>
                        @foreach ($details as $detail)
                            <tr class="text-center">                             
                                <td class="image-prod"><div class="img" style="background-image:url(/shopresource/winkel/images/product-8.jpg);"></div></td>
                                <td class="price"> {{$detail->name}} </td>                                
                                <td class="quantity"> Rp <?php echo number_format($detail->price) ?> </td>
                                <td class="total"> {{$detail->quantity}} </td>
                                <td class="total"> Rp <?php echo number_format($detail->price * $detail->quantity) ?> </td>
                            </tr>
                            <!-- END TR--> 
                            <?php $total += $detail->price * $detail->quantity;?>
                        @endforeach                                 
                                           
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
                @if ($transactions[0]->status == 'shipping')
                    <p class="text-center"><a href="/order/finish/{{$transactions[0]->id}}" class="btn btn-primary py-3 px-4">Confirm Item Received</a></p>
                @elseif ($transactions[0]->status == 'pending')
                    <p class="text-center"><a href="/payment/user_id={{$user_id}}&destination={{$destination}}&price={{$cost}}&total={{$total}}" class="btn btn-primary py-3 px-4">Help For Payment</a></p>
                @endif
                
                    
            </div>
        </div>

    </div>
</section>
@endsection