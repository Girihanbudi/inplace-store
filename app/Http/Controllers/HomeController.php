<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $best_sellers = DB::table('products')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->orderByDesc('rating')
                        ->take(5)
                        ->get();

        $products = DB::table('products')
                    ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                    ->take(5)
                    ->get();

        return view('home', ["best_sellers" => $best_sellers, "products" => $products]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
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

        $trx_count = DB::table('transactions')
                     ->count();
        
        $trx_sum = DB::table('transactions')
                    ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                    ->sum('payments.price');
                    
        // send data to admin Home
        return view('adminHome', ["transactions"=> $transactions, 'trx_count' => $trx_count, 'trx_sum' => $trx_sum]);
    }
}
