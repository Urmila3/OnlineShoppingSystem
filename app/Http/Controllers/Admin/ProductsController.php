<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

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
		$prod->image=$request->image;
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
		$prod->image=$request->image;
		$prod->price=$request->price;
		$prod->save();
		return redirect('/admin/products');
	}
	public function GetProducts(){
	$proArray= product::all();
	return view("products.edit",compact("proArray"));
    }
	
	public function Form(){
     return view('products.form');
	}
	
	
	public function delete($id){
		$prods=product::findOrFail($id)->delete();
		return redirect('/admin/products');
	}
	
	public function UploadFile(Request $request){
		$file=$request->file("image");
		$file->move("/admin/products/create",$file->getClientOriginalExtension());
		
	}
	
/*read garxa yo functionle*/
	public function getAllImages(){
		$images=\File::files("D:\myspace");
		foreach($images as $image){
			$info=pathinfo($image);
			echo $info['basename'];
			echo "<img src='D:\myspace".$info['basename']."'/>";
		}
		return view("products.form",compact($images));
	}
	
	
	/*public function getAllImages(Request $request) {
		
		$user=new file;
		$user->category_id=Input::get('product_name');
		if(Input::hasFile('image')){
			$file=Input::file('image');
			$file->move(public_path().'/',$file->getClientOriginalName());
			$user->product_name=$file->getClientOriginalName();
		}
		$user->save();
		return redirect("/admin/products/upp");
	}		
	
	public function Show(){
		$user=file::all();
		return view("products.upload",compact('user'));
	}	*/
	

}
