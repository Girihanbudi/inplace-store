<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TransactionController extends CourierCostController
{
    public function viewOrder($id){
        $transaction = DB::table('transactions')
                    ->where('id', '=', $id)    
                    ->get();
        
        $user = DB::table('users')
                ->where('id', '=', $transaction[0]->user_id)
                ->get();
        
        $details = DB::table('transaction_details')
                    ->select('products.name as name', 'products.price as price', 'transaction_details.quantity as quantity', 'transaction_details.price as total', 'products.weight as weight', 'product_infos.color as color', 'product_infos.size as size')
                    ->where('transaction_id', '=', $transaction[0]->id)
                    ->leftJoin('product_infos', 'product_infos.id', '=', 'transaction_details.product_info_id')
                    ->leftJoin('products', 'products.id', '=', 'product_infos.id')
                    ->get();
        
        $shipment = DB::table('shipments')
                    ->where('id', '=', $transaction[0]->shipment_id)
                    ->get();    
        
        $total_weight = 0;
        foreach ($details as $detail){
            $total_weight += $detail->weight;
        }

        $courier = json_decode(CourierCostController::getCourierData($total_weight * 100), false); 

        return view ('adminOrderViewer', ['user'=>$user, 'transaction'=>$transaction, 'details'=>$details, 'courier'=>$courier, 'shipment'=>$shipment]);
    }

    public function acceptOrder(Request $request){
        DB::table('shipments')
        ->where('id', '=', $request->shipment_id)
        ->update(['shipment_date'=>Carbon::now()->toDateTimeString()]);

        DB::table('transactions')
        ->where('id', '=', $request->id)
        ->update(['status'=>'shiping']);

        return redirect('/admin/orders/acception');
    }

    public function getTransaction()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.id as user_id', 'users.name','transactions.date', 'payments.price', 'payments.bank_name','payments.bank_name','payments.bank_account', 'transactions.status')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);


        // send data to admin Home
        return view('adminOrders', ['transactions' => $transactions]);
    }

    public function getBilling()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.id as user_id', 'users.name','transactions.date', 'payments.price','payments.bank_name','payments.bank_account', 'transactions.status')
                        ->where('transactions.status', '=', 'pending')
                        ->where('transactions.status', '=', 'canceled')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);


        // send data to admin Home
        return view('adminBillingOrders', ['transactions' => $transactions]);
    }

    public function getOrder()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.id as user_id', 'users.name','transactions.date', 'users.address')
                        ->where('transactions.status', '=', 'paid')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);


        // send data to admin Home
        return view('adminAcceptionOrders', ['transactions' => $transactions]);
    }

    public function getFinishOrder(){
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.id as user_id', 'users.name','transactions.date', 'payments.price','payments.bank_name','payments.bank_account')
                        ->where('transactions.status', '=', 'finish')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);


        // send data to admin Home
        return view('adminFinishOrders', ['transactions' => $transactions]);
    }

    public function getLastTransaction()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id',
                                'users.name',
                                'transactions.date',
                                'payments.price',
                                'payments.bank_name',
                                'payments.bank_account',
                                'transactions.status')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->take(10)
                        ->get()
                        ->reverse();

        $total_weight = 0;
        foreach ($transactions as $transaction){
            $total_weight += $transaction->weight;
        }

        $courier = json_decode(CourierCostController::getCourierData($total_weight * 100), false); 

        return $transactions;
        // send data to admin Home
        return view('adminHome', ['transactions' => $transactions]);
    }

}
