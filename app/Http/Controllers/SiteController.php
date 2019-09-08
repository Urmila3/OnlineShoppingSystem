<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SiteController extends Controller
{
    public function index(Request $request){
        $msg = $request->session()->get('order-placed-msg');
        if($msg == 1)
            $request->session()->put('order-placed-msg', 0);

        $products=Product::all();
        $Categories=Category::all();
        
        return view('welcome',compact('products','Categories', 'msg'));
    }
}
