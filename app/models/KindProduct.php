<?php
class KindProduct extends Eloquent{
	public $kind_product = 'kind_product';
	public static function getKindProduct($id){
   		 
   		$pro = DB::table('kind_product')->where('id',$id)->get();
   		return $pro;
 	}
}
?>