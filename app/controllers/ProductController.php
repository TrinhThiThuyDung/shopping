<?php
/**
 * 
 */
 class ProductController extends BaseController
 {
 	//protected $products = array();
 	public function All(){

 		$products['product'] = DB::table('product')->get();
 		//var_dump($products);
 		return View::make('home')->with('products',$products);
 		
 	}

	public function showOpenCart($id_kind){
		switch($id_kind){
			case 10:
			case 20:
			case 30:
			case 40:
			case 50:
			case 60:
			case 70:
			    $product = DB::table('product')->where('id_kind',">",$id_kind)->where('id_kind',"<",$id_kind+10)->get();
			    break;
			default:
			    $product = DB::table('product')->where('id_kind',$id_kind)->get();
			    break;

		}		
 			return View::make('opencart')->with('products',$product);
 		
 	}


	public function showProduct($kindid, $id){	
		$kind_id = DB::table('kind_product')->where('id', $kindid)->get();
		//var_dump($kind_id);
		$id_id = DB::table('product')->where('id', $id)->get();
		//var_dump($)
		if(count($kind_id) > 0 && count($id_id) > 0) {
			
	 		//var_dump($kind_id);
	 		$products= Product::getKindProduct($kind_id[0]->id);
	 		$product = Product::getProduct($id_id[0]->id);
	 		//var_dump($product);
	 		return View::make('product')->with('product',$product)->with('products',$products);
	 	}
	 	else{
	 		unset($products);
	 		$kind_id = DB::table('kind_product')->select('id')->get();
	 		//var_dump($kind_id);
	 		$i = 0;
	 		foreach ($kind_id as $kind) {
	 			$products[$i] = Product::getProduct($kind->id);
	 			if(count($products[$i]) > 0) $i++;
	 		}
	 		return Redirect::to('home')->with('products',$products);
	 	}
	}
 	public function test(){
 		var_dump($products);
 	}
 	
 } 
?>