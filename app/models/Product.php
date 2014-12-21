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
		 public static function insert($productname,$nameimg,$descripbe,$lenght,$height,$width,$depth,$color,$price,$codecompany,$idkind){
			$user = array("id_company"=>$codecompany,"id_kind"=>$idkind,"name"=>$productname,"length"=>$lenght,"hight"=>$height,"width"=>$width,
				"depth"=>$depth,"color"=>$color,"describe"=>$descripbe,"image"=>$nameimg,"price"=>$price);
			DB::table('product')->insert($user);
		}
        public static function deleteProduct($id){
        	DB::table('product')->where("id","=",$id)->delete();
        }
        public static function updateProductName($id, $productname){
            $update = array("pass"=> $productname);
			Product::where('id', '=', $id)->update($update);
        }
        public static function updateProductdescripbe($id, $descripbe){
            $update = array("pass"=> $descripbe);
			Product::where('id', '=', $id)->update($update);
        }
        public static function updateProductcodecompany($id, $codecompany){
            $update = array("pass"=> $codecompany);
			Product::where('id', '=', $id)->update($update);
        }
	}
	
?>