<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orderlist() {
		return view("customer-pages.orderlist");
	}
}
