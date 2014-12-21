<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/home','ProductController@All');

Route::get('/opencart/{id}','ProductController@showOpenCart');

Route::get('/product/{kindid}/{id}','ProductController@showProduct');

Route::get('/role','RoleController@showRole');
Route::get('/logout', 'HomeController@logout');


Route::get('/customerRegister','customerController@getCustomerRegister');
//Route::post('/customerRegister', 'customerController@postCustomerRegister');
Route::post('/customerRegister', 'customerController@postCustomerRegister');

Route::post('/customerLoginTc', 'customerController@customerLoginTc');
Route::get('/customerLogin', 'customerController@getCustomerLogin');
Route::post('/ktLogin', 'customerController@ktLogin');
Route::post('/checkLogin','customerController@checkLogin');

Route::post('checkEmail','customerController@checkEmail');
Route::post("checkUsername",'customerController@checkUsername');

Route::get('thongTin','thongTinController@thongTin');
//Route::post('thongTin1','thongTinController@thongTin1');
Route::get('historySP', 'thongTinController@historysp');
Route::post('checkPassCustomer','thongTinController@checkPassCustomer');
Route::get('forgotPassword','thongTinController@forgotPassword');
Route::get('sentmail','thongTinController@sentmail');
Route::get('tdPasscustomer','thongTinController@pass');
Route::post('tdPasscustomer','thongTinController@tdPasscustomer');
Route::post('checkPassCustomer','thongTinController@checkPassCustomer');

Route::get('sanphamCustomer', 'sanphamController@sanpham');
Route::post('sanphamCustomer', 'sanphamController@postsanpham');
Route::post('getUserSp', 'sanphamController@getUserSp');

Route::get('giohang','sanphamController@giohang' );
Route::post('giohang','sanphamController@postgiohang' );

Route::post('slSanpham', 'sanphamController@slSanpham');
Route::get('deleteSession', 'sanphamController@deleteSession');

Route::get('buyProduc', 'sanphamController@buyProduc');
Route::get('order', 'sanphamController@order');
Route::post('order', 'sanphamController@postorder');

Route::get('random_image','sanphamController@random_image');
Route::post('captcha','sanphamController@ktcaptcha');
Route::get('confirmation_code','sanphamController@confirmation_code');
Route::post('confirmation_code','sanphamController@postcode');
Route::post('ktCode', 'sanphamController@ktCode');

Route::get('texsearch', 'HomeController@texsearch');
Route::get('search', 'HomeController@search');
Route::get('searchSP', 'HomeController@searchSP');

Route::get('searchP', 'HomeController@searchP');
Route::get('search_name', 'HomeController@search_name');

Route::get('/logoutCompany', 'HomeController@logoutCompany');


Route::post('/companyLoginTc','CompanyController@companyLoginTc');
Route::get('/companyLogin', 'CompanyController@getCompanyLogin');
Route::post('/ktcompanyLogin','CompanyController@checkLogin');
Route::get('/companyRegister','CompanyController@getCompanyRegister');
Route::post('/companyRegister','CompanyController@postCompanyRegister');
Route::get('/companyediter','CompanyController@getcompanyEditor');
Route::post('/postcompanyediter','CompanyController@postCompanyEditor');

Route::get('/companysanpham','CompanyController@getEditSanPham');
Route::post('/companyEditsanpham','CompanyController@postEditSanPham');

Route::get('/companyThongtin','CompanyController@getThongtin');
Route::post('/companyThongtin','CompanyController@getThongtin');
Route::get('companythongTin','thongTinController@thongTinCompany');
Route::post('checkcompanyaccountname','CompanyController@checkAccountname');
Route::get('chitiet', 'sanphamController@chitiet');