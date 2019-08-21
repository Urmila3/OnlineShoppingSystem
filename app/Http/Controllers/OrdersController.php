<?php

namespace App\Http\Controllers;
use App\Product;

use Stripe\Stripe;
use Stripe\Charge;

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
		echo "added successufully<a href='/orders'></a>";
	}
	public function cart(Request $request) {
		$products = $request->session()->get('cart-item');
		
		return view('customer-pages.cart', compact('products'));
	}

	public function GetCheckout(){
		if(!Session::has('cart-item')){
			return view("customer-pages.cart");
		}
		$products=Session::get('cart-item');
		$cart=new cart($products);
		$total=$cart->price;
		return view("customer-pages.checkout",['total'=>$total]);
	}
	public function postCheckout(Request $request){
		if(!Session::has('cart-item')){
			return redirect()->route('customer-pages.cart');
		}
		$products=Session::get('cart-item');
		$cart=new cart($products);

		Stripe::setApiKey('');
		try{
			Charge:create(array(
				"amount"=>$cart->price,
				"currency" => "Rs",
				"source"=>$request->input('stripeToken')
			));
		}
		catch(Exception $e){
			return redirect()->route('/checkout')->with('error', $e->getMessage());

		}
		
		Session::forget('cart-item');
		return redirect()->route('product.index')->with('success','Successfully purchased products');

	}

}
