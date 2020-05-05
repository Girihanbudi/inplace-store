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
                                <li class="breadcrumb-item active"> Transaction {{$transaction[0]->id}}</li>
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
                                        @if ($transaction[0]->status == 'cancel')
                                            <span class="badge badge-pill badge-soft-danger font-size-12"> {{$transaction[0]->status}} </span>    
                                        @elseif ($transaction[0]->status == 'paid')
                                            <span class="badge badge-pill badge-soft-success font-size-12"> {{$transaction[0]->status}} </span>
                                        @elseif ($transaction[0]->status == 'shipping')
                                            <span class="badge badge-pill badge-soft-primary font-size-12"> {{$transaction[0]->status}} </span>
                                        @elseif ($transaction[0]->status == 'finish')
                                            <span class="badge badge-pill badge-soft-secondary font-size-12"> {{$transaction[0]->status}} </span>
                                        @elseif ($transaction[0]->status == 'pending')
                                            <span class="badge badge-pill badge-soft-warning font-size-12"> {{$transaction[0]->status}} </span>                                        
                                        @endif

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
                                                    <td> Rp <?php echo number_format($detail->total)?> </td>

                                                    <?php 
                                                        $no +=1;
                                                        $subtotal += $detail->total
                                                    ?>
                                                </tr>
                                                @endforeach
                                                
                                                
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
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

    </div>
@endsection