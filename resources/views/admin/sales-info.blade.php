<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4 float-sm-left"> {{__('Sales')}} </h4>
        <div class="float-sm-right">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#"> {{__('Week')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> {{__('Month')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"> {{__('Year')}} </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>

        <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
    </div>
</div>