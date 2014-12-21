<?php
	class thongTinController extends BaseController {

		//thông tin của khách hàng
		public function thongTin(){
			if(Session::has("userLogin")){
				$username = Session::get('userLogin');
				$data = User::thongTin($username);
				return View::make('customer/thongTin')->with('data',$data);
			}else return Redirect::to('customerLogin');
		}
public function thongTinCompany(){
        		if(Session::has("companyLogin")){
				$username = Session::get('companyLogin');
				$data = Company::thongTin($username);

				return View::make('company/companythongTin')->with('data',$data);
			}else return Redirect::to('companyLogin');
        } 
		//thay đổi mật khẩu
		public function pass(){
			return View::make('customer/pass');
		}
		public function checkPassCustomer(){
			$username = Session::get('userLogin');
			//$data = User::pass($username);
			$data = DB::table('user')->select('pass')->where("name","=",$username)->get();
			$rootpass = $_POST["pass"];
			if(md5(sha1($rootpass)) !=  $data[0]->pass) 
				return Response::json(false);
			else
				return Response::json(true);
		}
		public function tdPasscustomer(){
			if(Session::has("userLogin")){
				$username = Session::get('userLogin');
				$passNew = $_POST["passnew"];
				User::updatePass($username,md5(sha1($passNew)));
				return Redirect::to('home');
			}else return Redirect::to('customerLogin');
		}
public function historysp(){
			if(Session::has("userLogin")){
				$username = Session::get('userLogin');
				$id = User::id($username);
				//id san pham maf ng dung mua
				$data = Probuy::thongtin($id[0]->id);
				//return $data[1];
				if(count($data) != 0 ){
					$dl = Product::thongtinSP($data[0]->id_product);
					$sp = array(array('name'=>$dl[0]->name,'price'=>$dl[0]->price,'image'=>$dl[0]->image,'number'=>$data[0]->number,'date'=>$data[0]->date_buy));
					//return $sp;
					for ($i=1; $i < count($data); $i++) { 
						$dl = Product::thongtinSP($data[$i]->id_product);
						$sp[] = array('name'=>$dl[0]->name,'price'=>$dl[0]->price,'image'=>$dl[0]->image,'number'=>$data[0]->number,'date'=>$data[0]->date_buy);
					}
					return View::make('customer/historySP')->with("sp",$sp);
				}else return View::make('customer/historySP')->with("sp",$sp);
					
			}else return Redirect::to('customerLogin');
		}

		public function forgotPassword(){
			return View::make('customer/forgotPassword');
		}
		public function sentmail(){
			$email = $_GET['mail'];
			$name = USer::email($email);
			$md5_hash = md5(rand(0,999)); 
		    $code = substr($md5_hash, 15, 5); 

			$thongtin = USer::thongtin($name[0]->name);
			Mail::send('customer.sentmail', array('firstname'=>$name[0]->name,'code'=> $code), function($message){
		        $message->to('email')->subject('Forget password!');
		    });

		    USer::updatePass($name[0]->name,md5(sha1($code)));

		    return Redirect::to('customerLogin');
		}
	}
?>