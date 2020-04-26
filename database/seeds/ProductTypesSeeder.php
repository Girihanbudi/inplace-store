<?php

use Illuminate\Database\Seeder;
use App\ProductType;

class ProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productType = [
            [
                'name'=> 'shirt',
            ],
            [
                'name'=> 't-shirt',
            ],
            [
                'name'=> 'jackets',
            ],
            [
                'name'=> 'v-neck',
            ],
            [
                'name'=> 'jeans',
            ],
        ];
        
  
        foreach ($productType as $key => $value) {
            ProductType::insert($value);
        }
    }
}
