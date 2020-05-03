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
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
              
                                      
                            <tr class="text-center">
                                <td class="product-remove"><a href=""><span class="ion-ios-close"></span></a></td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url(/shopresource/winkel/images/product-8.jpg);"></div></td>
                                
                                <td class="product-name">
                                    <h3> asdf</h3>
                                    <p> asdf </p>
                                </td>
                                
                                <td class="price"> Rp asdf </td>
                                
                                <td class="quantity"> asdf </td>
                                
                                <td class="total"> shipped </td>


                            </tr><!-- END TR-->
               
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    </div>
</section>
@endsection