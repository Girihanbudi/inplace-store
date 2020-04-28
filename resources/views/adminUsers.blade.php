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
                        <h4 class="mb-0 font-size-18"> {{__('Users')}} </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/admin/home"> {{__('Main')}} </a></li>
                                <li class="breadcrumb-item active"> {{__('Users')}} </li>
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
                                        <a href="/admin/user/add" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> {{__('New User')}} </a>                    
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap">
                                    <thead>
                                        <tr>
                                            <th> {{__('Select')}} </th>
                                            <th> {{__('Username')}} </th>
                                            <th> {{__('Email')}} </th>
                                            <th> {{__('Address')}} </th>
                                            <th> {{__('Role')}} </th>
                                            <th> {{__('Joining Date')}} </th>
                                            <th> {{__('Action')}} </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="{{$user->id}}">
                                                        <label class="custom-control-label" for="{{$user->id}}">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td> {{$user->name}} </td>
                                                <td> {{$user->email}} </td>                                                
                                                <td> {{$user->address}} </td>
                                                
                                                @if ($user->is_admin == True)
                                                    <td> {{__('ADMINISTRATOR')}} </td>
                                                @else 
                                                    <td> {{__('user')}} </td>
                                                @endif
        
                                                <td> {{$user->created_at}} </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>
                                                            <li><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <ul class="pagination pagination-rounded justify-content-end mb-2">
                                {{ $users->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection