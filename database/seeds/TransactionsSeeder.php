<?php

use Illuminate\Database\Seeder;
use App\Transaction;
use Carbon\Traits\Timestamp;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = [
            [
                'user_id'=> 1,
                'payment_id'=> 1,
                'shipment_id'=> 1,
                'status' => 'paid',
            ],
        ];
  
        foreach ($transaction as $key => $value) {
            Transaction::insert($value);
        }
    }
}
