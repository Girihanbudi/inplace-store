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
                        ->paginate(15);


        // send data to admin Home
        return view('adminProducts', ['products' => $products]);
    }
}
