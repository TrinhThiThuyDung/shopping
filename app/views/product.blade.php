
@extends('layout.layout-custome')

@section('title')
<?php echo $product[0]->name;?>
@endsection

@section('content')
<?php $url = URL::to('/')."/images"; ?>
<!--MENU: END --><!-- InstanceBeginEditable name="container" -->
            <div id="container">
            	<div id="column-right">
                	
                   
                </div>
                <div id="content">
                	<div class="fast-link">
                            <a href = "{{Asset('home')}}"
                                <button class="float-left submit-button" >Trang chu</button>
                            </a>
                             
                            <a>Sản phẩm</a>
                    </div>
                    <div class="product-info">
                    	<div class="wrapper indent-bot"></div>
                        	<div class="fleft left">
                               <div class="image">
                                  <div class="zoom-small-image" >
                                        <a href="<?php echo $url.$product[0]->image;?>" class = 'cloud-zoom' rel="tint: '#fff',tintOpacity:0.5 ,smoothMove:5 ,zoomWidth:420, zoomHeight:300, adjustY:-4, adjustX:10">
                                   	 	<li ><img src="<?php echo $url.$product[0]->image;?>" style="width:280px;height:300px"alt=""/>
                                     </a></li>
                                   </div>
                            	   </div>
                          
                           		 </div>
                                <div class="extra-wrap">
                            	<ul><li><font size='5' color='#8e6636'><strong><?php echo $product[0]->name;?></strong></font></li></ul>
                                <div class="description">
                                	<span>Sản phẩm thuộc công ty : </span>
                                    <a href=""><?php echo $company[0]->name; ?></a>
                                    <br />
                                	<span>Mã sản phẩm : </span><?php echo $product[0]->id_kind;?>
                                    <br />
                                    <div class="padd-availib">
                                    	<div class="extra-wrap">
                                        	<span class="prod-stock-2">
                                            Trạng thái :
                                            </span>
                                            <div class="prod-stock"><?php if($product[0]->selled<$product[0]->input){
                                                echo "Còn hàng";
                                            }else{
                                                echo "Hết hàng";
                                            } ?></div>
                                        </div>
                                    </div></br>
                                    <span>Mo ta: </span><?php echo $product[0]->describe;?></br></br>

                                    <div class="price">
                                    	<span class="text-price">Giá : </span><?php echo $product[0]->price;?>
                                        <span class="price-old"><?php echo (int) (($product[0]->price*100)/30); ?>VNĐ</span>
                                        <br />
                                        <span class="reward">
                                        	<small>Giá trên đã bao gồm cả VAT :)</small>
                                        </span>
                                    </div>
                                    <div class="cart">
                                    	<div class="prod-row">
                                        	<div class="cart-top">
                                            	<div class="cart-top-padd">
                                                	<label>Số lượng đã mua:</label>
                                                    <span><?php echo $product[0]->selled; ?></span>
                                                </div>
                                                 <form method="get" action="{{Asset('giohang')}}" class="inline" id="formSP">
                                                <button id="id" style="background:#D45F09" "button-prod" class = "button" value="<?php  echo $product[0]->id; ?>"><span>VÀO GIỎ </span> </button>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="extra-button">
                                        	<div class="wishlist">
                                            	<a class="tip" title="thêm vào danh sách yêu thích">
                                                	Danh sách yêu thích
                                                </a>
                                            </div>
                                            <div class="compare">
                                                <a class="tip2" title="thêm vào danh sách so sánh">
                                                        Danh sách yêu thích
                                                 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                    	<div >
                                        	<img alt="0 binh luan" src="../images/box/stars-0.png"/>
                                            <div class="btn-rew">
                                            	<a>0 bình luật </a>|
                                                <a onclick="$('a[href=\'#tab-review\']').trigger('click');">Viết bình luận</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper mb-1" >
                        	<ul class="tabs">
                            	<li><a href="#tab-description" style="inline">Miêu tả</a></li>
                                <li><a href="#tab-review">Bình luận(0)</a></li>
                            </ul>
                            
                        </div>
                        <div class="wrapper">
                        	<div id="tab-description" class="tab-content" >

   								 <div class="std">
                                    <p>
                                       <!--  <php echo $product[$id][0]->describe;?> -->
                                        </p>
                                </div>

							</div>
                            <div id="tab-review" class="tab-content">
                           		<div id="review">
       				 				<div class="content">Chưa bình luận nào cho sản phẩm!</div>
								</div>
    							<h2 id="review-title"> Viết bình luận</h2>
                                <b>Nickname:</b>
                                <input type="text" value="" name="name"></input>
                                
                                <br></br>
                                <b>Bình luận : </b>
    							<textarea style="width: 98%;" rows="8" cols="40" name="text"></textarea>
                                <span style="font-size: 11px;">
                                    <span style="color: #FF0000;">
                            
                                        Chú ý:
                            
                                    </span>
                            
                                     Hãy viết có dấu nhé!
                            
                                    </span>
                               
                                <br></br>
                                <b>
                            
                                    Bình chọn :
                            
                                </b>
                                <span>Kém</span>
                                <input type="radio" value="1" name="rating"></input>
                                <input type="radio" value="2" name="rating"></input>
                                <input type="radio" value="3" name="rating"></input>
                                <input type="radio" value="4" name="rating"></input>
                                <input type="radio" value="5" name="rating" checked="checked"></input>
                                <span>Tuyệt vời</span>
                                <br></br>
                                <br></br>
                                <b>
                                	Viết mã bạn nhìn thấy
                                </b>
                                <input type="text" value="" name="captcha"></input>
                                <br></br>
                                <img id="captcha" alt="" src="../images/box/index.jpg"></img>
                                <br></br>
                                <br></br>
                                <div class="buttons">
                                    <div class="right">
                                        <a id="button-review" class="button">
                                        	<span>Tiếp tục</span>
                                        </a>
                                    </div>
                                </div>

							</div>
                            </div>
                        </div>
                    </div>
                    <div class="related"></div>
                </div>
            </div>
            <!-- InstanceEndEditable -->
            <!--BACKTOP: START-->
             	<script type="text/javascript">
					$(document).ready(function() {
						$('.main-shining').append('<div id="back-top"><a><span>Back to top</span></a>');
                        $(window).scroll(function(){
							if($(window).scrollTop() != 0){
								$('#back-top').fadeIn();
								}else{
									$('#back-top').fadeOut();
									}
							});
							$('#back-top').click(function(){
								$('html, body').animate({scrollTop:0},500);
								});

    $('#formSP').submit(function(){
        var id= $('#id').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('getUserSp')}}',
           data: 
           {
            id: id,
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
               alert("Bạn cần phải đăng nhập khi mua sản phẩm :!");
             }
             else{
               document.forms["formSP"].submit()
            }
           }
        });
     return false;
    });   
});
                </script>
@endsection