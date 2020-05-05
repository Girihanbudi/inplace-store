<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PaymentController extends Controller
{
    public function earning()
    {
        $month = Carbon::now();
        $month->format('m');
        return $month;
        DB::table('payment')
    }
}
