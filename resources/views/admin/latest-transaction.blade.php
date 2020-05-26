<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4"> {{__('Latest Transaction')}} </h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th> {{__('Order ID')}} </th>
                                <th> {{__('Date Time')}} </th>
                                <th> {{__('Billing Name')}} </th>
                                <th> {{__('Total')}} </th>
                                <th> {{__('Payment Status')}} </th>
                                <th> {{__('Bank')}} </th>
                                <th> {{__('Account No.')}} </th>
                                <th> {{__('View Details')}} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{$transaction->id}}">
                                        <label class="custom-control-label" for="{{$transaction->id}}">&nbsp;</label>
                                    </div>
                                </td>
                                <td>{{ $transaction->id }}</td>
                                <td>
                                    {{ $transaction->date }}                                
                                </td>
                                <td>{{ $transaction->name }}</td>
                                <td> Rp <?php echo number_format($transaction->price)?></td>

                                @if($transaction->status == 'paid')
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-12"> {{__('Paid')}} </span>
                                    </td>
                                @elseif ($transaction->status == 'canceled')
                                    <td>
                                        <span class="badge badge-pill badge-soft-danger font-size-12"> {{__('Canceled')}} </span>
                                    </td>
                                @elseif ($transaction->status == 'pending')
                                    <td>
                                        <span class="badge badge-pill badge-soft-warning font-size-12"> {{__('Pending')}} </span>
                                    </td>
                                @elseif ($transaction->status == 'shipping')
                                <td>
                                    <span class="badge badge-pill badge-soft-primary font-size-12"> {{__('Shipping')}} </span>
                                </td>
                                @elseif ($transaction->status == 'finish')
                                <td>
                                    <span class="badge badge-pill badge-soft-secondary font-size-12"> {{__('Finish')}} </span>
                                </td>
                                @endif

                                <td> {{ $transaction->bank_name }} </td>
                                <td> {{ $transaction->bank_account }} </td>
                                {{-- <td>
                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                </td> --}}
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                        {{__('View Details')}}
                                    </button>
                                </td>
                            </tr>   
                            @endforeach                                                     
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->