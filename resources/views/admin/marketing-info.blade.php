<div class="col-md-4">
    <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="media">
                <div class="media-body">
                    <p class="text-muted font-weight-medium"> {{__('Orders')}} </p>
                    <h4 class="mb-0"> {{$trx_count}} </h4>
                </div>

                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                    <span class="avatar-title">
                        <i class="bx bx-copy-alt font-size-24"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="media">
                <div class="media-body">
                    <p class="text-muted font-weight-medium"> {{__('Revenue')}} </p>
                    <h4 class="mb-0">Rp <?php echo number_format($trx_sum)?> </h4>
                </div>

                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                    <span class="avatar-title rounded-circle bg-primary">
                        <i class="bx bx-archive-in font-size-24"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="media">
                <div class="media-body">
                    <p class="text-muted font-weight-medium"> {{__('Average Price')}} </p>
                    <h4 class="mb-0">Rp <?php echo number_format($trx_sum/$trx_count)?></h4>
                </div>

                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                    <span class="avatar-title rounded-circle bg-primary">
                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>