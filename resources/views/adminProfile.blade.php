@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
            @php
                $long_name = Auth::User()->name;
                $first_name = explode(' ',trim($long_name));
            @endphp

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

        <div class="card overflow-hidden">
            <div class="bg-soft-primary">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary"> {{__('Manage')}} </h5>
                            <p> {{__('Your Profile')}} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="avatar-md profile-user-wid mb-12">
                            <img src="/adminresource/assets/images/users/{{Auth::User()->id}}.jpg" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        
                        <h5 class="font-size-15 text-truncate"> {{$first_name[0]}} </h5>
                        <p class="text-muted mb-0 text-truncate"> {{__('Administrator')}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection