<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Sale;

class ReportController extends Controller
{
    public function orders(Request $request){
        $orders = Sale::all();
        return view('reports.orders',compact('orders'));
    }
    public function customers(Request $request){
        $customers= Customer::all();
        return view('reports.customers',compact('customers'));
    }
}
