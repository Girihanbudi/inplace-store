<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProducts()
    {
        // retrive data from database
        $products = DB::table('products')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->paginate(5);


        // send data to admin Home
        return view('adminProducts', ['products' => $products]);
    }

    public function shopProducts()
    {
        // retrive data from database
        $products = DB::table('products')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->paginate(12);


        // send data to admin Home
        return view('shop', ['products' => $products]);
    }

    public function getCategoryAndType(){
        $types = DB::table('product_types')->get();
        $categories = DB::table('product_categories')->get();

        return view('adminProductAdd', ['types' => $types, 'categories' => $categories]);
    }

    public function index(){
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

}
