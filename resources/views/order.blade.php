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
                        <?php $total = 0;?>
                        @foreach ($cart_items as $item)                           
                            <tr class="text-center">
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
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    </div>
</section>
@endsection