<?php
	class Company extends Eloquent{
		public $table = "company";
		public static function insert($name,$address,$email,$pass,$phone1,$description){
			$user = array("name"=>$name,"address"=>$address,"account_name"=>$email,"account_pass"=>$pass,"tel"=>$phone1,"description"=>$description);
			DB::table("company")->insert($user);
		}
		public static function thongtin($username){
			$thongtin = Company::select('name','address','account_name','tel')->where("name","=",$username)->get();
			return $thongtin;
		}
		public static function updatePass($username, $pass){
			$update = array("account_pass"=> $pass);
			$user = DB::table('company')->where('name', '=', $username)->update($update);
		}

	}
?>