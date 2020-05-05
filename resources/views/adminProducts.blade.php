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
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        - 25 %
                                                    </span>
                                                </div>
                                                <img src="/shopresource/winkel/images/product-8.jpg" alt="" class="img-fluid mx-auto d-block">
                                            </div>

                                            <div class="mt-4 text-center">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#add-{{$product->info_id}}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus font-size-18"></i></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-{{$product->info_id}}" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#delete-{{$product->info_id}}" class="btn btn-danger btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-close font-size-18"></i></a>
                                            </div>  

                                            <div class="mt-2 text-center">
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
                                            <h5 class="my-0"><span class="text-muted mr-2"><del> Rp <?php echo number_format($product->price) ?></del></span> <b> Rp <?php echo number_format(($product->price - $product->price * 0.25))?> </b></h5>                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add -->
                                <div class="modal fade" id="add-{{$product->info_id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTitle">Add {{$product->name . ' - '. $product->color . ' ('.$product->size.')'}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/product/addqty" method="post">
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">Add Item</label>
                                                        <input type="hidden" id="info_id" name="info_id" value="{{$product->info_id}}">
                                                        <div class="col-md-8">
                                                                <input data-parsley-type="digits" type="text"
                                                                        id="quantity" name="quantity"
                                                                        class="form-control" required
                                                                        placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success"> Add </button> 
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Delete -->
                                <div class="modal fade" id="delete-{{$product->info_id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTitle">Delete Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/product/delete" method="GET">                                                
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" id="info_id" name="info_id" value="{{$product->info_id}}">
                                                    Are you sure want to remove this product?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Edit -->
                                <div class="modal fade" id="edit-{{$product->info_id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTitle">Edit Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/product/edit" method="post">
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Item Image</label>
                                                        <div class="col-md-10">
                                                            <div class="fallback">
                                                                <input id="image" name="image" type="file" multiple="multiple">
                                                            </div>
                                                            <div class="dz-message needsclick">
                                                                <div class="mb-3">
                                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                                </div>
                                                            </div>
            
                                                        </div>
                                                    </div>
                                                    
                                                    <input type="hidden" id="{{$product->id}}" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" id="{{$product->info_id}}" name="info_id" value="{{$product->info_id}}">

                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Item Name</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" id="name" name="name" type="text" value="{{$product->name}}" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Color</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" id="color" name="color" type="text" value="{{$product->color}}" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-md-2 col-form-label">size</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" id="size" name="size" type="text" value="{{$product->size}}" id="example-email-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-url-input" class="col-md-2 col-form-label">Price</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" value="{{$product->price}}" id="example-url-input">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Category</label>
                                                        <div class="col-md-10">
                                                            <select name="category" class="form-control select2">   
                                                                
                                                                @foreach ($product_categories as $category)
                                                                    <option id="category-{{$product->info_id}}" name="category-{{$product->info_id}}" value="{{$category->name}}"> {{$category->name}} </option>  
                                                                @endforeach                                                        
                                                                    
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Types</label>
                                                        <div class="col-md-10">

                                                            @foreach ($product_types as $type)
                                                                <div class=" custom-control custom-checkbox">
                                                                <input type="checkbox" id="type-{{$type->id}}" name="type[]" value="{{$type->id}}" class="custom-control-input">
                                                                    <label class="custom-control-label" for="type-{{$type->id}}">&nbsp;</label>
                                                                    {{$type->name}}
                                                                </div>
                                                            @endforeach                                                  

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
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
    </div>
    <!-- End Page-content -->
@endsection