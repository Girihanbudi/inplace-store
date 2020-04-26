<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategory = [
            [
                'name'=> 'man',
            ],
            [
                'name'=> 'female',
            ],
            [
                'name'=> 'kid',
            ],
        ];
        
  
        foreach ($productCategory as $key => $value) {
            ProductCategory::insert($value);
        }
    }
}
