<?php
	class Product extends Eloquent{
		protected $table = "product";
  
  public static function getAll(){
  	$product = Product::all();
  	return $product;
  }
		public static function thongtinSP($id){
			$thongtin = Product::where("id","=",$id)->get();
			return $thongtin;
		}

		public static function searchSP($search){
			//$data = User::select('username')->where('username' ,'LIKE',"%$search%")->get(); 
			$data = Product::select('name')->where('name' ,'LIKE','%'.$search.'%')->get(); 
			return $data;
		}
		public static function getProduct($id){
   		 
   		$pro = DB::table('product')->where('id',$id)->get();
   		return $pro;
 	}
 	public static function getKindProduct($id_kind){
   		 
   		$pro = DB::table('product')->where('id_kind',$id_kind)->get();
   		return $pro;
 	}


		public static function search($search){
			
			$data = Product::where('name' ,'LIKE','%'.$search.'%')->get(); 
			return $data;
		} 
	}
	
?>