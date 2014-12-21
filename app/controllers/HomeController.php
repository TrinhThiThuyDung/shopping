<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('customer/home');
	}

	public function logout()
	{
		Session::forget("userLogin");
		Session::forget("userSp");
		Session::forget('mxn');
		Session::forget('numberCode');
		return Redirect::to('home');
	}

	public function searchSP(){
		return View::make('customer/searchSP');
	}

	public function searchP(){
		$data= $_GET['bt1'];
		$id = Product::where("id_kind","=",$data)->get();
		return View::make('customer/produc_search')->with('id',$id);
	}

	public function search_name(){
	
		$texSearch1 = $_GET['texSearch1'];
		$id = Product::search($texSearch1);
		return View::make('customer/produc_search')->with('id',$id);
	} 
public function logoutCompany()
	{
		Session::forget("companyLogin");
		return Redirect::to('companyLogin');
	}
	public function texsearch(){
		$texSearch1 = $_GET['texSearch1'];
		//$texSearch = $_GET['texSearch'];
		$data = Product::searchSP($texSearch1);
		//$dl =array('');
		foreach ($data as $nameSP) {
			$dl[] = $nameSP['name'];
		}
		return Response::json($dl);
		
	}
	
	

}
