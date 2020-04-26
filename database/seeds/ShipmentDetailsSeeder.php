<?php

use Illuminate\Database\Seeder;
use App\ShipmentDetail;

class ShipmentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipmentDetail = [
            [
                'shipment_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'weight' => 0.25,
            ],
        ];

        foreach ($shipmentDetail as $key => $value) {
            ShipmentDetail::insert($value);
        }
    }
}
