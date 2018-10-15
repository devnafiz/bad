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
Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@index']);


//============================ product===============//
Route::get('/create-product',['as'=>'create-product','uses'=>'ProductController@create']);
Route::post('/create-product/save',['as'=>'saveProduct','uses'=>'ProductController@store']);
Route::get('/manage-product/index',['as'=>'manageProduct','uses'=>'ProductController@index']);




//===============category ===================//
Route::get('/create-category',['as'=>'create-category','uses'=>'CategoriesController@create']);
Route::post('/create-category/save',['as'=>'saveCategory','uses'=>'CategoriesController@store']);
Route::get('/manage-category',['as'=>'manageCategory','uses'=>'CategoriesController@index']);

//=======Customer ============================//

Route::get('/create-customer',['as'=>'create-customer','uses'=>'CustomerController@create']);
Route::post('/create-customer/save',['as'=>'saveCustomer','uses'=>'CustomerController@store']);
Route::get('/manage-customer',['as'=>'manage-customer','uses'=>'CustomerController@index']);



//=======Suppliar ============================//

Route::get('/create-supplier',['as'=>'create-supplier','uses'=>'SupplierController@create']);
Route::post('/create-supplier/save',['as'=>'saveSupplier','uses'=>'SupplierController@store']);
Route::get('/manage-supplier',['as'=>'manage-supplier','uses'=>'SupplierController@index']);




//=======Purchase ============================//

Route::get('/create-purchase',['as'=>'create-purchase','uses'=>'PurchaseController@create']);
Route::post('/create-purchase/save',['as'=>'purchaseSave','uses'=>'PurchaseController@store']);
Route::get('/manage-purchase',['as'=>'manage-purchase','uses'=>'PurchaseController@index']);




//=======Account ============================//

Route::get('/create-account',['as'=>'create-account','uses'=>'AccountController@create']);
Route::post('/create-account/save',['as'=>'saveAccount','uses'=>'AccountController@store']);
Route::get('/manage-account',['as'=>'manage-account','uses'=>'AccountController@index']);



//=======Bank ============================//

Route::get('/create-bank',['as'=>'create-bank','uses'=>'BankController@create']);
Route::get('/manage-bank',['as'=>'manageBank','uses'=>'BankController@index']);
Route::get('/bank-transtion',['as'=>'bankTranstion','uses'=>'BankController@bankTranstion']);
Route::post('/create-bank/save',['as'=>'saveBank','uses'=>'BankController@store']);

Route::post('/bank-transtion/save',['as'=>'bankTranstionSave','uses'=>'BankController@storeTrans']);
Route::get('/bank-transtion/bankLadger/{id}',['as'=>'bankLadger','uses'=>'BankController@bankLadger']);

//=======office loan ============================//

Route::get('/create-office-loan',['as'=>'create-office-loan','uses'=>'OfcloanController@create']);
Route::get('/manage-office-loan',['as'=>'manage-office-loan','uses'=>'OfcloanController@index']);
Route::post('/create-office-loan/save',['as'=>'manage-office-save','uses'=>'OfcloanController@store']);





//=======personal loan ============================//

Route::get('/create-personal-loan',['as'=>'create-personal-loan','uses'=>'PersonalLoanController@create']);
Route::post('/create-personal-loan/save',['as'=>'personalSave','uses'=>'PersonalLoanController@store']);
Route::get('/manage-personal-loan',['as'=>'manage-personal-loan','uses'=>'PersonalLoanController@index']);
Route::get('/add-personal-loan',['as'=>'add-personal-loan','uses'=>'PersonalLoanController@personalLoan']);
Route::post('/add-personal-loan/save',['as'=>'personalLoanSave','uses'=>'PersonalLoanController@personalLoanSave']);

Route::get('/manage-personal-loan-trans',['as'=>'personalLoanManage','uses'=>'PersonalLoanController@personalLoanManage']);


//=======Invoice ============================//

Route::get('/create-invoice',['as'=>'create-invoice','uses'=>'InvoiceController@create']);
Route::get('/invoice-manage',['as'=>'invoice-manage','uses'=>'InvoiceController@index']);
Route::post('/invoice-create/save',['as'=>'saveInvoice','uses'=>'InvoiceController@store']);
