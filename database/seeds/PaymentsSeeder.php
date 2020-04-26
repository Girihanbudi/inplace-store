<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
            [
                'user_id'=>1,
                'price'=>120000,
                'total_payment' => 120000,
                'discount' => 0,
                'bank_account' => '0941111111',
                'bank_name' => 'bca'
            ],
        ];
  
        foreach ($payment as $key => $value) {
            Payment::insert($value);
        }
    }
}
