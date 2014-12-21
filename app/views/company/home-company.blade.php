@extends('layout.layout-company')
@section('title')
Trang chủ | 
@endsection
<?php 
  if(!Session::has('companyLogin')){
      return Redirect::to('/companyLogin');
   }
 else{
 	$name = Session::get('companyLogin');
 }
?>
@section('content')
<div id="container">
	<div id="content">
		<div class="fast-link">
             <a href="{{Asset('home')}}">Trang chủ</a>
                » 
             <a href="">Sản phẩm</a>
        </div>
        <div>
        <h1><?php echo $name ?></h1>
           <p>Tổng số sản phẩn của công ty: <?php echo count($product); ?></p>
           <p>
            <a href="{{Asset('/getInsertProduct')}}" class="btn btn-lg btn-success" role="button"  data-toggle="modal" data-target="#myModaladd" style="text-decoration:none"> Thêm sản phẩm</a>
           </p>
        </div>
         <div class="box featured">
                        <div class="box-content">
                        <div class="box-product" >
                          <ul>
                          	<?php $url = URL::to('/')."/images";?>
                          	  <?php 
                      
                        $i = 0;
                        $total = (int)(count($product)/4);
                       
                        $y = $i;
                       while($i<$total&&$i<8){
                         ?>
                          	 <li class="first-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                  <img src="<?php echo $url.$product[$y]->image;?>" alt="" width="250px" height="250px;"/>
                                </div>
                                <div class="name"> <a href=""><?php echo $product[$y]->name; ?></a> </div>
                                <div class="wrapper">
                                  <div class="cart"> 
                                  	 <a style="color:#FFF;background-color:#5cb85c" class="button"  data-toggle="modal" data-target="#myModaldelete"> <span>Xóa</span> </a>
                                  	<a class="button"  data-toggle="modal" data-target="#myModal"> <span>Sửa</span> </a>
                                  </div>
                                  <div class="price"> <span class="price-new"><?php echo $product[$y]->price; ?></span> 
                                  	<span class="price-old"><?php echo ($product[$y]->price*100)/30; ?></span> </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                        <img src="<?php echo $url.$product[$y+1]->image;?>" alt="" width="250px" height="250px;"/>
                                   </a>
                                </div>
                                <div class="name"> <a href=""><?php echo $product[$y+1]->name; ?></a> </div>
                                <div class="wrapper">
                                  <div class="cart"> 
                                  	 <a style="color:#FFF;background-color:#5cb85c" class="button"  data-toggle="modal" data-target="#myModaldelete"> <span>Xóa</span> </a>
                                  	<a class="button"  data-toggle="modal" data-target="#myModal" href=""> <span>Sửa</span> </a>
                                  </div>
                                  
                                
                                  <div class="price"> <span class="price-new"><?php echo $product[$y+1]->price; ?></span> 
                                  	<span class="price-old"><?php echo ($product[$y+1]->price*100)/30; ?></span> </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                        <img src="<?php echo $url.$product[$y+3]->image;?>" alt="" width="250px" height="250px;"/>
                                   </a>
                                </div>
                                <div class="name"> <a href="product.html"><?php echo $product[$y+2]->name; ?></a> </div>
                                <div class="wrapper">
                                  <div class="cart"> 
                                  	 <a style="color:#FFF;background-color:#5cb85c" class="button"  data-toggle="modal" data-target="#myModaldelete"> <span>Xóa</span> </a>
                                  	<a class="button"  data-toggle="modal" data-target="#myModal"> <span>Sửa</span> </a>
                                  </div>
                                 
                                
                                  <div class="price"> <span class="price-new"><?php echo $product[$y+2]->price; ?></span> 
                                  	<span class="price-old"><?php echo ($product[$y+2]->price*100)/30; ?></span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="last-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                       <img src="<?php echo $url.$product[$y+3]->image;?>" alt="" width="250px" height="250px;"/>
                                   </a>
                                </div>
                                <div class="name"> <a href="product.html"><?php echo $product[$y+3]->name; ?></a> </div>
                                <div class="wrapper">
                                  <div class="cart"> 
                                  	 <a style="color:#FFF;background-color:#5cb85c" class="button"  data-toggle="modal" data-target="#myModaldelete"> <span>Xóa</span> </a>
                                  	<a class="button"  data-toggle="modal" data-target="#myModal"> <span>Sửa</span> </a>
                                  </div>
                                  <div class="price"> <span class="price-new"><?php echo $product[$y+3]->price; ?></span> 
                                  	<span class="price-old"><?php echo ($product[$y+3]->price*100)/30; ?></span> </div>
                                </div>
                              </div>
                            </li>
                             <!--------------------------MODAL:STRAT-------------------------->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                     	<div class="inner-indent">
                                		<div class="img2">
                                            <a>
                                            <img src="../images/box/Charles Eames Style Bench 1 copy-190x190.png" alt=""/>
                                            </a>
                                		</div>
                                		<table>
                                        <tr>
                                        <td>
                                		<div class="wrapper" style="margin: 20px;">
                                            <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                            <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                		</div>
                                        </td>
                                        <td>
                                        	<h3>THAY ĐỔI</h3>
                                              <form action="#" method="post" enctype="multipart/form-data" id="register">
                                    <table class="form">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="required">*</span>Tên sản phẩm :
                                                        </td>
                                                        <td>
                                                            <input class="q4" type="text" name="productname" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="required">*</span>Miểu tả sản phẩm :
                                                        </td>
                                                        <td>
                                                            <input class="q5" type="text" name="descripbe" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="required">*</span>Giá cố định:
                                                        </td>
                                                        <td>
                                                            <input class="q4" type="text" name="codecompany" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                               			 </form>
                                        </td>
                                        <tr>
                                        </table>
                              		</div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary" style="background-color:#d45f09">Lưu thay đổi</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <script type="text/javascript">
                                $('#myModal').on('show.bs.modal', function (e) {
                                  if (!data) return e.preventDefault() // stops modal from being shown
                                })
                                </script>
                                <!-----cho nuit xoa san pham------>
                                <div class="modal fade" id="myModaldelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    	<h3>Bạn có thực sự muốn xóa sản phẩm :( </h3>
                                     	<div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary" style="background-color:#5cb85c">Xóa sản phẩm</button>
                                      </div>
                                      </div>
                                    </div>
                                
                                <script type="text/javascript">
                                $('#myModaldelete').on('show.bs.modal', function (e) {
                                  if (!data) return e.preventDefault() // stops modal from being shown
                                })
                                </script>
                                
 								<!--------------------------MODAL:END-------------------------->
 								 <?php 
                        $i ++;
                        $y = $y+4;
                       }
                      ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
    