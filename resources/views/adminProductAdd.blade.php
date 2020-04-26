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
                            <h4 class="mb-0 font-size-18"> {{__('Add Product')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin/home"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Add Product')}} </li>
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

                                <h4 class="card-title"> {{__('Basic Information')}} </h4>
                                <p class="card-title-desc"> {{__('Fill all information below')}} </p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="productname"> {{__('Product Name')}} </label>
                                                <input id="productname" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="productprice"> {{__('Price')}} </label>
                                                <input id="productprice" name="productprice" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="productweight"> {{__('Weight')}} </label>
                                                <input id="productweight" name="productweight" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label"> {{__('Category')}} </label>
                                                <div style="padding-top: 1.5px; padding-bottom: 1.5px" class=" custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="test">
                                                    <label class="custom-control-label" for="test">&nbsp;</label>
                                                    sdfsdf
                                                </div>
                                                <div style="padding-top: 1.5px; padding-bottom: 1.5px" class="form-group custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="test2">
                                                    <label class="custom-control-label" for="test2">&nbsp;</label>
                                                    sdfsdf
                                                </div>
                                                <select class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Features</label>

                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="productdescription"> {{__('Product Description')}} </label>
                                                <textarea class="form-control" id="productdescription" rows="5"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">{{__('Save Changes')}} </button>
                                    <button type="submit" class="btn btn-secondary waves-effect"> {{__('Cancel')}} </button>
                                </form>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3"> {{__('Product Images')}} </h4>

                                <form action="https://themesbrand.com/" method="post" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
    
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        </div>
                                        
                                        <h4> {{__('Drop files here or click to upload.')}} </h4>
                                    </div>
                                </form>
                            </div>

                        </div> <!-- end card-->
                                                
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

@endsection