<?php
	class CompanyController extends Controller{
        public function getAllProduct(){
           
            if(Session::has('companyLogin')){
                $name = Session::get('companyLogin');
                $id = DB::table('company')->select('id')->where('name',$name)->get();
                //var_dump($id);
                $product = DB::table('product')->where("id_company",$id[0]->id)->get();
                return View::make('company.home-company')->with('product',$product);
            }
            else{
                return Redirect::to('/companyLogin');
            }
        }
		public function getCompanyLogin(){
            return View::make('company/companyloginhome');
        }
        public function checkLogin(){
                $user_name = $_POST['user_name'];
                $pass       = $_POST['pass'];

                if((strcasecmp ($user_name,"")!=0)&&(strcasecmp ($pass,"")!=0)){
                $check= DB::table('company')->select('name','id')->where("account_name","=",$user_name)->where("account_pass","=",$pass)->get();
                $chec= DB::table('company')->select('id')->where("account_name","=",$user_name)->where("account_pass","=",$pass)->get();
                if($chec!=null){
                     Session::put('CompanyP',$chec[0]->id);    
                  } 
                  if($check!=null){
                    $users = DB::table('product')->where("id_company","=",$check[0]->id)->count('id');
                    if($users!=null){
                        Session::put('CompanyProduct',$users);
                    }
                  }
                if($check != null){
                    Session::put('companyLogin',$check[0]->name);
                    return Response::json(1);
                }else{
                    return Response::json(0);
                }
            }else{
                return Response::json(0);
            }
        }
        public function companyLoginTc(){
            
            return Redirect::to('company/home');
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
            $username = $_POST['username'];
            $email= $_POST['email'];
            $phone1= $_POST['phone1'];
            $address = $_POST['address'];
            $agree=$_POST['agree'];
            $pass=$_POST['pass'];
            $otherpass=$_POST['otherpass'];
            $description = $_POST['description'];
            
            if((strcasecmp ($username,"")!=0)&&(strcasecmp ($email,"")!=0)&&(strcasecmp ($phone1,"")!=0)&&(strcasecmp ($address,"")!=0)
                &&(strcasecmp ($pass,"")!=0)&&(strcasecmp ($otherpass,"")!=0)&&(strcasecmp ($description,"")!=0)&&(strcasecmp ($pass,$otherpass)==0)){

             if(DB::table('company')->select('account_name')->where("account_name","=",$email)->get() == null){
                 if($agree==1){
                    Company::insert($username,$address,$email,$pass,$phone1,$description);
                    return Response::json(1);
                 }else{
                    return Response::json(3);
                 }
             }else {
                 return Response::json(2);
             }
            }else{
              return Response::json(0);
            }
            //return Redirect::to('companyLogin');
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
        public function postUpdatePass(){
              $username=$_POST['username'];
              $pass=$_POST['pass'];
              $newpass=$_POST['newpass'];
              $check= DB::table('company')->select('name')->where("name","=",$username)->where("account_pass","=",$pass)->get();
              if((strcasecmp ($username,"")!=0)&&(strcasecmp ($pass,"")!=0)&&(strcasecmp ($newpass,"")!=0)&&($check!=null)){
                Company::updatePass($username,$newpass);
                return Response::json(1);
              }else{
                return Response::json(0);   
              }    
        }
        public function postPass(){
            return Redirect::to('companyLogin');
        }
        public function getEditSanPham(){
             return View::make('company/companysanpham');
        }
        public function postEditSanPham(){
             $productname=$_POST['productname'];
             $nameimg = $_FILES['file']['name'];
             $descripbe=$_POST['descripbe'];
           
             $color=$_POST['color'];
             $idkind=$_POST['idkind'];
             $price=$_POST['price'];
            
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
                        
             Product::insert($productname,$nameimg,$descripbe,$color,$price,$idkind);
             return Redirect::to('companysanpham');
        }
        
        public function postInsert(){
            return Redirect::to('getInsertProduct');
        }
        public function getInsertProduct(){
           //  if(Session::has('companyLogin')){
                return View::make('company/companysanpham');
             //else{
            //    return View::make('company/insertproduct-error');
            // }
        }
        public function updateCountProduct(){
            $codecompany=Session::get('CompanyP');
            $users = DB::table('product')->where("id_company","=",$codecompany)->count('id');
            if($users!=null){
                Session::put('CompanyProduct',$users);
            }
        }
         public function postInsertProduct(){

            foreach (Input::file('productimg') as $image) {
              $imagename=time().$image->getClientOriginalName();
              $uploadflag=$image->move('data',$imagename);
              if($uploadflag){
                   $uploadedimage[]=$imagename;
                   }
                }
                 $productname=$_POST['productname'];
                 $descripbe=$_POST['descripbe'];
                
                 $color="RED";
                 $idkind="1";
                 $price=$_POST['codecompany'];
                 $codecompany=Session::get('CompanyP');
                 $user = array("id_company"=>$codecompany,"id_kind"=>$idkind,"name"=>$productname,"color"=>$color,"describe"=>$descripbe,"image"=>$imagename,"price"=>$price);
                 DB::table('product')->insert($user);
                 $users = DB::table('product')->where("id_company","=",$codecompany)->count('id');
                    if($users!=null){
                      Session::put('CompanyProduct',$users);
                    }
                return Redirect::to('getInsertProduct');
        }
        public function deleteProduct(){
            $productid=$_POST['productid'];
            DB::table('product')->where('id','=',$productid)->delete();
        }

        public function updateProduct(){
            $id='12';
            $productname=$_POST['productname'];
            $descripbe  =$_POST['descripbe'];
            $codecompany=$_POST['codecompany'];
            if((strcasecmp ($productname,"")!=0)&&(strcasecmp($descripbe,"")!=0)&&(strcasecmp($codecompany,"")!=0)){
                DB::table('product')->where('id', '=', $id)->update(array("name" =>$productname,"describe"=>$descripbe,"price"=>$codecompany));
                return Response::json(1);
            }else{
                return Response::json(0);
            }
        }
        public function getPassword(){
             return View::make('company/companyquenmatkhau');
        }
        public function postPassword(){
            $email=$_POST['email'];
            if((DB::table('company')->select('account_name','account_pass')->where("account_name","=",$email)->get() != null)&&(strcasecmp($email,"")!=0))
                return Response::json(1);
            else
                return Response::json(0);
        }

        public function getThongtinCompany(){
            $id=Session::get('CompanyP');

            $count=DB::table('revenue')->where("id_company","=",$id)->sum('year');
            $countI=DB::table('revenue')->where("id_company","=",$id)->sum('I');
            $countII=DB::table('revenue')->where("id_company","=",$id)->sum('II');
            $countIII=DB::table('revenue')->where("id_company","=",$id)->sum('III');
            $countIV=DB::table('revenue')->where("id_company","=",$id)->sum('IV');
            $date =  date("Y-m-d");
            $thang=substr($date,5,2);
             if($thang==12||$thang==6||$thang==9||$thang==3){
                 $countMonth=DB::table('revenue')->where("id_company","=",$id)->sum('3-6-9-12');
             }elseif ($thang==1||$thang==4||$thang==7||$thang==10) {
                 $countMonth=DB::table('revenue')->where("id_company","=",$id)->sum('1-4-7-10');
             }else if($thang==2||$thang==5||$thang==8||$thang==11){
                 $countMonth=DB::table('revenue')->where("id_company","=",$id)->sum('2-5-8-11');
             }
            Session::put('countMonth',$countMonth);

            Session::put('countYear',$count);
            Session::put('countQI',$countI);
            Session::put('countQII',$countII);
            Session::put('countQIII',$countIII);
            Session::put('countQIV',$countIV);

            return View::make('company/companymessage');
        }
        public function checkupdateCompany(){
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $oldpass=$_POST['oldpass'];
            $newpass=$_POST['newpass'];
            $id=Session::get('CompanyP');
            if((strcasecmp ($email,"")!=0)&&(strcasecmp($phone,"")!=0)&&(strcasecmp($address,"")!=0)&&(strcasecmp($oldpass,"")!=0)&&(strcasecmp($newpass,"")!=0) &&(strcasecmp ($oldpass,$newpass)==0)){
                 DB::table('company')->where('id', '=', $id)->update(array("account_name" =>$email,"tel"=>$phone,"address"=>$address,"account_pass"=> $oldpass));
                return Response::json(1);
            }else{
                return Response::json(0);
            }
        }
        public function companyupdate(){
            
            return Redirect::to('companymessage');
        }

      public function historyProduct(){
             if(Session::has('CompanyP')){
                $id = Session::get('CompanyP');
                $listID = DB::table('product')->where('id_company','=',$id)->get();
                $listSP = array(array());
                foreach ($listID as $sp) {
                    $dl = DB::table('pro_buy')->where('id_product','=',$sp->id)->get();
                    if(count($dl) != 0){
                        foreach ($dl as $key) {
                            $user = DB::table('user')->where('id','=',$key->id_user)->get();
                            $listSP[] = array('username'=>$user[0]->name,'name'=>$sp->name,'price'=>$sp->price,'number'=>$key->number,'date'=>$key->date_buy);
                        }
                    }
                }
                return View::make('company/historyBuy')->with('listSP', $listSP);
            }return Redirect::to('companyLogin');
     }
     public function getdoanhthuYear(){
            $id=Session::get('CompanyP');
           


        return View::make('company/companymessage')->with('listSP', $listYear);

     }


	}
?>