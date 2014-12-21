<?php
	class sanphamController extends BaseController {
		public function sanpham(){
			return View::make('customer/sanpham');
		}
		public function giohang(){
			return View::make('customer/giohang');
		}
		public function postgiohang(){
			$id = Session::get("userSp");
			$sl = $_POST['numbersp'];
			$idSP = $_POST['idsp'];
			for ($i= 0; $i < count($id);$i++) {
				if($idSP == $id[$i]['id']){
					//$id[$i]['number'] = $sl;
					if($sl > 0)
						$id[$i]['number'] = $sl;
				}
			}
			Session::put('userSp',$id);
			return Redirect::to('giohang');
		}
		public function postsanpham(){
			return Redirect::to('giohang');
		}
		public function getUserSp(){
		
		
			if(Session::has('userLogin')){
				if(Session::has('userSp')){				
					$i = 0;
					$id = Session::get("userSp");
					$idSP = $_POST['id'];
					foreach ($id as $sp )
						if($idSP==$sp['id'])	$i++;
					if($i == 0){
						$dl = Product::thongtinSP($idSP);
						$dl[0]->number= 1;	
						$id[]=array('id'=>$dl[0]->id,'name'=>$dl[0]->name,'price'=>$dl[0]->price,'number'=>$dl[0]->number,'image'=>$dl[0]->image);
						Session::put('userSp',$id);
					}
				}else{
					$idSP= $_POST['id'];
					$dl = Product::thongtinSP($idSP);
					$dl[0]->number= 1;	
					$id = array(array('id'=>$dl[0]->id,'name'=>$dl[0]->name,'price'=>$dl[0]->price,'number'=>$dl[0]->number,'image'=>$dl[0]->image));
					Session::put('userSp',$id);
				}
				return Response::json(1);
			}else return Response::json(0);
		}

		public function slSanpham(){
			$id = Session::get("userSp");
			$sl = $_POST['sl'];
			$idSP = $_POST['id'];
			for ($i= 0; $i < count($id);$i++) {
				if($idSP == $id[$i]['id'])
					if($sl == 0)
						return Response::json(0);
					else {
						$id[$i]['number'] = $sl;
						Session::put('userSp',$id);	
						return Response::json(1);
					}
			}
			
			//Session::forget("userSp");
			
		}

		public function deleteSession(){
			$id = Session::get("userSp");
			$idSP = $_GET['id'];
			if(count($id)==1 )
				Session::forget("userSp");
			else{
				if($idSP==$id[0]['id']){
					
					$idNew = array(array('id'=>$id[1]['id'],'name'=>$id[1]['name'],'price'=>$id[1]['price'],'number'=>$id[1]['number'],'image'=>$id[1]['image']));
					for($i =2 ; $i < count($id); $i++)
						$idNew[] = array(array('id'=>$id[$i]['id'],'name'=>$id[$i]['name'],'price'=>$id[$i]['gia'],'number'=>$id[$i]['number'],'image'=>$id[$i]['image']));					
				}else{
					$idNew = array(array('id'=>$id[0]['id'],'name'=>$id[0]['name'],'price'=>$id[0]['price'],'number'=>$id[0]['number'],'image'=>$id[0]['image']));
					for($i =1 ; $i < count($id); $i++)
						if($idSP!=$id[0]['id'])
						$idNew[] = array(array('id'=>$id[$i]['id'],'name'=>$id[$i]['name'],'price'=>$id[$i]['price'],'sl'=>$id[$i]['price'],'image'=>$id[$i]['image']));					
				}
				Session::put('userSp',$idNew);
			}
			return Redirect::to('giohang');	
		}

		public function buyProduc(){
			return Redirect::to('home');
		}

		public function order(){
			if(Session::has('userLogin')){
				$name = Session::get('userLogin');
				$thongtin = USer::thongtin($name);
				return View::make('customer/order')->with("user", $thongtin);
			}
			else return  Redirect::to('home');
		}

		public function postorder(){
		
			
			    $id = Session::get('userSp');
			    if(Session::has('userLogin')){
					$name = Session::get('userLogin');
					$thongtin = USer::thongtin($name);
					Mail::send('customer.welcome', array('firstname'=>$thongtin[0]->name,'id'=> $id), function($message){
				        $message->to('anhbanghht@gmail.com')->subject('Welcome!');
				    });
				}else Redirect::to('customerLogin');

				return View::make('customer/confirmation_code');
		}

		public function confirmation_code(){
			return View::make('customer/confirmation_code');
		}

		public function ktCode(){
			if(Session::has('mxn')){
				$code = Session::get('mxn');
				$mxn = $_POST['mxn'];
				if($code == $mxn){
					//insert in to table pro_buy
					$date =  date("Y-m-d");
					$username = Session::get('userLogin');
					$data = User::thongTin($username);
					$id_user = $data[0]->id;

					$id = Session::get('userSp');
					foreach ($id as $sp) {
					Probuy::upSpbuy($id_user,$sp['id'],$sp['number'],$date);	
					}
					//xoa session::userSP
					Session::forget('userSp');			
					Session::forget('mxn');
					Session::forget('numberCode');
					return Response::json(1);
				}
				else {
					if(!Session::has('numberCode')){
						Session::put('numberCode',1);
						return Response::json(0);
					}
					else {				
						$i = Session::get('numberCode');
						$i++;
						if($i <= 5){
							Session::put('numberCode',$i);
							return Response::json(0);
						}
						else {
							return Response::json(2);
							//Session::forget('mxn');
							//Session::forget('numberCode');
						}
						//return Redirect::to('logout');
					}
					
				}
			}else return Redirect::to('order');

		}

		public function postcode(){
			return Redirect::to('logout');
			
		}

		public function ktcaptcha(){
			$txtCaptcha = $_POST['mxn'];
			$code = Session::get("code");
			if($txtCaptcha == $code)
				return Response::json(1);
			else return Response::json(0);
		}
		public function random_image() { 

		    $md5_hash = md5(rand(0,999)); 
		    $code = substr($md5_hash, 15, 5); 
		    Session::put('code', $code);
		    $width = 250; 
		    $height = 30;  
		    $image = ImageCreate($width, $height);  
		    $white = ImageColorAllocate($image, 255, 255, 255); 
		    $black = ImageColorAllocate($image, 0, 0, 0); 
		    ImageFill($image, 0, 0, $black); //man hình mau den//
		    ImageString($image, 5,100, 6, $code, $white); // chu co ma trang 
			 //5: là font-size //30: là khoảng cách bên trái của tấm hình.//6 : là khoảng cách từ trên của tấm hình.
		    header("Content-Type: image/jpeg"); //header để trả nội dung này trở về dữ liệu dạng hình
		    ImageJpeg($image); 
		    ImageDestroy($image); 
		} 
		public function chitiet(){
			$data = $_GET['id'];
			$id = Product::thongtinSP($data);
			//$comment = Comment::comment($data);
			$comment = Comment::where('id_produc','=',$data)->get();
			foreach ($comment as $id_user) {
				//$name = User::username1($id_user[0]->id_user);
				$name = User::select('name')->where('id','=',$id_user[0]->id_user);
				$username[] = $name[0]->name;
			}
			return View::make('customer/chitiet')->with("id",$id)->with('comment',$comment)->with('username',$username);
		}
	}
?>