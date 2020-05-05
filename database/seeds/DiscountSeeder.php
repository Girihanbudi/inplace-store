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
                'name'=>'grand opening sales',
                'product_id'=>1,
                'start_period'=>'2020-05-01 00:00:00',
                'end_period'=>'2020-08-01 00:00:00',
                'discount'=>25,
                'description'=>'grand opening of inplace store, we gift our new member 25% discount off of all products',
            ],
        ];

        foreach ($discount as $key => $value) {
            Discount::insert($value);
        }
    }
}
