<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Sale;

class salesController extends Controller
{
    public function Index(){
	$salArray = sale::all();
	return view('admin.sales.index',compact("salArray"));
    }   
	
    public function Save(Request $request){
		$sal=new Sale;
		$sal->sales_id=$request->sales_id;
		$sal->amount=$request->amount;
		if($sal->save()){
			echo "<script>alert('added successfully')</script>";
		}
		else{
			echo "<script>alert('not added')</script>";
		}
		return redirect("/admin/sales");
    }
	
	public function Edit($id){
		$sal=sale::find($id);
		return view('admin.sales.edit',compact('sal'));
	}
	
	public function update(Request $request,$id){
		$sal=sale::find($id);
		$sal->sales_id=$request->sales_id;
		$sal->amount=$request->amount;
		$sal->save();
		return redirect("/admin/sales");
	}
	
	public function GetSales(){
		$salArray= sale::all();
		return view("admin.sales.edit",compact("salArray"));
    }
	
	public function Detail($id){
		$salesd=sale::find($id);
		return view('admin.sales.detail',compact('salesd'));
	} 

	public function Form(){
     return view('admin.sales.form');
	}
	
	public function delete($id){
		$sald=sale::findOrFail($id)->delete();
		return redirect('/admin/sales');
	}
	
}
