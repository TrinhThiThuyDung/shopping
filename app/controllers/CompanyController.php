<?php
	class CompanyController extends Controller{
		public function getCompanyLogin(){
			return View::make('company/companyloginhome');
		}
		public function checkLogin(){
				$user_name = $_POST['user_name'];
				$pass 		= $_POST['pass'];
				$check= DB::table('company')->select('name')->where("account_name","=",$user_name)->where("account_pass","=",$pass)->get();			
				if($check != null){
					Session::put('companyLogin',$check[0]->name);
					return Response::json(1);
				}else{
					return Response::json(0);
				}
		}

		public function companyLoginTc(){
			
			return Redirect::to('home');
		}
		public function getThongtin(){
            return View::make('company/role');
        }
        public function getCompanyRegister(){
		    return View::make('company/companyregisterhome');
		}

	    public function checkAccountname(){
		   $username = $_POST["username"];
			if(DB::table('company')->select('account_name')->where("name","=",$username)->get() != null)
				return Response::json(false);
			else
				return Response::json(true);
		}

        public function postCompanyRegister(){
			$name = $_POST['username'];
			$email= $_POST['email'];
			$phone1= $_POST['phone1'];
			$address = $_POST['address'];
			$pass=$_POST['pass'];
			$description = $_POST['description'];
            
			Company::insert($name,$address,$email,$pass,$phone1,$description);
			return Redirect::to('companyLogin');
		}

        public function getcompanyEditor(){
        	 return View::make('company/companyediter');
        }
        public function postCompanyEditor(){
             $name=$_POST['username'];
             $newpass=$_POST['newpass'];
             Company::updatePass($name,$newpass);
             return Redirect::to('companyLogin');
        }

        public function getEditSanPham(){
        	 return View::make('company/companysanpham');
        }
        public function postEditSanPham(){
             $productname=$_POST['productname'];
             $nameimg = $_FILES['file']['name'];
             $descripbe=$_POST['descripbe'];
             $lenght=$_POST['lenght'];
             $height=$_POST['height'];
             $width=$_POST['width'];
             $depth=$_POST['depth'];
             $color=$_POST['color'];
             $idkind=$_POST['idkind'];
             $price=$_POST['price'];
             $codecompany=$_POST['codecompany'];
             if($_FILES['file']['name'] != NULL){

             	 if($_FILES['file']['type'] == "image/jpeg"
                 || $_FILES['file']['type'] == "image/png"
                 || $_FILES['file']['type'] == "image/gif"){
                 	if($_FILES['file']['size'] < 1048576){

                 		$path = "D:\assets\image"; // file sẽ lưu vào thư mục data
                        $tmp_name = $_FILES['file']['tmp_name'];
                        $name = $_FILES['file']['name'];
                        $type = $_FILES['file']['type']; 
                        $size = $_FILES['file']['size']; 
                // Upload file
                        move_uploaded_file($tmp_name,$path.$name);
                 	}
             	 }
             }
                        
             Product::insert($productname,$nameimg,$descripbe,$lenght,$height,$width,$depth,$color,$price,$codecompany,$idkind);
             return Redirect::to('companysanpham');

        }


	}
?>