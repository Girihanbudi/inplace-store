@php
    $long_name = Auth::User()->name;
    $first_name = explode(' ',trim($long_name));
@endphp

<div class="card overflow-hidden">
    <div class="bg-soft-primary">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-3">
                    <h5 class="text-primary"> {{__('Welcome Back !')}} </h5>
                    <p> {{__('to Dashboard')}} </p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="/adminresource/assets/images/profile-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-sm-4">
                <div class="avatar-md profile-user-wid mb-4">
                    <img src="/adminresource/assets/images/users/{{Auth::User()->id}}.jpg" alt="" class="img-thumbnail rounded-circle">
                </div>
                
                <h5 class="font-size-15 text-truncate"> {{$first_name[0]}} </h5>
                <p class="text-muted mb-0 text-truncate"> {{__('Administrator')}} </p>
            </div>

            <div class="col-sm-8">
                <div class="pt-4">

                    <div class="row">
                        <div class="col-6">
                            <h5 class="font-size-15"> {{{Auth::User()->id}}} </h5>
                            <p class="text-muted mb-0"> {{__('ID')}} </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/admin/profile" class="btn btn-primary waves-effect waves-light btn-sm"> {{__('View Profile')}} <i class="mdi mdi-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>