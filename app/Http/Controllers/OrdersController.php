<?php

namespace App\Http\Controllers;
use App\Product;
use App\SaleItem;

use Stripe\Stripe;
use Stripe\Charge;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orderlist() {
		$sales = Sale::where('customer_id');
		return view("customer-pages.orderlist");
	}

	public function emptyCart(Request $request) {
		$request->session()->forget('cart-item');
		return redirect('/orders/cart');
	}

	public function removeItem(Request $request, $id) {
		$products = $request->session()->get('cart-item');
		$newlist = [];
		foreach($products as $prod) {
			if ($prod['id'] != $id) {
				$newlist[] = $prod;
			}
		}
		$request->session()->put('cart-item', $newlist);
		return redirect('/orders/cart');

	}

	public function checkout(Request $request){
		$sales = $request->session()->get('cart-item');
		foreach($sales as $saleObj){
			$saleObj=SaleItem::insert($id_);
			
		}
		
		print_r($products);

	} 

	public function addToCart(Request $request, $id) {
		$products = $request->session()->get('cart-item');
		$productObj = Product::find($id);
		 
		$products[] = array('id' => $id, 'name' => $productObj->product_name, 'image' => $productObj->image, 'price' => $productObj->price);
		$request->session()->put('cart-item', $products);
		$request->session()->put('order-placed-msg', 1);
		return redirect("/");
	}
	public function cart(Request $request) {
		$products = $request->session()->get('cart-item');
		
		return view('customer-pages.cart', compact('products'));
	}



}
