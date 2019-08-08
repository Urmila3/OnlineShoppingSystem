<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productlist() {
		return view("customer-pages.productlist");
	}
}
