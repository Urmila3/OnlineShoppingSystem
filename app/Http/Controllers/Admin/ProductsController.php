<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

use App\Product;
use App\Category;

class productsController extends Controller
{
    public function Index(){
	$proArray = product::all();
	return view('admin.products.index',compact("proArray"));
    }   
	
    public function Save(Request $request){
		$prod=new Product();
		if($request->hasFile('image')){
			$image = $request->file('image');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $prod->image = $name;
		}
		$prod->category_id=$request->category_id;
		$prod->product_name=$request->product_name;
		$prod->product_size=$request->product_size;
<<<<<<< HEAD
		
=======
>>>>>>> 2db4d329c5279569a69d6f4c44f1034a8f17d5c9
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
		return view('admin.products.edit',compact('prod'));
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
	return view("admin.products.edit",compact("proArray"));
    }
	
	public function Form(){
<<<<<<< HEAD
		$cats=Category::all();
	 return view('admin.products.form',compact('cats'));
	 
=======
		$cats = Category::all();
     return view('admin.products.form', compact('cats'));
>>>>>>> 2db4d329c5279569a69d6f4c44f1034a8f17d5c9
	}
	
	
	public function delete($id){
		$prods=product::findOrFail($id)->delete();
		return redirect('/admin/products');
	}
	
	public function UploadFile(Request $request){
		$file=$request->file("image_pic");
		$file->move("uploads",$file->getClientOriginalName());
		
	}
	
/*read garxa yo functionle*/
	public function getAllImages(){
		$images=\File::files("uploads");
		foreach($images as $image){
			$info=pathinfo($image);
			//echo $info['basename'];
			echo "<img src='/uploads/".$info['basename']."'/>";
		}
	}
	
	
	
	

}
