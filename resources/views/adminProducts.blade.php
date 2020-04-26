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
                            <h4 class="mb-0 font-size-18"> {{__('Products')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Products')}} </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Filter</h4>

                                <div>
                                    <h5 class="font-size-14 mb-3">Clothes</h5>
                                    <ul class="list-unstyled product-list">
                                        <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> T-shirts</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Shirts</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Jeans</a></li>
                                        <li><a href="#"><i class="mdi mdi-chevron-right mr-1"></i> Jackets</a></li>
                                    </ul>
                                </div>
                                <div class="mt-4 pt-3">
                                    <h5 class="font-size-14 mb-3">Price</h5>
                                    <input type="text" id="pricerange">
                                </div>

                                <div class="mt-4 pt-3">
                                    <h5 class="font-size-14 mb-3">Discount</h5>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck1">
                                        <label class="custom-control-label" for="productdiscountCheck1">Less than 10%</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck2">
                                        <label class="custom-control-label" for="productdiscountCheck2">10% or more</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck3" checked>
                                        <label class="custom-control-label" for="productdiscountCheck3">20% or more</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck4">
                                        <label class="custom-control-label" for="productdiscountCheck4">30% or more</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck5">
                                        <label class="custom-control-label" for="productdiscountCheck5">40% or more</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="productdiscountCheck6">
                                        <label class="custom-control-label" for="productdiscountCheck6">50% or more</label>
                                    </div>
                                </div>

                                <div class="mt-4 pt-3">
                                    <h5 class="font-size-14 mb-3">Customer Rating</h5>
                                    <div>
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="productratingCheck1">
                                            <label class="custom-control-label" for="productratingCheck1">4 <i class="bx bx-star text-warning"></i>  & Above</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="productratingCheck2">
                                            <label class="custom-control-label" for="productratingCheck2">3 <i class="bx bx-star text-warning"></i>  & Above</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="productratingCheck3">
                                            <label class="custom-control-label" for="productratingCheck3">2 <i class="bx bx-star text-warning"></i>  & Above</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="productratingCheck4">
                                            <label class="custom-control-label" for="productratingCheck4">1 <i class="bx bx-star text-warning"></i></label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-9">
                            
                        <div class="row mb-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="mt-2">
                                    <h5>Clothes</h5>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                    <div class="search-box mr-2">
                                        <div class="position-relative">
                                            <input type="text" class="form-control border-0" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills product-view-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                    </ul>
                                    
                                    
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products as $product)
                            
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="product-img position-relative">
                                                <div class="avatar-sm product-ribbon">
                                                    <span class="avatar-title rounded-circle  bg-primary">
                                                        - 25 %
                                                    </span>
                                                </div>
                                                <img src="/adminresource/assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="mt-4 text-center">
                                                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark"> {{$product->name . ' - '. $product->color . ' ('.$product->size.')'}} </a></h5>
                                                @php
                                                    $count = $product->rating / 100 * 5 //5 STAR
                                                    // if ($count > 5) $count = 5
                                                @endphp                          

                                                <p class="text-muted">
                                                    @for ($i=0; $i < 5; $i++)
                                                        @if ($i < $count)
                                                            <i class="bx bxs-star text-warning"></i>
                                                        @else
                                                            <i class="bx bx-star text-warning"></i>
                                                        @endif

                                                    @endfor
                                                <span>{{' ' . $product->quantity . ' left' }}</span>

                                                </p>
                                            <h5 class="my-0"><span class="text-muted mr-2"><del> {{'Rp '. $product->price}} </del></span> <b> {{'Rp '. ($product->price - $product->price * 0.25)}} </b></h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                            @endforeach
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    {{ $products->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

@endsection