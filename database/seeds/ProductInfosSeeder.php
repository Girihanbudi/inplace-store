<?php

use Illuminate\Database\Seeder;
use App\ProductInfo;

class ProductInfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productInfo = [
            [
                'product_id'=> 1,
                'size' => 's',
                'quantity' => 50,
                'color' => 'white',
            ],
            [
                'product_id'=> 1,
                'size' => 'm',
                'quantity' => 50,
                'color' => 'white',
            ],
            [
                'product_id'=> 1,
                'size' => 'l',
                'quantity' => 50,
                'color' => 'white',
            ],
            [
                'product_id'=> 1,
                'size' => 'xl',
                'quantity' => 50,
                'color' => 'white',
            ],

            [
                'product_id'=> 1,
                'size' => 's',
                'quantity' => 50,
                'color' => 'black',
            ],
            [
                'product_id'=> 1,
                'size' => 'm',
                'quantity' => 50,
                'color' => 'black',
            ],
            [
                'product_id'=> 1,
                'size' => 'l',
                'quantity' => 50,
                'color' => 'black',
            ],
            [
                'product_id'=> 1,
                'size' => 'xl',
                'quantity' => 50,
                'color' => 'black',
            ],

        ];        
  
        foreach ($productInfo as $key => $value) {
            ProductInfo::insert($value);
        }
    }
}
