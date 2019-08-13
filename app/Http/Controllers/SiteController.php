<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SiteController extends Controller
{
    public function index(){
        $products=Product::all();
        $Categories=Category::all();
        
        return view('welcome',compact('products','Categories'));
    }
}
