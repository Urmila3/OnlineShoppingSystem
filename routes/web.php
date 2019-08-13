<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','SiteController@index');
Route::get('/site/add-cart','SiteController@index');

////////Admin routes///////

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	
	Route::get('/dashboard',"DashboardController@Index");
	
	Route::post('/categories/save','CategoriesController@Save');
	Route::get('/categories','CategoriesController@Index');
	Route::get('/categories/create','CategoriesController@Form');
	Route::get('/categories/edit/{id}','CategoriesController@Edit');
	Route::post('/categories/update/{id}','CategoriesController@update');
	Route::get('/categories/delete/{id}','CategoriesController@delete');
	Route::get('/categories/getall','CategoriesController@GetCategories');
	Route::get('/categories/getcategoriesdetail','CategoriesController@GetCategoriesDetail');


	Route::post('/customers/save','CustomersController@Save');
	Route::get('/customers','CustomersController@Index');
	Route::get('/customers/create','CustomersController@Form');
	Route::get('/customers/edit/{id}','CustomersController@Edit');
	Route::post('/customers/update/{id}','CustomersController@update');
	Route::get('/customers/delete/{id}','CustomersController@delete');
	Route::get('/customers/getall','CustomersController@GetCustomers');
	Route::get('/customers/getcustomersdetail','CustomersController@GetCustomersDetail');



	Route::get('/products','ProductsController@Index');
	Route::post('/products/save','ProductsController@Save');
	Route::get('/products/create','ProductsController@Form');
	Route::get('/products/edit/{id}','ProductsController@Edit');
	Route::post('/products/update/{id}','ProductsController@update');
	Route::get('/products/delete/{id}','ProductsController@delete');
	Route::post("/products/uploadfile","ProductsController@UploadFile");
	Route::get("/products/getallimages","ProductsController@getAllImages");
	
	
	Route::get('/products/getall','ProductsController@GetProducts');
	Route::get('/products/getproductsdetail','ProductsController@GetProductsDetail');





	Route::get('/sales','SalesController@Index');
	Route::get('/sales/detail/{id}','SalesController@Detail');
	Route::post('/sales/save','SalesController@Save');
	Route::get('/sales/create','SalesController@Form');
	Route::get('/sales/edit/{id}','SalesController@Edit');
	Route::post('/sales/update/{id}','SalesController@update');
	Route::get('/sales/delete/{id}','SalesController@delete');
	Route::get('/sales/getall','SalesController@GetSales');
	Route::get('/sales/getsalesdetail','SalesController@GetSalesDetail');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//customerside
Route::get('/products/list', 'ProductsController@productlist');
Route::get('/orders/list', 'OrdersController@orderlist');
Route::get('/payments/list','PaymentsController@paymentlist');

Route::get('/search/find/{id}',"SearchController@FindByCategory");



