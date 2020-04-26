<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name'=> 'kaos distro inplace big logo',
                'price'=> 120000,
                'weight' => 0.25,
                'describe'=> 'Inspired by ‘80s club culture ...',
            ],
        ];
  
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
