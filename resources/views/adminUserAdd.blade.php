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

                                <form action="/admin/user/newuser" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name"> {{__('Name')}} </label>
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email"> {{__('Email')}} </label>
                                                <input id="email" name="email" type="email" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label"> {{__('Gender')}} </label>
                                                    <option  value="1"> {{__('Male')}} </option>
                                                <select id="gender" name="gender" class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    <option id="gender" name="gender" value="1"> {{__('Male')}} </option>
                                                    <option id="gender" name="gender" value="0"> {{__('Female')}} </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label"> {{_('Role')}} </label>
                                                <select id="role" name="role"  class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    <option id="role" name="role" value="0"> {{__('User/Guest')}} </option>
                                                    <option id="role" name="role" value="1"> {{__('Admin')}} </option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password"> {{__('Password')}} </label>
                                                <input id="password" name="password" type="password" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="re-password"> {{__('Retype Password')}} </label>
                                                <input id="re-password" name="re-password" type="password" class="form-control">
                                                <span id='message'></span>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label"> {{_('City')}} </label>
                                                <select id="city" name="city"  class="form-control select2">
                                                    <option> {{__('Select')}} </option>
                                                    
                                                    @foreach ($cities as $city)
                                                        <option id="city_id" name="city_id" value="{{$city->city_id}}"> <?php echo $city->type?> {{$city->name}} </option>                                                        
                                                    @endforeach

                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="address"> {{__('Address')}} </label>
                                                <textarea class="form-control" id="address" name="address" rows="5"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">{{__('Save Changes')}} </button>
                                    <button type="button" class="btn btn-secondary waves-effect"> {{__('Cancel')}} </button>
                                </form>

                            </div>
                        </div>                       
                                                
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <script>
            $('#password, #re-password').on('keyup', function () {
            if ($('#password').val() == $('#re-password').val()) {
                $('#message').html('').css('color', 'green');
            } else 
                $('#message').html('Password need to be the same').css('color', 'red');
            });
        </script>
@endsection