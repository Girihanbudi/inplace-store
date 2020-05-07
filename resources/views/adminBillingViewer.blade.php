@extends('layouts.admin')
@section('content')
        <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18"> {{__('Transaction Viewer')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin/home"> Main </a></li>
                                    <li class="breadcrumb-item"><a href="/admin/orders"> Transactions </a></li>
                                    <li class="breadcrumb-item active"> Manage Order {{$transaction[0]->id}}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4 text-center"> Buyer Information </h4>
                        
                                <div class="col-12 text-center">     
                                    <img src="/adminresource/assets/images/users/2.jpg" alt="" style="width: 30%" class="img-fluid img-thumbnail rounded-circle">
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row"> {{__('Full Name ')}} </th>
                                                <td> {{$user[0]->name}} </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Email')}} </th>
                                                <td> {{$user[0]->email}} </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Gender')}} </th>
                                                @if ($user[0]->is_mail = 1)
                                                    <td> {{__('Male')}} </td>
                                                @elseif ($user[0]->is_mail = 2)
                                                    <td> {{__('Female')}} </td>
                                                @else
                                                    <td> {{__('Not Set')}} </td>
                                                @endif                        
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Address ')}} </th>
                                                <td> {{$user[0]->address}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4 text-center"> Courier Information </h4>
 
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row"> {{__('Origin')}} </th>
                                                <td> <?php echo $courier->rajaongkir->origin_details->city_name ?> ( <?php echo $courier->rajaongkir->origin_details->province?> ) </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Destination')}} </th>
                                                <td>
                                                    <div>
                                                        <p class="text-truncate"> {{$user[0]->address}} </p>
                                                        <p><?php echo $courier->rajaongkir->destination_details->city_name ?> ( <?php echo $courier->rajaongkir->destination_details->province?> )</p>
                                                    </div>
                                                    
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Courier')}} </th>
                                                <td> JNE Reguler </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Cost (live)')}} </th>
                                                <td> Rp <?php echo number_format($courier->rajaongkir->results[0]->costs[1]->cost[0]->value) ?> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> {{__('Delivery')}} </th>
                                                <td> {{$courier->rajaongkir->results[0]->costs[1]->cost[0]->etd}} days </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4"> Transaction </h4>

                                <div class="modal-body">
                                    <p class="mb-2"> {{__('Transaction id:')}} <span class="text-primary font-size-12">{{$transaction[0]->id}}</span></p>
                                    <p class="mb-4"> {{__('Billing Name:')}} <span class="text-primary font-size-12"> {{$user[0]->name}} </span></p>
                                    <p class="mb-4"> {{__('Status:')}} 
                                        <span class="badge badge-pill badge-soft-warning font-size-12"> {{$transaction[0]->status}} </span>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">{{__('Color')}} </th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    $subtotal = 0;
                                                ?>
                                                @foreach ($details as $detail)
                                                <tr>
                                                    <td> {{$no}} </td>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-truncate font-size-14"> {{$detail->name}} </h5>
                                                            <p class="text-muted mb-0"> Rp <?php echo number_format($detail->price)?>  x {{$detail->quantity}}</p>
                                                        </div>
                                                    </td>
                                                    <td> {{$detail->color}} </td>
                                                    <td> {{$detail->size}} </td>
                                                    <td> Rp <?php echo number_format($detail->price * $detail->quantity)?> </td>

                                                    <?php 
                                                        $no +=1;
                                                        $subtotal += $detail->price * $detail->quantity
                                                    ?>
                                                </tr>
                                                @endforeach
                                                
                                                <?php $total_payment = $subtotal + $shipment[0]->price?>

                                                <tr>
                                                    <td colspan="4">
                                                        <h6 class="m-0 text-right">Sub Total:</h6>
                                                    </td>
                                                    <td>
                                                        Rp <?php echo number_format($subtotal)?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <h6 class="m-0 text-right">Shipping:</h6>
                                                    </td>
                                                    <td>
                                                        Rp <?php echo number_format($shipment[0]->price) ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <h6 class="m-0 text-right">Total:</h6>
                                                    </td>
                                                    <td>
                                                        Rp <?php echo number_format($subtotal + $shipment[0]->price)?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#confirm">Confirm Payment</button>
                                        <a href="/admin/orders/billing" class="btn btn-secondary" >Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Confirm Payment -->
                    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteTitle">Confirm Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/admin/billing/accept" method="GET">                                                
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="user_id" name="user_id" value="{{$user[0]->id}}">
                                        <input type="hidden" id="transaction_id" name="transaction_id" value="{{$transaction[0]->id}}">
                                        <input type="hidden" id="total_payment" name="total_payment" value="{{$total_payment}}">

                                        <div class="form-group row">
                                            <label for="bank_name" class="col-md-4 col-form-label">Bank Name</label>
                                            <div class="col-md-6">
                                                <input class="form-control" id="bank_name" name="bank_name" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="bank_account" class="col-md-4 col-form-label">Bank Account</label>
                                            <div class="col-md-6">
                                                <input class="form-control" id="bank_account" name="bank_account" type="text" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Confirm</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
@endsection