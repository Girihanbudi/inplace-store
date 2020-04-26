<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function getTransaction()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.name','transactions.date', 'payments.price','payments.bank_name','payments.bank_account', 'transactions.status')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);


        // send data to admin Home
        return view('adminOrders', ['transactions' => $transactions]);
    }

    public function getLastTransaction()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.name','transactions.date', 'payments.price','payments.bank_name','payments.bank_account', 'transactions.status')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->take(10)
                        ->get()
                        ->reverse();

        // send data to admin Home
        return view('adminHome', ['transactions' => $transactions]);
    }
}
