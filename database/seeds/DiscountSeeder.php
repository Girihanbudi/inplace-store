<?php

use Illuminate\Database\Seeder;
use App\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = [
            [

            ],
        ];

        foreach ($discount as $key => $value) {
            Discount::insert($value);
        }
    }
}
