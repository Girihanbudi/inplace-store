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
                        <h4 class="mb-0 font-size-18"> {{__('Profile')}} </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/admin/home"> {{__('Main')}} </a></li>
                                <li class="breadcrumb-item active"> {{__('Profile')}} </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">

                    <img style="  display: block;
                    margin-left: auto;
                    margin-right: auto;"
                    src="/adminresource/assets/images/users/{{Auth::User()->id}}.jpg" alt="" class="img-thumbnail rounded-circle">
                    <br>
                    <hr>
                    <br>
                    <h2 style="text-align:center" class=" text-truncate"> {{Auth::User()->name}} </h2>
                    <p style="font-size:16px; text-align:center" class="text-muted mb-0 text-truncate"> {{__('Administrator')}} </p>
                    <p style="font-size:12px; text-align:center" class="text-muted mb-0 text-truncate"> {{'Last Update : ' . Auth::User()->updated_at}} </p>
                </div>
            </div>

            <br>
            <br>

            <div class="card overflow-hidden">
                
                <div class="card-body pt-12">
                    <div class="row">                       
            
                        <div class="col-sm-4">
                            <div class="pt-4">
            
                                <dl class="row mb-0">
                                    <dt class="col-sm-3">ID</dt>
                                    <dd class="col-sm-9">{{Auth::User()->id}}</dd>

                                    <dt class="col-sm-3">Name</dt>
                                    <dd class="col-sm-9">{{Auth::User()->name}}</dd>
                    
                                    <dt class="col-sm-3">Email</dt>
                                    <dd class="col-sm-9">{{Auth::User()->email}}</dd>
                    
                                    <dt class="col-sm-3">Gender</dt>
                                    @if (Auth::User()->is_male)
                                        <dd class="col-sm-9">Male</dd>    
                                    @else 
                                        <dd class="col-sm-9">Female</dd>                               
                                    @endif
                    
                                    <dt class="col-sm-3 text-truncate">Address</dt>
                                    <dd class="col-sm-9">{{Auth::User()->address}}</dd>
                                </dl>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection