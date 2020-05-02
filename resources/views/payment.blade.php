@extends('layouts.shop')
@section('content')
<section class="ftco-section ftco-cart">
    
    <div class="row justify-content-center">
        <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                    <span>Subtotal</span>
                    <span> Rp <?php echo number_format($total) ?> </span>
                </p>
                <p class="d-flex">
                    <span>Courier</span>
                    <span>JNE Reguler</span>
                </p>
                <p class="d-flex">
                    <span>Courier Cost</span>
                    <?php $cost=$courier->rajaongkir->results[0]->costs[1]->cost[0]->value?>
                    <span> Rp <?php echo number_format($cost) ?> </span>
                </p>
                <p class="d-flex">
                    <span>Delivery Time</span>
                    <span> {{$courier->rajaongkir->results[0]->costs[1]->cost[0]->etd}} hari </span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span> Rp <?php echo number_format($cost + $total)?> </span>
                </p>
            </div>
            <p class="text-center"><a href="/transaction/add" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
    </div>

</section>
@endsection