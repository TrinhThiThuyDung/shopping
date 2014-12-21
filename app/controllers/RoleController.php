<?php
/**
 * 
 */
 class RoleController extends BaseController
 {
 	public function showRole(){/*
 		//lay ra 1 mang cac id cac loai tu product_kind (pluck)
 		$kind_id = DB::table('kind_product')->select('id')->get();
 		$product = array();
 		$i = 0;
 		//var_dump($kind_id);
 		foreach ($kind_id as $kind) {
 			# code...
 			$product[$i++] = Product::getProduct($kind->id);
 			//var_dump($kind->id);
 		}*/
       return View::make('role');
 	}
 } 
?>