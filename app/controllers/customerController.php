<?php
	class customerController extends Controller{
		public function getCustomerLogin(){
			return View::make('customer/customerLogin');
		}
		public function ktLogin(){
			//if(Request::ajax()){
				$user_input = $_POST['user_input'];
				$pass 		= $_POST['pass'];
				$check= DB::table('user')->select('name')->where("email","=",$user_input)->where("pass","=",md5(sha1($pass)))->get();			
				//$check = User::emailPass($user_input,$pass);
				if($check != null){
					Session::put('userLogin',$check[0]->name);
					//return Redirect::to('home');
					return Response::json(1);
				}else{
					//Session::put("login_success","Tên tài khoản hoặc mật khẩu của bạn sai.</br>Vui lòng nhập lại.");
					//return Redirect::to('customerLogin');
					/* @if(Session::has("login_success"))
		                    {{Session::get("login_success")}}
		                    <?php Session::forget("login_success");?>
		                @endif*/
					return Response::json(0);
				}
			//}
		}

		public function customerLoginTc(){
			
			return Redirect::to('home');
		}

		public function getCustomerRegister(){
			return View::make('customer/customerRegister');
		}

		public function checkUsername(){
			$username = $_POST["username"];
			if(DB::table('user')->select('name')->where("name","=",$username)->get() != null)
				return Response::json(false);
			else
				return Response::json(true);
		}

		public function checkEmail(){
			$email = $_POST["email"];
			if(DB::table('user')->select('email')->where("email","=",$email)->get() != null)
				return Response::json(false);
			else
				return Response::json(true);
		}
		public function postCustomerRegister(){
		
			$name = $_POST['username'];
			$gener = $_POST['gener'];
			$day= $_POST['day'];
			$month= $_POST['month'];
			$year= $_POST['year'];
			$birth = $year."-".$month."-".$day;
			$address = $_POST['address'];
			$tel = $_POST['phone'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			User::insert($name,$email,md5(sha1($pass)),$address,$gener,$tel,$birth);
			
			return Redirect::to('customerLogin');
		}
	}

?>