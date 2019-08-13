<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orderlist() {
		return view("customer-pages.orderlist");
	}

	public function emptyCart(Request $request) {
		$request->session()->forget('cart-item');
		echo "deleted";
	}

	public function addToCart(Request $request, $id) {
		$products = $request->session()->get('cart-item');
		$productObj = Product::find($id);
		 
		$products[] = array('id' => $id, 'name' => $productObj->product_name, 'image' => $productObj->image, 'price' => $productObj->price);
		$request->session()->put('cart-item', $products);
		echo "added successuly<a href='/orders'></a>";
	}
	public function cart(Request $request) {
		$products = $request->session()->get('cart-item');
		return view('customer-pages.cart', compact('products'));
	}
}
