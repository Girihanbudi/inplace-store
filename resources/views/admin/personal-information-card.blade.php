<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4"> {{__('Personal Information')}} </h4>

        <div class="table-responsive">
            <table class="table table-nowrap mb-0">
                <tbody>
                    <tr>
                        <th scope="row"> {{__('Full Name ')}} </th>
                        <td> {{{Auth::User()->name}}} </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{__('Email')}} </th>
                        <td> {{{Auth::User()->email}}} </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{__('Gender')}} </th>
                        @if (Auth::User()->is_mail = 1)
                            <td> {{__('Male')}} </td>
                        @elseif (Auth::User()->is_mail = 2)
                            <td> {{__('Female')}} </td>
                        @else
                            <td> {{__('Not Set')}} </td>
                        @endif

                    </tr>
                    <tr>
                        <th scope="row"> {{__('Address ')}} </th>
                        <td> {{{Auth::User()->address}}} </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end card -->