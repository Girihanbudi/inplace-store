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
                            <h4 class="mb-0 font-size-18"> {{__('Shipping Orders')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="admin/home"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Shipping Orders')}} </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box mr-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th> {{__('Order ID')}} </th>
                                                <th> {{__('Billing Name')}} </th>
                                                <th> {{__('Shipping Date')}} </th>
                                                <th> {{__('Courier')}} </th>
                                                <th> {{__('Destination')}} </th>
                                                <th> {{__('Shipment Cost')}} </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($transactions as $transaction)                                               
                                                
                                                <tr>
                                                    <td> {{ $transaction->id }} </td>
                                                    <td> {{$transaction->name}} </td>
                                                    <td> {{$transaction->date}} </td>
                                                    <td> JNE Reguler </td>
                                                    <td> {{$transaction->destination}} </td>
                                                    <td> Rp <?php echo number_format($transaction->price) ?> </td>                                                
                                                    <td>  </td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <ul class="pagination pagination-rounded justify-content-end mb-2">
            {{ $transactions->links() }}
        </ul>        
@endsection