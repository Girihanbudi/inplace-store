<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart(){
        $cart_items = DB::table('carts')
                    ->select('carts.id','carts.quantity', 'product_infos.id as info_id','product_infos.color', 'products.price', 'products.weight', 'products.describe', 'products.name')
                    ->leftJoin('product_infos', 'carts.product_info_id', '=', 'product_infos.id')
                    ->leftJoin('products', 'product_infos.product_id', '=', 'products.id')
                    ->where('user_id', '=', Auth::User()->id)
                    ->get();    

        $total_weight = 0;
        foreach ($cart_items as $item){
            $total_weight += $item->weight;
        }

        $courier = json_decode($this->getCourierData($total_weight * 100), false);  

        return view('/cart', ['cart_items'=>$cart_items, 'courier'=>$courier]);
    }

    public function addToCart(Request $request){
        
        // GET SELECTED INFO ID 
        $selected_infos = DB::table('product_infos')
        ->where('color', '=', $request->color)
        ->where('size', '=', $request->size)
        ->get();

        // INSERT INTO
        DB::table('carts')
        ->insert(['user_id'=> $request->user_id, 
                'product_info_id'=> $selected_infos[0]->id, 
                'quantity'=>$request->quantity
        ]);

        // UPDATE STOCK 
        DB::table('product_infos')
        ->where('id', '=', $selected_infos[0]->id)
        ->update(['quantity'=> $selected_infos[0]->quantity - $request->quantity]);

        return redirect('/shop');
    }

    public function discard($cart_id, $quantity, $info_id){

        $selected_infos = DB::table('product_infos')
                        ->select('quantity')
                        ->where('id', '=', $info_id)
                        ->get();

        DB::table('product_infos')
        ->where('id', '=', $info_id)
        ->update(['quantity'=> $quantity + $selected_infos[0]->quantity]);

        DB::table('carts')
        ->where('id', '=', $cart_id)
        ->delete();

        return redirect('/cart');
    }

    public function checkout(){
        return view('/shop');
    }

    public function getCourierData($weight){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=23&destination=" . Auth::User()->city_id . "&weight=" . $weight . "&courier=jne",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 1578ba579b4d739068dd0e4a53098152"
        ),
        ));

        $response = curl_exec($curl); 

        return $response;
    }
}
