<?php

use Illuminate\Database\Seeder;
use App\Shipment;

class ShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipment = [
            [
                'receipt_number' => 'PLMAA16157522118',
                'origin' => 23,
                'destination' => 1,
                'user_id' => 1,
                'courier_id' => 1,
            ],
        ];

        foreach ($shipment as $key => $value) {
            Shipment::insert($value);
        }
    }
}
