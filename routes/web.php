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

Route::get('/', function () {
    return view('welcome');
});

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


Route::post('/products/save','ProductsController@Save');
Route::get('/products','ProductsController@Index');
Route::get('/products/create','ProductsController@Form');
Route::get('/products/edit/{id}','ProductsController@Edit');
Route::post('/products/update/{id}','ProductsController@update');
Route::get('/products/delete/{id}','ProductsController@delete');
Route::get('/products/getall','ProductsController@GetProducts');
Route::get('/products/getproductsdetail','ProductsController@GetProductsDetail');

Route::post('/sales/save','SalesController@Save');
Route::get('/sales','SalesController@Index');
Route::get('/sales/create','SalesController@Form');
Route::get('/sales/edit/{id}','SalesController@Edit');
Route::post('/sales/update/{id}','SalesController@update');
Route::get('/sales/delete/{id}','SalesController@delete');
Route::get('/sales/getall','SalesController@GetSales');
Route::get('/sales/getsalesdetail','SalesController@GetSalesDetail');

Route::post('/salesdetails/save','SalesdetailsController@Save');
Route::get('/salesdetails','SalesdetailsController@Index');
Route::get('/salesdetails/create','SalesdetailsController@Form');
Route::get('/salesdetails/edit/{id}','SalesdetailsController@Edit');
Route::post('/salesdetails/update/{id}','SalesdetailsController@update');
Route::get('/salesdetails/delete/{id}','SalesdetailsController@delete');
Route::get('/salesdetails/getall','SalesdetailsController@GetSalesDetails');
Route::get('/salesdetails/getsalessdetail','SalesdetailsController@GetSalesDetail');