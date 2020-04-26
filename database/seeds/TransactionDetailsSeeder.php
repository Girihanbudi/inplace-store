<?php

use Illuminate\Database\Seeder;
use App\TransactionDetail;

class TransactionDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionDetail = [
            [
                'transaction_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 120000,
            ],
        ];

        foreach ($transactionDetail as $key => $value) {
            TransactionDetail::insert($value);
        }
    }
}
