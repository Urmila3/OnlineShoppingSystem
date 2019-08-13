<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function FindByCategory($catId){
		$prodss=Product::where('category_id',$catId)->get();
		return view('customer-pages.productlist',compact('prodss'));
	}
}
