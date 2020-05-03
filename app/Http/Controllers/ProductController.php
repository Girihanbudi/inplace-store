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
                        ->select('products.id', 'product_infos.id as info_id', 'products.name', 'products.price', 'products.weight', 'products.rating', 'products.describe', 'product_infos.color', 'product_infos.size', 'product_infos.quantity')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->paginate(5);

        $product_types = DB::table('product_types')->get();
        $product_categories = DB::table('product_categories')->get();

        // send data to admin Home
        // return $products;
        return view('adminProducts', ['products' => $products, 'product_categories' => $product_categories, 'product_types' => $product_types]);
    }

    public function showProduct($id)
    {
        $product = DB::table('products')
                ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                ->where('products.id', $id)
                ->get();

        // retrive data from database
        $products = DB::table('products')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->take(5)
                        ->get();

        return view('productViewer', ['product' => $product, 'products' => $products]);
    }

    public function shopProducts()
    {
        // retrive data from database
        $products = DB::table('products')
                        ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                        ->paginate(12);

        $product_types = DB::table('product_types')->get();
        $product_categories = DB::table('product_categories')->get();

        // send data to admin Home
        return view('shop', ['products' => $products, 'product_types' => $product_types, 'product_categories' => $product_categories]);
    }

    public function productByCategory($id){
        $products = DB::table('product_category_tags')
                    ->leftJoin('products', 'product_category_tags.product_id', '=', 'products.id')
                    ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                    ->where('product_category_tags', '=', $id)
                    ->paginate(12);
        return view('shop', ['products' => $products]);
    }

    public function productByType($id){        
        $products = DB::table('product_type_tags')
                    ->leftJoin('products', 'product_type_tags.product_id', '=', 'products.id')
                    ->leftJoin('product_infos', 'products.id', '=', 'product_infos.product_id')
                    ->where('product_type_tags', '=', $id)
                    ->paginate(12);
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

    public function delete(){

    }

}
