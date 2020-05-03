<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4"> {{__('Monthly Earning')}} </h4>
        <div class="row">
            <div class="col-sm-6">
                <p class="text-muted"> {{__('This month')}} </p>
                <h3>Rp 120.000</h3>
                <p class="text-muted"><span class="text-success mr-2"> 100% <i class="mdi mdi-arrow-up"></i> </span> {{__('From previous period')}} </p>

                <div class="mt-4">
                    <a href="#" class="btn btn-primary waves-effect waves-light btn-sm"> {{__('View More')}} <i class="mdi mdi-arrow-right ml-1"></i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mt-4 mt-sm-0">
                    <div id="radialBar-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <br>
        <p class="text-muted mb-0"> {{__('Sales growth this month')}} </p>
    </div>                        
</div>