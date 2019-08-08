<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;

class productsController extends Controller
{
    public function Index(){
	$proArray = product::all();
	return view('products.index',compact("proArray"));
    }   
	
    public function Save(Request $request){
		$prod=new Product;
		$prod->category_id=$request->category_id;
		$prod->product_name=$request->product_name;
		$prod->product_size=$request->product_size;
		$prod->price=$request->price;
		if($prod->save()){
			echo "<script>alert('added successfully')</script>";
		}
		else{
			echo "<script>alert('not added')</script>";
		}
		return redirect("/admin/products");
    }
	
	public function Edit($id){
		$prod=product::find($id);
		return view('products.edit',compact('prod'));
	}
	public function update(Request $request,$id){
		$prod=product::find($id);
		$prod->category_id=$request->category_id;
		$prod->product_name=$request->product_name;
		$prod->product_size=$request->product_size;
		$prod->price=$request->price;
		$prod->save();
		return redirect('/products');
	}
	public function GetProducts(){
	$proArray= product::all();
	return view("products.edit",compact("proArray"));
    }
	
	public function Form(){
     return view('products.form');
	}
	
	public function GetProductsDetail(){
		$proArray=product::find(1);
		echo $proArray->category_id;
		echo $proArray->product_name;
		echo $proArray->product_size;
		echo $proArray->price;
	}
	
	public function delete($id){
		$prods=product::findOrFail($id)->delete();
		return redirect('/products');
	}
}
