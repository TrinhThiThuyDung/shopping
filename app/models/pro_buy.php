<?php
	class Pro_buy extends Eloquent{
		public $table = "pro_buy";

		public static function upSpbuy($id_user,$id_produc,$number,$date_buy){
			$data = array('id_user'=>$id_user,'id_product'=>$id_produc,'number'=>$number,'date_buy'=>$date_buy);
			DB::table("pro_buy")->insert($data);
		}
		

		public static function thongtin($id_user){
			$data = Probuy::where('id_user','=',$id_user)->get();
			return $data;
		}
	}
?>