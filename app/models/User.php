<?php
	class User extends Eloquent{
		public $table = "user";

		public static function thongtin($username){
			$thongtin = User::select('id','name','gener','birth','email', 'address','tel')->where("name","=",$username)->get();
			return $thongtin;
		}

		public static function username1($id){
			$data = User::select('name')->where('id','=',$id);
			return $data;
		}

		public static function pass($username){
			$pass = User::select('pass')->where("name","=",$username)->get();
			return $pass;
		}

		public static function id($username){
			$id = User::select('id')->where("name","=",$username)->get();
			return $id;
		}

		public static function email($email){
			$name = User::select('name')->where("email","=",$email)->get();
			return $name;
		}

		public static function name($name){
			$name = User::select('name')->where("name","=",$name)->get();
			return $name;
		}

		public static function emailPass($email, $pass){
			$check = User::select('name')->where("email","=",$email)->where("pass","=",md5(sha1($pass)))->get();
			return $check;
		}

		public static function updatePass($username, $pass){
			$update = array("pass"=> $pass);
			$user = User::where('name', '=', $username)->update($update);
		}

		public static function insert($name,$email,$pass,$address,$gener,$tel,$birth){
			$user = array("name"=>$name,"email"=>$email,"pass"=>$pass,"address"=>$address,"gener"=>$gener,"tel"=>$tel,"birth"=>$birth);
			DB::table("user")->insert($user);
		}
	}
?>