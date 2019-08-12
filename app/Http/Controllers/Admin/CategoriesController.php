<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function Index(){
	$catArray = category::all();
	return view('admin.categories.index', compact('catArray'));
    }   
	
    public function Save(Request $request){
		$cate=new Category;
		$cate->name=$request->name;
		if($cate->save()){
			echo "added successfully";
		}
		else{
			echo "<script>alert('not added')</script>";
		}
		return redirect("/admin/categories");
    }
	
	 public function Form(){
		return view('admin.categories.form');
	}
	
	public function Edit($id){
		$cat=category::find($id);
		return view('admin.categories.edit',compact('cat'));
	}
	
	public function update(Request $request,$id){
		$catArray=category::find($id);
		$catArray->name=$request->name;
		$catArray->save();
		return redirect('/admin/categories');
	}
	
	public function GetCategoriesDetail(){
		$catArray=category::find(1);
		echo $catArray->name;
	}
	
	public function GetCategories(){
		$catArray= category::all();
		return view("admin.categories.edit",compact("catArray"));
    }
	
	public function delete($id){
		$cut=category::findOrFail($id)->delete();
		return redirect('/admin/categories');
	}
}