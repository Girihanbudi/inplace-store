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
                        <th>Date</th>
                        <th>Total Purchase</th>
                        <th>Status</th>
                        <th>View Detail</th>
                        </tr>
                    </thead>
                    <tbody>
              
                        @foreach ($transactions as $transaction)
                            <tr class="text-center">
                                
                                <td class="product-remove"><a href=""><span class="ion-ios-close"></span></a></td>
                                                            
                                <td class="price"> {{$transaction->date}} </td>
                                
                                <td class="quantity"> Rp <?php echo number_format($transaction->total_purchase) ?> </td>
                                @if ($transaction->status == 'pending')
                                    <td class="total"> Waiting For Payment </td>
                                @elseif ($transaction->status == 'shipping')
                                <td class="total"> Shipping </td>
                                @endif

                                <td ><a href="/order/detail/{{$transaction->id}}">View Transaction</a></td>

                            </tr>
                            <!-- END TR-->
                        @endforeach                                      
                                           
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    </div>
</section>
@endsection