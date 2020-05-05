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
                            <h4 class="mb-0 font-size-18"> {{__('Transactions')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="admin/home"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Transactions')}} </li>
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
                                    {{-- <div class="col-sm-8">
                                        <div class="text-sm-right">
                                            <a href="/admin/order/add" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> {{__('Add New Order')}} </a>
                                        </div>
                                    </div><!-- end col--> --}}
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th> {{__('Order ID')}} </th>
                                                <th> {{__('Billing Name')}} </th>
                                                <th> {{__('Date')}} </th>
                                                <th> {{__('Total')}} </th>
                                                <th> {{__('Bank')}} </th>
                                                <th> {{__('Status')}} </th>
                                                <th> {{__('View Details')}} </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($transactions as $transaction)                                               
                                                
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"> {{ $transaction->id }} </a> </td>
                                                    <td> {{$transaction->name}} </td>
                                                    <td> {{$transaction->date}} </td>
                                                    <td> Rp <?php echo number_format($transaction->price) ?> </td>
                                                    <td> {{$transaction->bank_name}} </td>
                                                    
                                                    @if($transaction->status == 'paid')
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12"> {{__('Paid')}} </span>
                                                        </td>
                                                    @elseif ($transaction->status == 'canceled')
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-danger font-size-12"> {{__('Canceled')}} </span>
                                                        </td>
                                                    @elseif ($transaction->status == 'pending')
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-warning font-size-12"> {{__('Pending')}} </span>
                                                        </td>
                                                    @elseif ($transaction->status == 'shipping')
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-primary font-size-12"> {{__('Shipping')}} </span>
                                                    </td>
                                                    @elseif ($transaction->status == 'finish')
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-secondary font-size-12"> {{__('Finish')}} </span>
                                                    </td>
                                                    @endif

                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <a href="orders/transaction={{$transaction->id}}" class="btn btn-primary btn-sm btn-rounded">
                                                            {{__('View Details')}}
                                                        </a>
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
@endsection