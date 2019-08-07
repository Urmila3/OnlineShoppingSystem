<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function Index(){
	$catArray = category::all();
	return view('categories.index', compact('catArray'));
    }   
	
    public function Save(Request $request){
		$cate=new Category;
		$cate->name=$request->name;
		if($cate->save()){
			echo "<script>alert('added successfully')</script>";
		}
		else{
			echo "<script>alert('not added')</script>";
		}
		return redirect("categories");
    }
	
	 public function Form(){
		return view('categories.form');
	}
	
	public function Edit($id){
		$cat=category::find($id);
		return view('categories.edit',compact('cat'));
	}
	
	public function update(Request $request,$id){
		$catArray=category::find($id);
		$catArray->name=$request->name;
		$catArray->save();
		return redirect('/categories');
	}
	
	public function GetCategoriesDetail(){
		$catArray=category::find(1);
		echo $catArray->name;
	}
	
	public function GetCategories(){
		$catArray= category::all();
		return view("categories.edit",compact("catArray"));
    }
	
	public function delete($id){
		$cut=category::findOrFail($id)->delete();
		return redirect('/categories');
	}
}