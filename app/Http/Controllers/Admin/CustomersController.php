<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Customer;

class customersController extends Controller
{
    public function Index(){
	$custArray = customer::all();
	return view('admin.customers.index',compact("custArray"));
    }   
	
    public function Save(Request $request){
		$cust=new Customer;
		$cust->name=$request->name;
		$cust->address=$request->address;
		$cust->mobile=$request->mobile;
		if($cust->save()){
			echo "<script>alert('added successfully')</script>";
		}
		else{
			echo "<script>alert('not added')</script>";
		}
		return redirect("/admin/customers");
    }
	
	public function Edit($id){
		$cust=customer::find($id);
		return view('admin.customers.edit',compact('cust'));
	}
	
	public function update(Request $request,$id){
		$custArray=customer::find($id);
		$custArray->name=$request->name;
		$custArray->address=$request->address;
		$custArray->mobile=$request->mobile;
		$custArray->save();
		return redirect('/admin/customers');
	}
	
	public function GetCustomers(){
	$custArray= customer::all();
	return view("admin.customers.edit",compact("custArray"));
    }
	
	public function Form(){
     return view('admin.customers.form');
	}
	
	public function delete($id){
		$custs=customer::findOrFail($id)->delete();
		return redirect('/admin/customers');
	}
	
	public function GetCustomersDetail(){
		$custArray=customer::find(1);
		echo $custArray->name;
		echo $custArray->address;
		echo $custArray->mobile;
	}
}
