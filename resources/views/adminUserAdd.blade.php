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
                            <h4 class="mb-0 font-size-18"> {{__('Add User')}} </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin/home"> {{__('Main')}} </a></li>
                                    <li class="breadcrumb-item active"> {{__('Add User')}} </li>
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

                                <h4 class="card-title"> {{__('User Informations')}} </h4>
                                <p class="card-title-desc">{{__('Fill all information below')}} </p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="username"> {{__('User Name')}} </label>
                                                <input id="username" name="username" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="useremail"> {{__('Email')}} </label>
                                                <input id="useremail" name="useremail" type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label"> {{_('Gender')}} </label>
                                                <select class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    <option value="1"> {{__('Male')}} </option>
                                                    <option value="0"> {{__('Female')}} </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label"> {{_('Role')}} </label>
                                                <select class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    <option value="0"> {{__('User/Guest')}} </option>
                                                    <option value="1"> {{__('Admin')}} </option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="userpassword"> {{__('Password')}} </label>
                                                <input id="userpassword" name="userpassword" type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="userpassword"> {{__('Retype Password')}} </label>
                                                <input id="userpassword" name="userpassword" type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="useraddress"> {{__('Address')}} </label>
                                                <textarea class="form-control" id="useraddress" rows="5"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">{{__('Save Changes')}} </button>
                                    <button type="submit" class="btn btn-secondary waves-effect"> {{__('Cancel')}} </button>
                                </form>

                            </div>
                        </div>                       
                                                
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

@endsection