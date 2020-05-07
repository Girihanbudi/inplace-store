<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransactionController extends CourierCostController
{
    public function addTransaction($user_id, $destination, $price, $total){


        $cart_items = DB::table('carts')
                    ->select('carts.id','carts.quantity', 'product_infos.id as info_id', 'products.price')
                    ->leftJoin('product_infos', 'carts.product_info_id', '=', 'product_infos.id')
                    ->leftJoin('products', 'product_infos.product_id', '=', 'products.id')
                    ->where('user_id', '=', $user_id)
                    ->get();

        DB::table('shipments')
        ->insert([
            'origin' => 23,
            'destination' => $destination,
            'user_id' => $user_id,
            'courier_id' => 1,
            'price' => $price
        ]);

        $latest_shipment = DB::table('shipments')
        ->where('user_id', '=', $user_id)
        ->latest('id')->first();

        DB::table('transactions')
        ->insert(['date'=>Carbon::now()->toDateTimeString(),
                'user_id'=>$user_id,
                'shipment_id'=>$latest_shipment->id,
                'status'=> 'pending',
                'total_purchase'=>$total
        ]);

        $latest_transaction = DB::table('transactions')
        ->where('user_id', '=', $user_id)
        ->latest('id')->first();

        foreach($cart_items as $item){
            DB::table('transaction_details')
            ->insert([
                'transaction_id'=>$latest_transaction->id,
                'product_info_id'=>$item->info_id,
                'quantity'=>$item->quantity,
                'price'=>$item->price
            ]);
            
            DB::table('carts')->delete($item->id);
        }

        return redirect('/payment');
    }

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
                    ->leftJoin('products', 'products.id', '=', 'product_infos.product_id')
                    ->get();
        
        $shipment = DB::table('shipments')
                    ->where('id', '=', $transaction[0]->shipment_id)
                    ->get();    
        
        $total_weight = 0;
        foreach ($details as $detail){
            $total_weight += $detail->weight;
        }

        $courier = json_decode(CourierCostController::getCourierDataBuyer($total_weight * 100, $user[0]->city_id), false); 

        return view ('adminOrderViewer', ['user'=>$user, 'transaction'=>$transaction, 'details'=>$details, 'courier'=>$courier, 'shipment'=>$shipment]);
    }

    public function acceptOrder(Request $request){
        DB::table('shipments')
        ->where('id', '=', $request->shipment_id)
        ->update(['shipment_date'=>Carbon::now()->toDateTimeString()]);

        DB::table('transactions')
        ->where('id', '=', $request->id)
        ->update(['status'=>'shipping']);

        return redirect('/admin/orders/acception');
    }

    public function getTransactions()
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

    public function viewTransaction($id){
        $transaction = DB::table('transactions')
        ->where('id', '=', $id)    
        ->get();

        $user = DB::table('users')
            ->where('id', '=', $transaction[0]->user_id)
            ->get();

        $details = DB::table('transaction_details')
                ->select('products.name', 'products.price', 'transaction_details.quantity as quantity', 'transaction_details.price as total', 'products.weight', 'product_infos.color', 'product_infos.size')
                ->leftJoin('product_infos', 'transaction_details.product_info_id', '=', 'product_infos.id')
                ->leftJoin('products', 'product_infos.product_id', '=', 'products.id')
                ->where('transaction_id', '=', $transaction[0]->id)
                ->get();

        $shipment = DB::table('shipments')
                ->where('id', '=', $transaction[0]->shipment_id)
                ->get();    

        $total_weight = 0;
        foreach ($details as $detail){
        $total_weight += $detail->weight;
        }

        $courier = json_decode(CourierCostController::getCourierDataBuyer($total_weight * 100, $user[0]->city_id), false); 

        return view ('adminTransactionViewer', ['user'=>$user, 'transaction'=>$transaction, 'details'=>$details, 'courier'=>$courier, 'shipment'=>$shipment]);
    }

    public function getBilling()
    {
        // retrive data from database
        $transactions = DB::table('transactions')
                        ->select('transactions.id','users.id as user_id', 'users.name','transactions.date', 'transactions.total_purchase', 'transactions.status')
                        ->where('transactions.status', '=', 'pending', 'or', 'canceled')
                        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
                        ->leftJoin('payments','transactions.payment_id', '=', 'payments.id')
                        ->groupBy('transactions.id')
                        ->paginate(15);

        // send data to admin Home
        return view('adminBillingOrders', ['transactions' => $transactions]);
    }

    public function viewBilling($id){
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
                ->leftJoin('products', 'products.id', '=', 'product_infos.product_id')
                ->get();

        $shipment = DB::table('shipments')
                ->where('id', '=', $transaction[0]->shipment_id)
                ->get();    

        $total_weight = 0;
        foreach ($details as $detail){
        $total_weight += $detail->weight;
        }

        $courier = json_decode(CourierCostController::getCourierDataBuyer($total_weight * 100, $user[0]->city_id), false); 

        return view ('adminBillingViewer', ['user'=>$user, 'transaction'=>$transaction, 'details'=>$details, 'courier'=>$courier, 'shipment'=>$shipment]);
    }

    public function acceptBilling(Request $request){

        DB::table('payments')
        ->insert([
            'date'=>Carbon::now()->toDateTimeString(),
            'user_id'=>$request->user_id,
            'price'=>$request->total_payment,
            'total_payment'=>$request->total_payment,
            'bank_account'=>$request->bank_account,
            'bank_name'=>$request->bank_name,
        ]);

        $latest_payment = DB::table('payments')
        ->where('user_id', '=', $request->user_id)
        ->latest('id')->first();

        DB::table('transactions')
        ->where('id', '=', $request->transaction_id)
        ->update([ 
            'payment_id'=>$latest_payment->id,
            'status'=>'paid'
        ]);

        return redirect('/admin/orders/billing');
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

    public function getShippingOrder(){
        // retrive data from database
        $transactions = DB::table('transactions')
        ->select('transactions.id', 'users.name','shipments.shipment_date as date', 'shipments.price', 'postal_codes.name as destination')
        ->where('transactions.status', '=', 'shipping')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->leftJoin('shipments', 'transactions.shipment_id', '=', 'shipments.id')
        ->leftJoin('postal_codes', 'shipments.destination', '=', 'postal_codes.city_id')
        ->groupBy('transactions.id')
        ->paginate(15);

        // send data to admin Home
        return view('adminShippingOrders', ['transactions' => $transactions]);
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
       
        // send data to admin Home
        return view('adminHome', ['transactions' => $transactions]);
    }

    public function unfinishTransaction(){
        $transactions = DB::table('transactions')
        ->where('user_id', '=', Auth::User()->id)
        ->where('status', '!=', 'canceled')
        ->where('status', '!=', 'finish')
        ->get();

        return view('order', ['transactions'=>$transactions]);
    }

    public function transactionDetail($id){

        $transactions = DB::table('transactions')
        ->where('id', '=', $id)
        ->get();

        $details = DB::table('transaction_details')
        ->select('products.name as name', 'products.price as price', 'transaction_details.quantity as quantity', 'transaction_details.price as total', 'products.weight as weight', 'product_infos.color as color', 'product_infos.size as size')
        ->where('transaction_id', '=', $id)
        ->leftJoin('product_infos', 'product_infos.id', '=', 'transaction_details.product_info_id')
        ->leftJoin('products', 'products.id', '=', 'product_infos.product_id')
        ->get();

        $total_weight = 0;
        foreach ($details as $detail){
            $total_weight += $detail->weight;
        }

        $courier = json_decode(CourierCostController::getCourierData($total_weight * 100), false);  

        return view('orderViewer', ['transactions'=>$transactions, 'details'=>$details, 'courier'=>$courier]);
    }

}
