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
                            <h4 class="mb-0 font-size-18"> {{__('Orders')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="admin/home"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Orders')}} </li>
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
                                    <div class="col-sm-8">
                                        <div class="text-sm-right">
                                            <a href="/admin/order/add" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> {{__('Add New Order')}} </a>
                                        </div>
                                    </div><!-- end col-->
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th> {{__('Order ID')}} </th>
                                                <th> {{__('Billing Name')}} </th>
                                                <th> {{__('Date')}} </th>
                                                <th> {{__('Total')}} </th>
                                                <th> {{__('Payment Status')}} </th>
                                                <th> {{__('View Details')}} </th>
                                                <th> {{__('Action')}} </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($transactions as $transaction)
                                                
                                                
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id={{ $transaction->id }}>
                                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"> {{ $transaction->id }} </a> </td>
                                                    <td> {{$transaction->name}} </td>
                                                    <td> {{$transaction->date}} </td>
                                                    <td> {{$transaction->price}} </td>
                                                    
                                                    @if($transaction->status == 'paid')
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12"> {{__('Paid')}} </span>
                                                        </td>
                                                    @elseif ($transaction->status == 'canceled')
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-danger font-size-12"> {{__('Canceled')}} </span>
                                                        </td>
                                                    @else 
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-warning font-size-12"> {{__('Pending')}} </span>
                                                        </td>
                                                    @endif

                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                                            {{__('View Details')}}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                    </td>
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



        <!-- Modal -->
        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('Order Details')}} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2"> {{__('Product id:')}} <span class="text-primary">1</span></p>
                        <p class="mb-4"> {{__('Billing Name:')}} <span class="text-primary">Giri Hanbudi</span></p>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap">
                                <thead>
                                    <tr>
                                    <th scope="col"> {{__('Product')}} </th>
                                    <th scope="col"> {{__('Product Name')}} </th>
                                    <th scope="col"> {{__('Price')}} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="/admin/assets/images/product/img-4.png" alt="" class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Kaos distro inplace big logo</h5>
                                                <p class="text-muted mb-0">Rp 120.000</p>
                                            </div>
                                        </td>
                                        <td>Rp 120.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right"> {{__('Sub Total:')}} </h6>
                                        </td>
                                        <td>
                                            Rp 120.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right"> {{__('Shipping:')}} </h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">{{__('Total:')}}</h6>
                                        </td>
                                        <td>
                                            Rp 120.000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{__('Close')}} </button>
                    </div>
                </div>
            </div>
        </div>
@endsection