<?php

use Illuminate\Database\Seeder;
use App\Courier;

class CouriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courier = [
            [
                'name'=>'jne',
            ],
        ];
  
        foreach ($courier as $key => $value) {
            Courier::insert($value);
        }
    }
}